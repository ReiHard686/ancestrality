<?php
    // Guard: head.php always sets $base, but define it here too if footer is ever included standalone
    if (!isset($base)) {
        $_fs_root  = str_replace('\\', '/', realpath(__DIR__ . '/../../'));
        $_doc_root = rtrim(str_replace('\\', '/', realpath($_SERVER['DOCUMENT_ROOT'])), '/');
        $base = rtrim(str_replace($_doc_root, '', $_fs_root), '/');
        unset($_fs_root, $_doc_root);
    }
    $base_safe = htmlspecialchars($base, ENT_QUOTES, 'UTF-8');
?>
<footer class="d-flex justify-content-between align-items-center py-4 my-4 position-relative footer-ancestral">
    <p class="mb-0">© 2026 Ancestrality, Inc</p>
    <a href="<?= $base_safe ?>/index.php" class="position-absolute start-50 translate-middle-x d-flex align-items-center link-body-emphasis text-decoration-none">
        <img src="<?= $base_safe ?>/tools/images/android-chrome-192x192.png" width="40" height="40" alt="Logo Ancestrality">
    </a>
    <p class="mb-0">© Otávio Fernandes, EPED</p>
</footer>
