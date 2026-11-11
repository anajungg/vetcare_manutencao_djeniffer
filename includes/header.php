<?php
if (session_status() === PHP_SESSION_NONE) session_start();
$titulo = $titulo ?? 'VetCare';
?>
<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= htmlspecialchars($titulo) ?> | VetCare</title>
<link rel="stylesheet" href="/vetcare_manutencao_djeniffer/assets/style.css">
</head>
<body>
<header class="topbar">
  <a class="brand" href="/vetcare_manutencao_djeniffer/index.php">🐾 VetCare</a>
  <nav>
    <?php if (!empty($_SESSION['usuario_id'])): ?>
      <a href= "../index.php">Painel</a>
      <a href="tutores/index.php">Tutores</a>
      <a href="../animais/index.php">Animais</a>
      <a href="consultas/index.php">Consultas</a>
      <a href="../chamados/index.php">Suporte</a>
      <a href="../logout.php">Sair</a>
    <?php endif; ?>
  </nav>
</header>
<main class="container">
