<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomeDeGuerra = $_POST['pesquisar'];

    // Verifique se os campos estão recebendo os valores corretos
    if (!empty($nomeDeGuerra)) {
        // Preparar a declaração SQL usando prepared statements para evitar injeção de SQL
        $stmt = $conn->prepare("UPDATE usuario SET arranchado = 1 WHERE nomeDeGuerra = ?");
        $stmt->bind_param("s", $nomeDeGuerra);

        // Executar a consulta e verificar se foi bem-sucedida
        if ($stmt->execute()) {
            header("Location: http://localhost/orancheiro/app/site/cadRancho.php");
            exit();
        } else {
            echo "Erro ao arranchar militar: " . $stmt->error;
        }

        // Fechar a declaração e a conexão
        $stmt->close();
    } else {
        echo "Os campos são obrigatórios!";
    }

    $conn->close();
}
