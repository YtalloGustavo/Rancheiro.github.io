<?php include '../sidebar-main/conexoes-banco/conexao.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Usuários</title>
    <link rel="stylesheet" href="caminho/para/seu/styles.css">
</head>
<body>

<?php

function listaDados($conn)
{
    $sqlListaUsuario = "SELECT * FROM usuario";
    $resultListaUsuario = $conn->query($sqlListaUsuario);

    if ($resultListaUsuario->num_rows > 0) {
        // Start table with styled classes
        echo "<div class='container-grande margem-topo-5 margem-baixo-5'>";
        echo "<table class='tabela-relatorio'>";
        echo "<thead><tr><th>Nome de Guerra</th><th>Posto / Graduação</th></tr></thead>";
        echo "<tbody>";

        // Output data rows
        while ($row = $resultListaUsuario->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row["nomeDeGuerra"]) . "</td>"; // Use htmlspecialchars to prevent XSS
            echo "<td>" . htmlspecialchars($row["postoGraduacao"]) . "</td>";
            echo "</tr>";
        }

        // Close table and container
        echo "</tbody>";
        echo "</table>";
        echo "</div>";
    } else {
        echo "<p>Nenhum resultado encontrado.</p>";
    }
}

// Exemplo de chamada da função
// listaDados($conn);

?>

</body>
</html>
