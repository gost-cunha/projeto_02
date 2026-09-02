<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chamada</title>
</head>

<body>
    <h1>Chamada</h1>
    <p>Faça sua chamada abaixo, com suas respectativas informações.</p>
    <form action="gravar_chamada.php" method="POST">
        <label for="sala">Sala:</label><br>
        <input type="text" name="sala" required><br>

        <label for="nome">Nome:</label><br>
        <input type="text" name="nome" required><br>

        <label for="ra">R.A:</label><br>
        <input type="number" name="ra" required><br><br>

        <button type="submit">Fazer chamada</button>
    </form>
    <hr>
    <p>2026. DEVs Davhcruz, Augusto.C++, Matias, Gabriel Machado, Gost</p>
</body>

</html>
