<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomeCardapio = $_POST['cardapio'];
    $cafeDaManha = $_POST['cafe'];
    $almoco = $_POST['almoco'];
    $jantar = $_POST['janta'];
    $ceia = $_POST['ceia'];

    // Preparar a declaração SQL usando prepared statements para evitar injeção de SQL
    $stmt = $conn->prepare("INSERT INTO cardapio (nomeCardapio, cafeDaManha, almoco, jantar, ceia) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $nomeCardapio, $cafeDaManha, $almoco, $jantar, $ceia);

    // Executar a consulta e verificar se foi bem-sucedida
    if ($stmt->execute()) {
        header("Location: http://localhost/orancheiro/app/site/inserircardapio.php");
        exit();
    } else {
        echo "Erro ao inserir cardápio: " . $stmt->error;
    }

    // Fechar a declaração e a conexão
    $stmt->close();
    $conn->close();
}
