<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $nomeDeGuerra = $_POST['nomeDeGuerra'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);
    $telefone = $_POST['phone'];
    $statusUsuario = $_POST['statusUsuario'];
    $arranchado = $_POST['arranchado'];
    $postoGraduacao = $_POST['postoGraduacao'];
    $idcompanhia = $_POST['idcompanhia'];

    // Preparar a declaração SQL usando prepared statements para evitar injeção de SQL
    $stmt = $conn->prepare("INSERT INTO usuario (nome, nomeDeGuerra, cpf, email, senha, telefone, statusUsuario, arranchado, postoGraduacao, idcompanhia) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssss", $nome, $nomeDeGuerra, $cpf, $email, $senha, $telefone, $statusUsuario, $arranchado, $postoGraduacao, $idcompanhia);

    // Executar a consulta e verificar se foi bem-sucedida
    if ($stmt->execute()) {
        header("Location: http://localhost/orancheiro/app/site/cadMilitar.php");
        exit();
    } else {
        echo "Erro ao inserir cardápio: " . $stmt->error;
    }

    // Fechar a declaração e a conexão
    $stmt->close();
    $conn->close();

}