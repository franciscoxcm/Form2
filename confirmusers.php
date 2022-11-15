<?php
require_once 'config.php';

$username = $_POST["username"];
$password = $_POST["password"];

// PROCURA SE O USER E PASS EXISTEM
$query = 'SELECT id FROM userlogin WHERE username = ? AND password = ?';
$sql = $pdo->prepare($query);

//  E RETORNA O id SE EXISTIR
if ($sql->execute([$username, $password])) {
    $user = $sql->fetch(PDO::FETCH_ASSOC);
} else {
    $user = [];
}

if (!empty($user)) {
    header("Location: https://localhost/hlink/dashboard.php");
    exit;
} else {
    // FAZ NOVA PESQUISA NA BD USERDADOS
    $query = 'SELECT id FROM userdados WHERE username = ? AND password = ?';
    $sql = $pdo->prepare($query);
    if ($sql->execute([$username, $password])) {
        $user = $sql->fetch(PDO::FETCH_ASSOC);
    } else {
        $user = [];
    }
    if (!empty($user)) {
        header("Location: https://localhost/hlink/pizzas_users.php");
        exit;
    } else {
        header("Location: https://localhost/hlink/index.php");
        exit;
    }
}
