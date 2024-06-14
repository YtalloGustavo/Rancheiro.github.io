<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../sidebar-main/src/css/styles.css">
    <link rel="stylesheet" href="../sidebar-main/src/css/formulario.css">
    <title>Cadastro dos Militares</title>

</head>

<body>

    <!-- Inicio Sidebar -->
    <?php
    include ('../sidebar-main/menuLateral.php');
    ?>
    <!-- Fim Sidebar -->

    <div class="box">
        <form action="../sidebar-main/conexoes-banco/processRancho.php" method="POST">
            <fieldset>
                <legend><b>Cadastro da Escala</b></legend>
                <div>
                    <select class="form-select" aria-label="Default select example" id="statusUsuario"
                        name="statusUsuario">
                        <option selected>Nome de Guerra</option>
                        <option value="1">Hatake</option>
                        <option value="2">Gustavo</option>
                        <option value="2">Leite</option>
                    </select>
                </div>
                <br>
                <div>
                    <select class="form-select" aria-label="Default select example" id="statusUsuario"
                        name="statusUsuario">
                        <option selected>Dia da Semana</option>
                        <option value="1">Segunda</option>
                        <option value="2">Terça</option>
                        <option value="3">Quarta</option>
                        <option value="4">Quinta</option>
                        <option value="5">Sexta</option>
                        <option value="6">Sábado</option>
                        <option value="7">Domingo</option>
                    </select>
                </div>
                <br>
                <div>
                    <select class="form-select" aria-label="Default select example" id="statusUsuario"
                        name="statusUsuario">
                        <option selected>Turnos de Guarda</option>
                        <option value="1">22:00 - 00:00 - Primeiro turno</option>
                        <option value="2">00:00 - 02:00 - Segundo turno</option>
                        <option value="3">02:00 - 04:00 - Terceiro turno</option>
                        <option value="4">04:00 - 06:00 - Quarto turno</option>
                    </select>
                </div>
                <br>

                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>

    <script src="../sidebar-main/src/javascript/script.js"></script>
</body>

</html>