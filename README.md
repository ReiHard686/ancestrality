# Ancestrality

Website em PHP sobre saúde funcional e hábitos inspirados em práticas ancestrais. O projeto reúne artigos sobre alimentação, receitas, hábitos, movimento e uma ferramenta de geração de planos alimentares com IA.

## Funcionalidades

- Conteúdos sobre superalimentos, pratos ancestrais, hábitos milenares, treino funcional e aspetos do estilo de vida moderno.
- Registo de utilizadores, início e fim de sessão.
- NutriMind: recolhe preferências e dados biométricos e solicita à API Gemini um plano alimentar; o resultado é enviado por email.
- Layout responsivo com Bootstrap e estilos próprios.

## Tecnologias

- PHP (com extensões `mysqli` e sessões)
- MySQL/MariaDB
- HTML, CSS e JavaScript
- Bootstrap 5 e Bootstrap Icons via CDN
- API Google Gemini
- PHPMailer para envio de email

## Requisitos

- PHP 8 ou superior, com `mysqli` ativado
- MySQL ou MariaDB
- Composer, caso seja necessário instalar/restaurar as dependências do PHPMailer
- Chave da API Gemini e credenciais SMTP para usar o NutriMind

## Executar localmente

1. Clone o repositório e configure um servidor PHP com suporte a MySQL como XAMP ou WAMMP.
2. Crie uma base de dados e uma tabela `USERS` com as colunas usadas pela aplicação: `name`, `email`, `date_birth` e `password`. A coluna `email` deve ter uma restrição `UNIQUE`.
3. Configure as credenciais da base de dados, a chave Gemini e as credenciais de email no ambiente do servidor.
4. A partir da pasta do projeto, inicie o servidor de desenvolvimento.

5. Abra [http://localhost:8000](http://localhost:8000).

O site público pode ser explorado sem conta. O NutriMind requer sessão iniciada. A estrutura atual não inclui um ficheiro de migração SQL; a tabela de utilizadores tem de ser criada na base de dados antes de ativar registo e autenticação.

## Estrutura

```text
.
├── index.php                    # Página inicial
├── super-alimentos.php          # Conteúdo sobre alimentos
├── pratos-ancestrais.php        # Receitas
├── hábitos-milenares.php        # Hábitos e longevidade
├── treinamento-funcional.php    # Movimento e treino
├── mal-secxxi.php               # Estilo de vida moderno
├── nutrimind-ai.php             # Interface NutriMind (requer sessão)
├── pagina-login.php             # Autenticação
├── css/                          # Estilos globais, partilhados e por página
└── tools/                        # Componentes, autenticação, base de dados, JS e imagens
```

## Nota

O conteúdo do NutriMind é gerado por IA e não substitui aconselhamento médico ou nutricional profissional.
