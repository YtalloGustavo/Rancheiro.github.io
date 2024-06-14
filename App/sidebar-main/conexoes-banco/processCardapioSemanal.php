<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $segunda = $_POST['idCardapio_segunda'];
    $terca = $_POST['idCardapio_terca'];
    $quarta = $_POST['idCardapio_quarta'];
    $quinta = $_POST['idCardapio_quinta'];
    $sexta = $_POST['idCardapio_sexta'];
    $sabado = $_POST['idCardapio_sabado'];
    $domingo = $_POST['idCardapio_domingo'];
    

    if (is_null($segunda) || is_null($terca) || is_null($quarta) || is_null($quinta) || is_null($sexta) || is_null($sabado) || is_null($domingo)) {
        die('Todos os campos são obrigatórios.');
    }

    // Preparar a declaração SQL usando prepared statements para evitar injeção de SQL
    $stmt = $conn->prepare("INSERT INTO cardapiosemanal (segunda, terca, quarta, quinta, sexta, sabado, domingo) VALUES (?, ?, ?, ?, ?, ?,?)");
    $stmt->bind_param("sssssss", $segunda, $terca, $quarta, $quinta, $sexta, $sabado, $domingo);

    // Executar a consulta e verificar se foi bem-sucedida
    if ($stmt->execute()) {
        header("Location: http://localhost/orancheiro/app/site/vercardapio.php");
        exit();
    } else {
        echo "Erro ao inserir cardápio: " . $stmt->error;
    }

    // Fechar a declaração e a conexão
    $stmt->close();
    $conn->close();
}
