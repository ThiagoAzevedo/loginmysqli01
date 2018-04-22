<?php

function validarLogin($user, $pass, $conn) {
    $sql = "SELECT * FROM tblogins WHERE log_username = '{$user}'";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($query);
    if ($row) {
        $user = mysqli_fetch_assoc($query);
        if ($pass == $user['log_pass']) {
            return $user;
        } else {
            return null;
            //$_SESSION['danger'] = 'Usuário ou senha não existe!';
            //header('Location: index.php');
        }
    }
}
