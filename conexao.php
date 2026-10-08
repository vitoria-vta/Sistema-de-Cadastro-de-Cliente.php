<?php
$host = "127.0.0.1";
$user = "root";
$pass = "";
$db   = "loja";
$port = 3308; 

$conn = mysqli_init();
$conn->options(MYSQLI_OPT_CONNECT_TIMEOUT, 3); 
if (!@$conn->real_connect($host, $user, $pass, $db, $port)) {
    die("Erro ao conectar ao MySQL (Porta $port): " . mysqli_connect_error());
}
?>