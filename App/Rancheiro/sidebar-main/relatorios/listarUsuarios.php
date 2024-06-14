<?php include 'conexao.php';
function listaDados($conn)
{
    $sql = "SELECT * FROM usuario";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Inicia a tabela
        echo "<table border='1'>";
        echo "<tr><th>Nome de Guerra</th><th>Posto / Graduação</th></tr>";

        // Saída de dados de cada linha
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["nomeDeGuerra"] . "</td>";
            echo "<td>" . $row["postoGraduacao"] . "</td>";
            echo "</tr>";
        }

        // Fecha a tabela
        echo "</table>";
    } else {
        echo "0 resultados";
    }
}

