<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: index.php');
    die();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Logon feito com sucesso</h2>
        <p>Bem Vindo <?= ucfirst($_SESSION['user']); ?> </p>

        <p>Fazer <a href="logout.php"> logout </a> </p>
    </body>
</html>
