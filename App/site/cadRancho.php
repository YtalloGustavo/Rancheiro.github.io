<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../sidebar-main/src/css/styles.css">
    <link rel="stylesheet" href="../sidebar-main/src/css/formulario.css">
    <link rel="stylesheet" href="../sidebar-main/src/css/background.css">
    <title>Cadastro do Rancho</title>
</head>

<body>

    <!-- Inicio Sidebar -->
    <div class="side-bar">
        <?php include('../sidebar-main/menuLateral.php'); ?>
        <script src="../sidebar-main/src/javascript/script.js"></script>
    </div>
    <!-- Fim Sidebar -->

    <?php
    include('../sidebar-main/conexoes-banco/conexao.php');
    ?>

    <div class="box">
        <form action="../sidebar-main/conexoes-banco/processRancho.php" method="POST">
            <fieldset>
                <legend><b>Cadastro do Rancho</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" id="nomeDeGuerra" name="pesquisar" oninput="searchMilitar()" placeholder="Buscar militar...">
                    <div id="result" class="autocomplete-items"></div>
                </div>
                <br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>


    <script>
        function searchMilitar() {
            var input = document.getElementById('nomeDeGuerra').value;

            if (input.length === 0) {
                document.getElementById('result').innerHTML = '';
                return;
            }

            var xhr = new XMLHttpRequest();
            xhr.open('GET', '../sidebar-main/conexoes-banco/buscarMilitar.php?query=' + encodeURIComponent(input), true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById('result').innerHTML = xhr.responseText;
                }
            };
            xhr.send();
        }
    </script>

</body>

</html>