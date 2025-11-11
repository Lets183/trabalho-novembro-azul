<?php
include("index2.php");

$cpf = $_GET['cpf'];
$sql = "SELECT * FROM pacientes WHERE cpf = '$cpf'";
$resultado = $conexao->query($sql);

if ($resultado->num_rows > 0) {
    $dados = $resultado->fetch_assoc();
    echo "<h3>Dados do Paciente</h3>";
    echo "Nome: " . $dados['nome'] . "<br>";
    echo "Idade: " . $dados['idade'] . "<br>";
    echo "Data da Consulta: " . $dados['data_consulta'] . "<br><br>";
    echo "<a href='index5.php'>Ver dicas de prevenção</a>";
} else {
    echo "Nenhum cadastro encontrado para este CPF.";
}
$conexao->close();
?>
