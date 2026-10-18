<?php
    /**
    * Averigua se o usuário já existe na base de dados.
    *  
    * @param string $email O email a ser verificado na base de dados
    * @param bool $return_name Valor booleano para retornar um objeto mysqli True, caso sim; false caso não. Por defeito: false
    * @return bool|mysqli_result Retorna true caso um usuário já existe na base de dados. Do contrário, falso.
    * Caso o valor $return_name seja passado como true, será retornado um objeto mysqli_result para manipulação.
    */
    function existInDB( string $email, ?bool $return_name = false): bool|mysqli_result
    {
        include "database.php";
        $stmt = ($mysqli->prepare("SELECT * FROM USERS WHERE email = ?")) ?: die("<script>alert('Falha ao preparar o comando para a base de dados. Por favor, reinicie a página. Error: $mysqli->error'); window.location.href='../index.php';</script>");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result && $result->num_rows>0){
            if ($return_name)
                return $result;    
            else {
                $stmt->close();
                $mysqli->close();
                return true;
            }
        }
        $stmt->close();
        $mysqli->close();
        return false;
    }
    /** 
     * Confere se a data de nascimento do usuário é válida segundo as regras de negócio do site
     * 
     * O código pegará a data atual e comparará com a idade do usuário. A idade válida segundo as regras de negócio do site é de 5 anos para cima
     * 
     * @param string $databirthday A data de nascimento do usuário a ser verificada
     * @return string|false Retorna a data caso ela seja válida. Do contrário, o valor booleano false.
     */  
    function dataValid($databirthday): string|false
    {
        date_default_timezone_set("Europe/Lisbon");
        $birthaday_time = new DateTime($databirthday);
        $actualdate = new DateTime('now');
        $age = $birthaday_time->diff($actualdate)->y;
        if ($age >= 5)
            return $databirthday; 
        return false;
    }

    /**
     * Sanitiza input do usuário para evitar prompt injection em chamadas de IA.
     *
     * @param string $texto  Texto a sanitizar
     * @param int    $maxLen Comprimento máximo permitido (padrão: 200)
     * @return string Texto sanitizado
     */
    function sanitizarInput(string $texto, int $maxLen = 200): string
    {
        // remove bytes nulos e caracteres de controlo (exceto \t \n \r)
        $texto = preg_replace('/[\x00-\x08\x0B\x0C\x0E-\x1F\x7F]/', '', $texto);
        // limita tamanho
        $texto = mb_substr($texto, 0, $maxLen);
        // remove tags HTML
        $texto = preg_replace('/[<>]/', '', $texto);
        // remove delimitadores de template
        $texto = preg_replace('/\{\{|\}\}/', '', $texto);
        // remove blocos de código
        $texto = str_replace('```', '', $texto);
        return trim($texto);
    }

    /**
     * Gera um PDF a partir de HTML e devolve o conteúdo binário.
     *
     * @param string $html HTML sanitizado (apenas tags permitidas)
     * @return string Conteúdo binário do PDF
     */
    function gerarPDF(string $html): string
    {
        require_once __DIR__ . '/php-mailer/vendor/autoload.php';

        $options = new \Dompdf\Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', false);

        $dompdf = new \Dompdf\Dompdf($options);
        $dompdf->loadHtml($html, 'UTF-8');
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        return $dompdf->output();
    }

?>