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

// Consulta SQL para buscar postos/graduações
$sqlPostoGraduacao = "SELECT posto FROM postoGraduacao";
$resultPostoGraduacao = $conn->query($sqlPostoGraduacao);

// Verifica conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
