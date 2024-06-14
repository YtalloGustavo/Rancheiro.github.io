<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    include('../sidebar-main/menuLateral.php');
    ?>
    <!-- Fim Sidebar -->

    <?php
    include '../sidebar-main/conexoes-banco/conexao.php';

    $cardapios = [];
    if ($resultCardapio->num_rows > 0) {
        while ($row = $resultCardapio->fetch_assoc()) {
            $cardapios[] = $row;
        }
    } else {
        $cardapios[] = null;
    }

    ?>


    <div class="box">
        <form action="../sidebar-main/conexoes-banco/processCardapioSemanal.php" method="post">
            <fieldset>
                <legend><b>Selecionar Cardapios</b></legend>

                <?php
                $dias = [
                    'Segunda-feira' => 'segunda',
                    'Terça-feira' => 'terca',
                    'Quarta-feira' => 'quarta',
                    'Quinta-feira' => 'quinta',
                    'Sexta-feira' => 'sexta',
                    'Sábado' => 'sabado',
                    'Domingo' => 'domingo'
                ];

                foreach ($dias as $dia => $name) {
                    echo '<div class="inputBox">';
                    echo '<label class="label_input1">' . $dia . '</label>';
                    echo '<select class="form-select" aria-label="Default select example id="idCardapio_' .$name. '" name="idCardapio_' .$name. '"">';
                    echo '<option selected>' . $dia . '</option>';

                    if ($cardapios[0] !== null) {
                        foreach ($cardapios as $cardapio) {
                            echo '<option value="' . $cardapio["id"] . '"> ' . $cardapio["nomeCardapio"] . ' </option>';
                        }
                    } else {
                        echo '<option value="">Nenhum cardapio encontrado</option>';
                    }

                    echo '</select>';
                    echo '</div>';
                }
                ?>

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