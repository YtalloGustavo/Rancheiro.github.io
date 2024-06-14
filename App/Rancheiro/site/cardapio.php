<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../sidebar-main/src/css/styles.css">
    <link rel="stylesheet" href="../sidebar-main/src/css/cardapio.css">
    <link rel="stylesheet" href="../sidebar-main/src/css/footer.css">
    <title>Cadastra Cardapio</title>
    <style>

    </style>
</head>

<body>
    <!-- Inicio Sidebar -->
    <?php
    include ('../sidebar-main/menuLateral.php');
    ?>
    <!-- Fim Sidebar -->

    <div class="box">
        <form action="" method="post">
            <fieldset>
                <legend><b>Selecionar Cardapios</b></legend>
                <div class="inputBox">
                    <label class="label_input1">Segunda-feira</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Segunda-Feira</option>
                        <option value="1">Cardapio 1</option>
                        <option value="2">Cardapio 2</option>
                        <option value="3">Cardapio 3</option>
                        <option value="4">Cardapio-General</option>
                        <option value="5">Cardapio S.S</option>
                        <option value="6">Cardapio-Visita</option>
                        <option value="7">Cardapio-Oficial</option>
                        <option value="8">Cardapio-Praça</option>
                    </select>
                </div>

                <!-- Terça-feira -->
                <div class="inputBox">
                    <label class="label_input1">Terça-feira</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Terça-feira</option>
                        <option value="1">Cardapio 1</option>
                        <option value="2">Cardapio 2</option>
                        <option value="3">Cardapio 3</option>
                        <option value="4">Cardapio-General</option>
                        <option value="5">Cardapio S.S</option>
                        <option value="6">Cardapio-Visita</option>
                        <option value="7">Cardapio-Oficial</option>
                        <option value="8">Cardapio-Praça</option>
                    </select>
                </div>

                <!-- Quarta-feira -->
                <div class="inputBox">
                    <label class="label_input1">Quarta-feira</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Quarta-feira</option>
                        <option value="1">Cardapio 1</option>
                        <option value="2">Cardapio 2</option>
                        <option value="3">Cardapio 3</option>
                        <option value="4">Cardapio-General</option>
                        <option value="5">Cardapio S.S</option>
                        <option value="6">Cardapio-Visita</option>
                        <option value="7">Cardapio-Oficial</option>
                        <option value="8">Cardapio-Praça</option>
                    </select>
                </div>

                <!-- Quinta-feira -->
                <div class="inputBox">
                    <label class="label_input1">Quinta-feira</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Quinta-feira</option>
                        <option value="1">Cardapio 1</option>
                        <option value="2">Cardapio 2</option>
                        <option value="3">Cardapio 3</option>
                        <option value="4">Cardapio-General</option>
                        <option value="5">Cardapio S.S</option>
                        <option value="6">Cardapio-Visita</option>
                        <option value="7">Cardapio-Oficial</option>
                        <option value="8">Cardapio-Praça</option>
                    </select>
                </div>

                <!-- Sexta-feira -->
                <div class="inputBox">
                    <label class="label_input1">Sexta-feira</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Sexta-feira</option>
                        <option value="1">Cardapio 1</option>
                        <option value="2">Cardapio 2</option>
                        <option value="3">Cardapio 3</option>
                        <option value="4">Cardapio-General</option>
                        <option value="5">Cardapio S.S</option>
                        <option value="6">Cardapio-Visita</option>
                        <option value="7">Cardapio-Oficial</option>
                        <option value="8">Cardapio-Praça</option>
                    </select>
                </div>

                <!-- Sábado -->
                <div class="inputBox">
                    <label class="label_input1">Sábado</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Sábado</option>
                        <option value="1">Cardapio 1</option>
                        <option value="2">Cardapio 2</option>
                        <option value="3">Cardapio 3</option>
                        <option value="4">Cardapio-General</option>
                        <option value="5">Cardapio S.S</option>
                        <option value="6">Cardapio-Visita</option>
                        <option value="7">Cardapio-Oficial</option>
                        <option value="8">Cardapio-Praça</option>
                    </select>
                </div>

                <!-- Domingo -->
                <div class="inputBox">
                    <label class="label_input1">Domingo</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Domingo</option>
                        <option value="1">Cardapio 1</option>
                        <option value="2">Cardapio 2</option>
                        <option value="3">Cardapio 3</option>
                        <option value="4">Cardapio-General</option>
                        <option value="5">Cardapio S.S</option>
                        <option value="6">Cardapio-Visita</option>
                        <option value="7">Cardapio-Oficial</option>
                        <option value="8">Cardapio-Praça</option>
                    </select>
                </div>

                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>

    <footer class="footer">
        <p>© 2024 Rancheiro. Todos os direitos reservados.</p>
    </footer>

    <script src="../sidebar-main/src/javascript/script.js"></script>


</body>

</html>