<?php
require_once 'config.php';


if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $con = mysqli_connect("localhost", "root", "", "hlink");
    $sql = mysqli_query($con, "SELECT * FROM userdados WHERE email = '{$email}'");
    if (mysqli_num_rows($sql) > 0) {
        ?><script>alert("The email already exists")</script><?php
       // header("Location: https://localhost/hlink/new_user.php");
    } else {
        if (
            !empty($_POST['email']) &&
            !empty($_POST['username']) &&
            !empty($_POST['password']) &&
            !empty($_POST['morada']) &&
            !empty($_POST['telefone'])
        ) {
        
            $inserir = 'INSERT INTO userdados (email, username, password, morada, telefone) VALUES (?, ?, ?, ?, ?)';
            $sql = $pdo->prepare($inserir);
            if ($sql->execute([
                $_POST['email'],
                $_POST['username'],
                $_POST['password'],
                $_POST['morada'],
                $_POST['telefone'],
            ])) {
                header("Location: https://localhost/hlink/index.php");
            };
        }
    }
}