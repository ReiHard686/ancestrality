<?php session_start(); ?>
<?php include 'tools/components/head.php'; ?>
<body>
  <?php include 'tools/components/nav.php'; ?>

  <?php if (isset($_SESSION['flash_error'])): ?>
    <script>alert('<?= htmlspecialchars($_SESSION['flash_error'], ENT_QUOTES) ?>');</script>
    <?php unset($_SESSION['flash_error']); ?>
  <?php endif; ?>

  <main class="section-ancestral py-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">

          <div class="card card-ancestral shadow-sm text-center">
            <div class="card-body p-4 p-md-5">
              <img src="tools/images/android-chrome-192x192.png" alt="Ancestrality"
                   class="img-thumbnail rounded-circle mx-auto d-block mb-4"
                   style="max-width: 140px;">
              <h1 class="h3 mb-2">Bem-vindo</h1>
              <p class="text-muted mb-4">Entre na sua conta ou crie uma nova para aceder ao NutriMind.</p>

              <div class="d-grid gap-3">
                <a href="tools/iniciar-sessao.php" class="btn btn-primario btn-lg">
                  <i class="bi bi-box-arrow-in-right me-2"></i>Iniciar Sessão
                </a>
                <a href="tools/create-account.php" class="btn btn-outline-secondary btn-lg">
                  <i class="bi bi-person-plus me-2"></i>Criar Conta
                </a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </main>

  <?php include 'tools/components/footer.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
