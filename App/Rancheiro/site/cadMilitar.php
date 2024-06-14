<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../sidebar-main/src/css/styles.css">
    <link rel="stylesheet" href="../sidebar-main/src/css/formulario.css">
    <link rel="stylesheet" href="../sidebar-main/src/css/background.css">
    <title>Cadastro dos Militares</title>

    <style>
        .form-select {
            color: black;
            /* Define a cor das letras para preto */
        }
    </style>

</head>

<body>

    <!-- Inicio Sidebar -->
    <?php
    include('../sidebar-main/menuLateral.php');
    ?>
    <!-- Fim Sidebar -->

    <?php
    include '../sidebar-main/conexoes-banco/conexao.php';
    ?>

    <div class="box">
        <form action="../sidebar-main/conexoes-banco/processCadMilitar.php" method="POST">
            <fieldset>
                <legend><b>Cadastro dos Militares</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required placeholder="Nome Completo">
                    <label for="nome" class="label_input"></label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="nomeDeGuerra" id="nomeDeGuerra" class="inputUser" required placeholder="Nome de Guerra">
                    <label for="nomeDeGuerra" class="label_input"></label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="cpf" id="cpf" class="inputUser" required placeholder="CPF">
                    <label for="cpf" class="label_input"></label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="E-mail" name="email" id="email" class="inputUser" required placeholder="E-mail">
                    <label for="E-mail" class="label_input"></label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="Password" name="senha" id="senha" class="inputUser" required placeholder="Senha">
                    <label for="Senha" class="label_input"></label>
                </div>
                <br>
                <form id="phoneForm">
                    <div class="inputBox">
                        <input type="tel" name="phone" id="phone" class="inputUser" required placeholder="(XX) XXXXX-XXXX" 
                        title="O formato deve ser (XX) XXXXX-XXXX">
                    </div>
                    <br>
                    <div>
                        <select class="form-select" aria-label="Default select example" id="statusUsuario" name="statusUsuario">
                            <option selected>Status do Usuario</option>
                            <option value="1">Interno</option>
                            <option value="0">Externo</option>
                        </select>
                    </div>
                    <br>
                    <div>
                        <select class="form-select" aria-label="Default select example" id="arranchado" name="arranchado">
                            <option selected>Arranchado</option>
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select>
                    </div>
                    <br>
                    <div>
                        <select class="form-select" aria-label="Default select example" id="idcompanhia" name="idcompanhia">
                            <option selected>Companhia</option>
                            <?php
                            if ($resultCompanhia->num_rows > 0) {
                                // Itera sobre os resultados e cria as opções
                                while ($row = $resultCompanhia->fetch_assoc()) {
                                    echo '<option value="' . $row["id"] . '"> '. $row["nome"] .' </option>';
                                }
                            } else {
                                echo '<option value="">Nenhuma companhia encontrada</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <br>
                    <div>
                        <select class="form-select" aria-label="Default select example" id="postoGraduacao" name="postoGraduacao">
                            <option selected>Posto / Graduação</option>
                            <?php
                            if ($resultPostoGraduacao->num_rows > 0) {
                                // Itera sobre os resultados e cria as opções
                                while ($row = $resultPostoGraduacao->fetch_assoc()) {
                                    echo '<option value="' . $row["posto"] . '"> '. $row["posto"].' </option>';
                                }
                            } else {
                                echo '<option value="">Nenhum posto/graduação encontrado</option>';
                            }
                            ?>
                        </select>
                    </div>

                    <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>

    <script src="../sidebar-main/src/javascript/script.js"></script>
</body>

</html>