<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../sidebar-main/src/css/accordion.css">
    <link rel="stylesheet" href="../sidebar-main/src/css/styles.css">
    <link rel="stylesheet" href="../sidebar-main/src/css/background.css">
    <link rel="stylesheet" href="../sidebar-main/src/css/footer.css">
    <title>Accordion</title>
</head>

<body>
    <!-- Inicio Sidebar -->
    <?php include ('../sidebar-main/menuLateral.php'); ?>
    <!-- Fim Sidebar -->

    <div class="background-container">
        <img src="..\sidebar-main\src\images\fundodetela1.jpeg" alt="Fundo" class="background-image">
    </div>


    <div id="container">
        <div class="accordion">
            <button class="accordion-header">
                <span>Segunda-feira</span>
                <i class="fa-solid fa-chevron-down arrow"></i>
            </button>
            <div class="accordion-body">
                <b>CAFÉ DA MANHÃ</b>
                <br>
                <b>PÃO | MANTEIGA | PAPA | CAFÉ</b>
                <br>
                <br>
                <b>ALMOÇO</b>
                <br>
                <b>ARROZ | FEIJÃO | MACARRÃO | FRICASSE DE FRANGO | PUDIM DE CHOCOLATE | SALADA | SUCO</b>
                <br><br>
                <b>JANTA</b>
                <br>
                <b>ARROZ | FEIJÃO | MACARRÃO | FRICASSE DE FRANGO | PUDIM DE CHOCOLATE | SALADA | SUCO</b>
                <br><br>
                <b>CEIA</b>
                <br>
                <b>CUSCUZ | CAFÉ</b>
                
            </div>
        </div>

        <div class="accordion">
            <button class="accordion-header">
                <span>Terça-feira</span>
                <i class="fa-solid fa-chevron-down arrow"></i>
            </button>
            <div class="accordion-body">
                <p>Conteúdo da terça-feira.</p>
            </div>
        </div>

        <div class="accordion">
            <button class="accordion-header">
                <span>Quarta-feira</span>
                <i class="fa-solid fa-chevron-down arrow"></i>
            </button>
            <div class="accordion-body">
                <p>Conteúdo da quarta-feira.</p>
            </div>
        </div>

        <div class="accordion">
            <button class="accordion-header">
                <span>Quinta-feira</span>
                <i class="fa-solid fa-chevron-down arrow"></i>
            </button>
            <div class="accordion-body">
                <p>Conteúdo da quinta-feira.</p>
            </div>
        </div>

        <div class="accordion">
            <button class="accordion-header">
                <span>Sexta-feira</span>
                <i class="fa-solid fa-chevron-down arrow"></i>
            </button>
            <div class="accordion-body">
                <p>Conteúdo da sexta-feira.</p>
            </div>
        </div>

        <div class="accordion">
            <button class="accordion-header">
                <span>Sábado</span>
                <i class="fa-solid fa-chevron-down arrow"></i>
            </button>
            <div class="accordion-body">
                <p>Conteúdo do sábado.</p>
            </div>
        </div>

        <div class="accordion">
            <button class="accordion-header">
                <span>Domingo</span>
                <i class="fa-solid fa-chevron-down arrow"></i>
            </button>
            <div class="accordion-body">
                <p>Conteúdo do domingo.</p>
            </div>
        </div>
    </div>

    <footer class="footer">
        <p>© 2024 Rancheiro. Todos os direitos reservados.</p>
    </footer>

    <script src="../sidebar-main/src/javascript/accordion.js"></script>
    <script src="../sidebar-main/src/javascript/script.js"></script>
</body>

</html>