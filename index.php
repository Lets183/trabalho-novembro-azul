<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro - Campanha Novembro Azul</title>
</head>

<body>
    <h2>Cadastro de Consulta - Novembro Azul</h2>
    <form action="index3.php" method="POST">
        Nome: <input type="text" name="nome" required><br><br>
        CPF: <input type="text" name="cpf" required><br><br>
        Idade: <input type="number" name="idade" required><br><br>
        Data da Consulta: <input type="date" name="data_consulta" required><br><br>
        <input type="submit" value="Cadastrar">
    </form>

    <hr>
    <h3>Consultar Cadastro</h3>
    <form action="index4.php" method="GET">
        Informe o CPF: <input type="text" name="cpf" required>
        <input type="submit" value="Consultar">
    </form>
</body>

</html>
