<?php
include_once 'conexao.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nome     = $_POST['nome'];
  $email    = $_POST['email'];
  $telefone = $_POST['telefone'];
  $cidade   = $_POST['cidade'];

 $sql = "INSERT INTO clientes (nome, email, telefone, cidade) VALUES ('$nome', '$email', '$telefone', '$cidade')";

  if ($conn->query($sql) === TRUE) {
    header("Location: listar_clientes.php");
    exit();
  } else {
    echo "Erro ao cadastrar: " . $conn->error;
 }
}
$conn->close();
?>