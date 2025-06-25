<?php
include 'conexao.php';

$sql = "SELECT * FROM usuarios ORDER BY id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Nome</th><th>Jogo</th><th>Idade</th><th>Ações</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['nome']}</td>
                <td>{$row['jogo']}</td>
                <td>{$row['idade']}</td>
                <td>
                    <button onclick=\"editarUsuario({$row['id']}, '{$row['nome']}', '{$row['jogo']}', {$row['idade']})\">Editar</button>
                    <button onclick=\"excluirUsuario({$row['id']})\">Excluir</button>
                </td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Nenhum dado encontrado.";
}

$conn->close();
?>