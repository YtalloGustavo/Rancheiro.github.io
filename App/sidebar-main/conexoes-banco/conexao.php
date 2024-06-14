<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "orancheiro";

// Cria conexão
$conn = new mysqli($servername, $username, $password, $database);

// Consulta SQL para buscar companhia
$sqlCompanhia = "SELECT id, nome FROM companhia";
$resultCompanhia = $conn->query($sqlCompanhia);

$sqlMilitarCadastrado = "SELECT id, idCompanhia, nomeDeGuerra FROM usuario";
$resultMilitarCadastrado = $conn->query($sqlMilitarCadastrado);

// Consulta SQL para buscar postos/graduações
$sqlPostoGraduacao = "SELECT posto FROM postoGraduacao";
$resultPostoGraduacao = $conn->query($sqlPostoGraduacao);

$sqlCardapio = "SELECT id, nomeCardapio FROM cardapio";
$resultCardapio = $conn->query($sqlCardapio);

// Consulta SQL para buscar os cardapios semanal
$sqlCardapioSemanal = "SELECT id, segunda, terca, quarta, quinta, sexta, sabado, domingo FROM cardapiosemanal";
$resultCardapioSemanal = $conn->query($sqlCardapioSemanal);

// Verifica conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
