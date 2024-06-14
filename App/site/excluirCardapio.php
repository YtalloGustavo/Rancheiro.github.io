<?php
include '../sidebar-main/conexoes-banco/conexao.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Excluir registros dependentes na cardapiosemanal
    $sqlDeleteDependentes = "DELETE FROM cardapiosemanal WHERE segunda = $id OR terca = $id OR quarta = $id OR quinta = $id OR sexta = $id OR sabado = $id OR domingo = $id";
    
    if ($conn->query($sqlDeleteDependentes) === TRUE) {
        // Excluir o cardapio
        $sqlCardapio = "DELETE FROM cardapio WHERE id = $id";

        if ($conn->query($sqlCardapio) === TRUE) {
            echo "Cardápio excluído com sucesso.";
            header("Location: http://localhost/orancheiro/app/site/listaDeCardapios.php");
            exit();
        } else {
            echo "Erro ao excluir o cardápio: " . $conn->error;
        }
    } else {
        echo "Erro ao excluir os registros dependentes: " . $conn->error;
    }
}

