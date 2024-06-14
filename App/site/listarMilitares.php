<?php

include('../sidebar-main/conexoes-banco/conexao.php');

// Verifica se o ID da companhia foi passado corretamente
if (isset($_GET['id'])) {
    $idCompanhia = $_GET['id'];

    // Consulta SQL para buscar os militares da companhia selecionada
    $sqlMilitares = "SELECT id, nome FROM usuario WHERE idCompanhia = $idCompanhia";
    $resultMilitares = $conn->query($sqlMilitares);

    // Prepara o array de militares para resposta AJAX
    $militares = [];
    if ($resultMilitares->num_rows > 0) {
        while ($row = $resultMilitares->fetch_assoc()) {
            $militar = [
                'id' => $row['id'],
                'nome' => $row['nome']
            ];
            $militares[] = $militar;
        }
    }

    // Retorna os militares como JSON
    header('Content-Type: application/json');
    echo json_encode($militares);
} else {
    echo json_encode([]); // Retorna um array vazio se o ID da companhia não for fornecido
}
