<?php

function validarLogin($user, $pass, $conn) {
    $useresc = mysqli_real_escape_string($conn, $user);
    $sql = "SELECT * FROM tblogins WHERE log_username = '{$useresc}'";
    var_dump($sql);
    $query = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($query);
    if ($row) {
        $user = mysqli_fetch_assoc($query);
        if ($pass == $user['log_pass']) {
            return $user;
        }
    }
}
