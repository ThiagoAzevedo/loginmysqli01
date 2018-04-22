<?php

//Constantes de conexão ao banco de dados
const DB_HOST = "localhost";
const DB_USER = "root";
const DB_PASS = "";
const DB_BASE = "dblogin";

//Usando mysqli para realizar a conexão ao bando de dados
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_BASE) or die("Falha na conexão ao bando de dados" . mysqli_error());

