<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../sidebar-main/src/css/styles.css">
    <link rel="stylesheet" href="../sidebar-main/src/css/usuarios.css">
    <title>Militares Cadastrados</title>
</head>

<div class="side-bar">
    <?php include ('../sidebar-main/menuLateral.php'); ?>
    <script src="../sidebar-main/src/javascript/script.js"></script>
</div>

<body class="corpo">

    <div class="relatorio-conteudo">
        <h1>Militares Cadastrados</h1>
        <?php
        include ('../sidebar-main/relatorios/listarUsuarios.php');
        listaDados($conn);
        ?>

    </div>
    <!-- Fim do Conteudo da pagina -->
</body>

</html>