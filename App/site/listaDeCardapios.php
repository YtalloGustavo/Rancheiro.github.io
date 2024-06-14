<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápios Cadastrados</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../sidebar-main/src/css/styles.css">
    <link rel="stylesheet" href="../sidebar-main/src/css/listaCardapio.css">
</head>

<body>
    <div class="side-bar">
        <?php include ('../sidebar-main/menuLateral.php'); ?>
        <script src="../sidebar-main/src/javascript/script.js"></script>
    </div>

    <div class="content">
        <?php
        include ('../sidebar-main/relatorios/listarCardapios.php');
        listaDados($conn); // Supondo que $conn seja sua conexão com o banco de dados
        ?>
    </div>
    <!-- Fim do Conteúdo da página -->

</body>
<script>
    function editarCardapio(id) {
        // Redireciona para a página de edição com o ID do cardápio
        window.location.href = 'editarCardapio.php?id=' + id;
    }

    function excluirCardapio(id) {
        if (confirm('Tem certeza que deseja excluir este cardápio?')) {
            // Redireciona para a página de exclusão com o ID do cardápio
            window.location.href = 'excluirCardapio.php?id=' + id;
        }
    }
</script>

</html>