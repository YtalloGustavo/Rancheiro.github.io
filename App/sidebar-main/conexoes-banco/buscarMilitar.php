<?php

include 'conexao.php';

if (isset($_GET['query'])) {
    $query = $_GET['query'];
    $sql = "SELECT * FROM usuario WHERE nomeDeGuerra LIKE ?";
    $stmt = $conn->prepare($sql);
    $param = "%$query%";
    $stmt->bind_param("s", $param);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div onclick=\"selectMilitar('" . htmlspecialchars($row['nomeDeGuerra'], ENT_QUOTES, 'UTF-8') . "')\">"
                . htmlspecialchars($row['nomeDeGuerra'], ENT_QUOTES, 'UTF-8') . " | "
                . htmlspecialchars($row['postoGraduacao'], ENT_QUOTES, 'UTF-8') . "</div>";
        }
    } else {
        echo "<div>Nenhum resultado encontrado</div>";
    }

    $stmt->close();
    $conn->close();
}
