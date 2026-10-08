<?php
include_once("conexao.php");

$sql = "SELECT * FROM clientes";
$resultado = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes Cadastrados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container large">
        <h2>Clientes Cadastrados</h2>
        
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Telefone</th>
                        <th>Cidade</th>
                        <th style="text-align: center;">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($resultado && $resultado->num_rows > 0): ?>
                        <?php while ($row = $resultado->fetch_assoc()): ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo htmlspecialchars($row['nome']); ?></td>
                                <td><?php echo htmlspecialchars($row['email']); ?></td>
                                <td><?php echo htmlspecialchars($row['telefone']); ?></td>
                                <td><?php echo htmlspecialchars($row['cidade']); ?></td>
                                <td style="text-align: center;">
                                    <a href="excluir_clientes.php?id=<?php echo $row['id']; ?>" 
                                       class="btn-danger"
                                       onclick="return confirm('Tem certeza que deseja excluir este cliente?');">
                                        Excluir
                                    </a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="6" style="text-align: center;">Nenhum cliente cadastrado.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <a href="index.php" class="btn-primary">Cadastrar Novo Cliente</a>
    </div>

</body>
</html>