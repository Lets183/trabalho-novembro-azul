<?php
include("index2.php");

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$idade = $_POST['idade'];
$data_consulta = $_POST['data_consulta'];

$sql = "INSERT INTO pacientes (nome, cpf, idade, data_consulta) VALUES ('$nome', '$cpf', '$idade', '$data_consulta')";

if ($conexao->query($sql) === TRUE) {
    echo "<h3>Cadastro realizado com sucesso!</h3>";
    echo "<a href='index.php'>Voltar</a>";
} else {
    echo "Erro ao cadastrar: " . $conexao->error;
}
$conexao->close();
