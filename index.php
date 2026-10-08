<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Cliente</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <h2>Cadastrar Cliente</h2>

        <form action="salvar_clientes.php" method="POST">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required placeholder="Digite o nome completo">
            </div>

            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required placeholder="exemplo@email.com">
            </div>

            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" id="telefone" name="telefone" required placeholder="(XX) XXXXX-XXXX">
            </div>

            <div class="form-group">
                <label for="cidade">Cidade:</label>
                <input type="text" id="cidade" name="cidade" required placeholder="Digite a cidade">
            </div>

            <button type="submit" class="btn-submit">Cadastrar Cliente</button>
        </form>

        <a href="listar_clientes.php" class="btn-navigation">Ver Clientes Cadastrados</a>
    </div>

</body>
</html>