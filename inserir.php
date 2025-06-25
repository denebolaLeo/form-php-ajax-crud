<?php
include 'conexao.php';

$nome = $_POST['nome'];
$jogo = $_POST['jogo'];
$idade = $_POST['idade'];

$sql = "INSERT INTO usuarios (nome, jogo, idade) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssi", $nome, $jogo, $idade);

if ($stmt->execute()) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Erro: " . $stmt->error;
}

$conn->close();
?>