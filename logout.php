<?php

session_destroy();
session_start();
$_SESSION['success'] = 'Deslogado com sucesso';
header('Location: index.php');
die();
