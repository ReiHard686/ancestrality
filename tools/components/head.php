<?php if (session_status() === PHP_SESSION_NONE) session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR"<?= isset($theme) ? ' data-bs-theme="' . htmlspecialchars($theme) . '"' : '' ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <?php
        // Compute project root URL from __DIR__ (filesystem, not request — safe on any host depth)
        $_fs_root  = str_replace('\\', '/', realpath(__DIR__ . '/../../'));
        $_doc_root = rtrim(str_replace('\\', '/', realpath($_SERVER['DOCUMENT_ROOT'])), '/');
        $base = rtrim(str_replace($_doc_root, '', $_fs_root), '/');
        unset($_fs_root, $_doc_root);
    ?>
    <link rel="icon" type="image/x-icon"             href="<?= $base ?>/favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32"  href="<?= $base ?>/tools/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16"  href="<?= $base ?>/tools/images/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?= $base ?>/tools/images/android-chrome-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180"     href="<?= $base ?>/tools/images/apple-touch-icon.png">
    <link rel="manifest" href="<?= $base ?>/tools/images/site.webmanifest">
    <meta name="theme-color" content="#0D0D0B">

    <title>Ancestrality — Saúde funcional ancestral</title>
    <meta name="description" content="Ancestrality: viva uma vida natural e funcional baseada em hábitos ancestrais — super alimentos, pratos perdidos, hábitos milenares e IA nutricional.">
    <!--CDN CSS Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!--CDN Bootstrap Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= $base ?>/css/global.css">
    <link rel="stylesheet" href="<?= $base ?>/css/layout.css">
    <?php if (!empty($cssshared)): foreach ((array)$cssshared as $s): ?>
        <link rel="stylesheet" href="<?= $base ?>/css/shared/<?= htmlspecialchars($s) ?>.css">
    <?php endforeach; endif; ?>
    <?php if (isset($csspage)): ?>
        <link rel="stylesheet" href="<?= $base ?>/css/per-page/<?= $csspage ?>.css">
    <?php endif; ?>
</head>
