<?php
    if (session_status() === PHP_SESSION_NONE) session_start();
    $current = basename($_SERVER['PHP_SELF']);
    if (!isset($base)) {
        $_fs_root  = str_replace('\\', '/', realpath(__DIR__ . '/../../'));
        $_doc_root = rtrim(str_replace('\\', '/', realpath($_SERVER['DOCUMENT_ROOT'])), '/');
        $base = rtrim(str_replace($_doc_root, '', $_fs_root), '/');
        unset($_fs_root, $_doc_root);
    }
    $base_safe = htmlspecialchars($base, ENT_QUOTES, 'UTF-8');
?>
<nav class="navbar navbar-expand-lg sticky-top shadow-sm navbar-ancestral">
    <div class="container-fluid">
        <a class="navbar-brand d-inline-flex align-items-center gap-2 fw-bold" href="<?= $base_safe ?>/index.php">
            <img src="<?= $base_safe ?>/tools/images/android-chrome-192x192.png" alt="" width="32" height="32" class="d-block">
            <span>Ancestrality</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 30 30" aria-hidden="true">
              <path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"/>
            </svg>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav nav-underline ms-auto">
                <li class="nav-item">
                    <a href="<?= $base_safe ?>/index.php" class="nav-link <?php echo ($current === 'index.php') ? 'active' : ''; ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a href="<?= $base_safe ?>/super-alimentos.php" class="nav-link <?php echo ($current === 'super-alimentos.php') ? 'active' : ''; ?>">Super Alimentos</a>
                </li>
                <li class="nav-item">
                    <a href="<?= $base_safe ?>/pratos-ancestrais.php" class="nav-link <?php echo ($current === 'pratos-ancestrais.php') ? 'active' : ''; ?>">Pratos Ancestrais</a>
                </li>
                <li class="nav-item">
                    <a href="<?= $base_safe ?>/hábitos-milenares.php" class="nav-link <?php echo ($current === 'hábitos-milenares.php') ? 'active' : ''; ?>">Hábitos Milenares</a>
                </li>
                <li class="nav-item">
                    <a href="<?= $base_safe ?>/treinamento-funcional.php" class="nav-link <?php echo ($current === 'treinamento-funcional.php') ? 'active' : ''; ?>">Treinamento Funcional</a>
                </li>
                <li class="nav-item">
                    <a href="<?= $base_safe ?>/mal-secxxi.php" class="nav-link <?php echo ($current === 'mal-secxxi.php') ? 'active' : ''; ?>">O Mal do séc.XXI</a>
                </li>
                <?php
                    if (isset($_SESSION["online"]))
                        echo '<li class="nav-item">
                            <a href="' . $base_safe . '/nutrimind-ai.php" class="nav-link ' . ($current === 'nutrimind-ai.php' ? 'active' : '') . '">NutriMind</a>
                        </li>';
                    else
                        echo '<li class="nav-item">
                            <a href="#" class="nav-link disabled" aria-disabled="true" tabindex="-1">NutriMind</a>
                        </li>';
                    if (isset($_SESSION["online"]))
                        echo '<li class="nav-item ms-lg-2">
                            <a href="' . $base_safe . '/tools/terminar-sessao.php" class="btn btn-sessao">Sair da sessão</a>
                        </li>';
                    else
                        echo '<li class="nav-item ms-lg-2">
                            <a href="' . $base_safe . '/pagina-login.php" class="btn btn-sessao">Iniciar sessão</a>
                        </li>';
                ?>
            </ul>
        </div>
    </div>
</nav>
