<?php

session_start();
require_once 'connection.php';
require_once 'banco-login.php';

$user = $_POST['lg_username'];
$pass = md5($_POST['lg_password']);

if ((isset($user)) && (isset($pass))) {

    $login = validarLogin($user, $pass, $conn);

    if ($login) {
        $_SESSION['user'] = $login['log_username'];
        header('Location: logado.php');
    } else {
        $_SESSION['danger'] = 'Usuário ou senha não localizado.';
        header('Location: index.php');
    }
}

