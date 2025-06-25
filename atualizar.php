<?php
include 'conexao.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$jogo = $_POST['jogo'];
$idade = $_POST['idade'];

$sql = "UPDATE usuarios SET nome=?, jogo=?, idade=? WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssii", $nome, $jogo, $idade, $id);

if ($stmt->execute()) {
    echo "Usuário atualizado com sucesso!";
} else {
    echo "Erro: " . $stmt->error;
}

$conn->close();
?>