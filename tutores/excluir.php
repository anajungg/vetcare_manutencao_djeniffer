<?php
require_once __DIR__.'/../config/database.php';
require_once __DIR__.'/../config/auth.php';
exigirLogin();

$id = (int)($_GET['id'] ?? 0);

$verificar = $pdo->prepare("SELECT COUNT(*) FROM animais WHERE tutor_id=?");
$verificar->execute([$id]);

if ($verificar->fetchColumn() > 0) {
    header('Location: index.php?erro=vinculado');
    exit;
}

$s = $pdo->prepare("DELETE FROM tutores WHERE id=?");
$s->execute([$id]);

header('Location: index.php');
exit;
