<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../sidebar-main/src/css/styles.css">
    <link rel="stylesheet" href="../sidebar-main/src/css/inserircardapio.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Cadastro de Cardapio</title>
</head>
<body>

    <!-- Inicio Sidebar -->
    <?php include('../sidebar-main/menuLateral.php'); ?>
    <!-- Fim Sidebar -->

    <div class="box">
        <form action="../sidebar-main/conexoes-banco/processCardapio.php" method="POST">
            <fieldset>
                <legend><b>Inserir Cardapio</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="cardapio" id="cardapio" class="inputUser" required placeholder="Digite o nome do cardapio">
                    <label for="cardapio" class="label_input"></label>
                </div>
                
                <div class="inputBox">
                    <input type="text" name="cafe" id="cafe" class="inputUser" required placeholder="cafe da manhã">
                    <label for="cafe" class="label_input"></label>
                </div>

                <div class="inputBox">
                    <input type="text" name="almoco" id="almoco" class="inputUser" required placeholder="almoco">
                    <label for="almoco" class="label_input"></label>
                </div>

                <div class="inputBox">
                    <input type="text" name="janta" id="janta" class="inputUser" required placeholder="Jantar">
                    <label for="janta" class="label_input"></label>
                </div>

                <div class="inputBox">
                    <input type="text" name="ceia" id="ceia" class="inputUser" required placeholder="Ceia">
                    <label for="ceia" class="label_input"></label>
                </div>

                <input type="submit" name="submit" id="submit">
                <br>
            </fieldset>
        </form>
    </div>

    <script src="../sidebar-main/src/javascript/script.js"></script>
</body>
</html>
