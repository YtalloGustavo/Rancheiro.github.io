<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomeDeGuerra = $_POST['nomeDeGuerra'];
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $postoGraduacao = $_POST['postoGraduacao'];
    $companhia = $_POST['companhia'];

    // Preparar a declaração SQL usando prepared statements para evitar injeção de SQL
    $stmt = $conn->prepare("INSERT INTO usuariorancho (nomeDeGuerra, nome, cpf, telefone, postoGraduacao, companhia) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $nomeDeGuerra, $nome, $cpf, $telefone, $postoGraduacao, $companhia);

    // Executar a consulta e verificar se foi bem-sucedida
    if ($stmt->execute()) {
        header("Location: http://localhost/orancheiro/app/site/formulario.php");
        exit();
    } else {
        echo "Erro ao inserir cardápio: " . $stmt->error;
    }

    // Fechar a declaração e a conexão
    $stmt->close();
    $conn->close();

}
    