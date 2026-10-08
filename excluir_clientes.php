<?php
include_once("conexao.php");

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = intval($_GET['id']);

    $sql = "DELETE FROM clientes WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        $conn->close(); 
        header("Location: listar_clientes.php");
        exit(); 
    } else {
        echo "Erro ao excluir: " . $conn->error;
    }
} else {
    header("Location: listar_clientes.php");
    exit();
}
?>
