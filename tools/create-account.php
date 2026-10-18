<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    session_start();
    include 'database.php';
    include 'tools-functions.php';
    //Verifica se os inputs não estão vazios.
    if (!(empty($_POST['email']) || empty($_POST['username']) || empty($_POST['birthday']) || empty($_POST['password']))) {
        if (!existInDB($_POST['email'])) {
            //* Movendo as informaões do POST para váriáveis
            $email = $_POST['email'];
            $username = $_POST['username'];
            //! Vai verificar se a data é válida
            $birthday = (dataValid($_POST['birthday'])) ?: die("<script>alert('Erro: a data inserida pelo o usuário não é válida para o usuário. Por favor insirá uma data de aniversário superior a 5 anos'); window.location.href='create-account.php';</script>");
            $password = $_POST['password'];
            //! Encriptação da palavra passe
            $passwordhash = password_hash($password, PASSWORD_DEFAULT);
            //* Criação do comando sql para criar a conta na base de dados
            $stmt = ($mysqli->prepare("INSERT INTO USERS(name, email, date_birth, password) VALUES(?, ?, ?, ?)")) ?: die("<script>alert('Erro ao tentar preparar o comando para a criação de conta. Por favor, tente mais tarde. ERROR: $mysqli->error')</script>");
            $stmt->bind_param("ssss", $username, $email, $birthday, $passwordhash);
            if ($stmt->execute()) {
                $_SESSION["online"] = true;
                $_SESSION["username"] = $username;
                $_SESSION["email"] = $email;
                $_SESSION["data_nascimento"] = $birthday;
                header("Location: ../index.php"); //* Retorna para página inicial
                exit(); //* Encerra o script atual
            }
            else
                echo "<script>alert('Falha na Criação da conta. Por favor tente novamente criar a conta. ERROR: $mysqli->error')</script>";
        }
        else {
            echo "<script>alert('Já exite um utilizador com os dados inseridos. Por favor, crie uma conta com dados diferente.');</script>";
            exit();
        }
    }
?>
<?php include __DIR__ . '/components/head.php'; ?>
<body>
  <?php include __DIR__ . '/components/nav.php'; ?>

  <main class="section-ancestral py-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card card-ancestral shadow-sm">
            <div class="card-header card-header-ancestral text-center">
              <h1 class="h4 mb-0">Criar Conta</h1>
            </div>
            <div class="card-body p-4 p-md-5">
              <form class="needs-validation" action="create-account.php" method="post" novalidate>

                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                    <input type="email" name="email" id="email" class="form-control" required
                           placeholder="nome@exemplo.com" autocomplete="email">
                  </div>
                </div>

                <div class="mb-3">
                  <label for="username" class="form-label">Nome de utilizador</label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-person"></i></span>
                    <input type="text" name="username" id="username" class="form-control" required
                           autocomplete="username">
                  </div>
                </div>

                <div class="mb-3">
                  <label for="birthday" class="form-label">Data de Nascimento</label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-calendar-event"></i></span>
                    <input type="date" name="birthday" id="birthday" class="form-control" required
                           max="<?php echo date('Y-m-d'); ?>" autocomplete="bday">
                  </div>
                </div>

                <div class="mb-4">
                  <label for="password" class="form-label">Palavra-passe</label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-lock"></i></span>
                    <input type="password" name="password" id="password" class="form-control" required
                           autocomplete="new-password">
                  </div>
                </div>

                <div class="d-grid">
                  <button type="submit" class="btn btn-primario btn-lg">
                    <i class="bi bi-person-plus me-2"></i>Criar Conta
                  </button>
                </div>

                <p class="text-center text-muted mt-4 mb-0">
                  Já tem conta? <a href="iniciar-sessao.php" class="link-secondary">Iniciar sessão</a>
                </p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <?php include __DIR__ . '/components/footer.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
