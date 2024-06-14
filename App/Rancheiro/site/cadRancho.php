<!DOCTYPE html>
<html lang="en">

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
    <?php
        include('../sidebar-main/menuLateral.php');
    ?>
    <!-- Fim Sidebar -->


    <div class="box">
        <form action="../sidebar-main/conexoes-banco/processRancho.php" method="POST">
            <fieldset>
                <legend><b>Cadastro do Rancho</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nomeDeGuerra" id="nomeDeGuerra" class="inputUser" required placeholder="Nome de Guerra">
                    <label for="nomeDeGuerra" class="label_input"></label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required placeholder="Nome Completo">
                    <label for="nome" class="label_input"></label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cpf" id="cpf" class="inputUser" required placeholder="CPF">
                    <label for="cpf" class="label_input"></label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required placeholder="Telefone">
                    <label for="telefone" class="label_input"></label>
                </div>
                <br><br>
                <div>
                    <select class="form-select" aria-label="Default select example" id="postoGraduacao" name="postoGraduacao">
                        <option selected>Posto / Graduação</option>
                        <option value="1">Soldado</option>
                        <option value="2">Cabo</option>
                        <option value="3">Sargento</option>
                        <option value="4">Sub-Tenente</option>
                        <option value="5">Aspirante a Oficial</option>
                        <option value="6">Tenente</option>
                        <option value="7">Capitão</option>
                        <option value="8">Major</option>
                        <option value="9">Tenente-Coronel</option>
                        <option value="10">Coronel</option>
                        <option value="11">General</option>
                    </select>
                </div>
                <br><br>
                <div>
                    <select class="form-select" aria-label="Default select example" id="idCompanhia" name="companhia">
                        <option selected>Companhia</option>
                        <option value="1">1a Companhia</option>
                        <option value="2">2a Companhia</option>
                        <option value="3">3a Companhia</option>
                        <option value="4">4a Companhia</option>
                        <option value="5">5a Companhia</option>
                        <option value="6">6a Companhia</option>
                    </select>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
    
    <script src="../sidebar-main/src/javascript/script.js"></script>
</body>

</html>