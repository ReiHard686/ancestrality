<?php
    session_start();
    include 'database.php';
    include 'tools-functions.php';

    if (isset($_POST["email"]) && isset($_POST["password"])) {
        if ($result = existInDB($_POST["email"], true)) {
            $row = $result->fetch_assoc();
            if ($row && password_verify($_POST["password"], $row["password"])) {
                $_SESSION["online"] = true;
                $_SESSION["username"] = $row["name"];
                $_SESSION["email"] = $row["email"];
                $_SESSION["data_nascimento"] = $row["date_birth"];
                header("Location: ../index.php");
                exit();
            } else {
                echo "<script>alert('A palavra-passe não corresponde à palavra-passe que está na base de dados. Por favor, introduza a palavra-passe correta.');</script>";
            }
        } else {
            echo "<script>alert('Este email não existe na nossa base de dados. Caso queira criar uma conta, vá para a página de criar conta.');</script>";
        }
    } elseif ($_SERVER["REQUEST_METHOD"] === "POST") {
        echo "<script>alert('O email ou palavra-passe não foi preenchido. Por favor, preencha os campos para aceder à conta.');</script>";
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
              <h1 class="h4 mb-0">Iniciar Sessão</h1>
            </div>
            <div class="card-body p-4 p-md-5">
              <form class="needs-validation" action="iniciar-sessao.php" method="post" novalidate>

                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                    <input type="email" name="email" id="email" class="form-control" required placeholder="nome@exemplo.com" autocomplete="email">
                  </div>
                </div>

                <div class="mb-4">
                  <label for="password" class="form-label">Palavra-passe</label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-lock"></i></span>
                    <input type="password" name="password" id="password" class="form-control" required autocomplete="current-password">
                  </div>
                </div>

                <div class="d-grid">
                  <button type="submit" class="btn btn-primario btn-lg">
                    <i class="bi bi-box-arrow-in-right me-2"></i>Entrar
                  </button>
                </div>

                <p class="text-center text-muted mt-4 mb-0">
                  Ainda não tem conta?
                  <a href="create-account.php" class="link-secondary">Criar conta</a>
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
