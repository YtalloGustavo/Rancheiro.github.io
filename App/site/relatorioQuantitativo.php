<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js" integrity="sha512-BNaRQnYJYiPSqHHDb58B0yaPfCu+Wgds8Gp/gU33kqBtgNS4tSPHuGibyoeqMV/TJlSKda6FXzoEyYGjTe+vXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="../sidebar-main/src/css/site1.css">
    <link rel="stylesheet" href="../sidebar-main/src/css/styles.css">


    <title>Relatório Diário</title>
</head>

<body>
    
    <div class="side-bar">
        <?php include('../sidebar-main/menuLateral.php'); ?>
        <script src="../sidebar-main/src/javascript/script.js"></script>
    </div>

    <div class="botoes">
        <button id="generate-pdf2" class="botao">Baixar relatorio</button>
    </div>


    <div>

        <div id="relatorio-container" class="container-grande margem-topo-5">

            <div id="content" class="relatorio-conteudo">


                <h1>RELATÓRIO DIÁRIO QUANTITATIVO</h1>
                <?php

                include '../sidebar-main/conexoes-banco/conexao.php';

                function exibirRelatorioPorCompanhia($conn, $idCompanhia, $nomeCompanhia)
                {
                    echo "<div class='container-grande borda borda-inferior'>
            <h1 class='text-center'>$nomeCompanhia</h1>
          </div>";

                    // Inicializa os contadores
                    $totalSoldadoCabo = 0;
                    $totalSargentoSub = 0;
                    $totalOficiais = 0;
                    $totalMilitares = 0;

                    // Consulta para Soldados e Cabos
                    $sqlSoldadoCabo = "SELECT COUNT(*) as total FROM usuario WHERE postoGraduacao IN ('Soldado', 'Cabo') AND idCompanhia = $idCompanhia AND arranchado = 1";
                    $resultSoldadoCabo = $conn->query($sqlSoldadoCabo);
                    if ($row = $resultSoldadoCabo->fetch_assoc()) {
                        $totalSoldadoCabo = $row['total'];
                    }

                    // Consulta para Sargentos e Sub-Tenentes
                    $sqlSargento = "SELECT COUNT(*) as total FROM usuario WHERE postoGraduacao IN ('Sargento', 'Sub-tenente') AND idCompanhia = $idCompanhia AND arranchado = 1";
                    $resultSargento = $conn->query($sqlSargento);
                    if ($row = $resultSargento->fetch_assoc()) {
                        $totalSargentoSub = $row['total'];
                    }

                    // Consulta para Oficiais
                    $sqlOficiais = "SELECT COUNT(*) as total FROM usuario WHERE postoGraduacao IN ('Aspirante a Oficial', 'Tenente', 
                    'Capitão', 'Major', 'Tenente-Coronel', 'Coronel', 'General') AND idCompanhia = $idCompanhia AND arranchado = 1";
                    $resultOficiais = $conn->query($sqlOficiais);
                    if ($row = $resultOficiais->fetch_assoc()) {
                        $totalOficiais = $row['total'];
                    }
                    $totalMilitares = $totalSoldadoCabo + $totalSargentoSub + $totalOficiais;

                    // Exibe os resultados
                    echo "<h2 class='margem-topo-5'>Soldados e Cabos</h2>";
                    echo "<p>$totalSoldadoCabo</p>";

                    echo "<h2 class='margem-topo-5'>Sargentos / Sub-Tenentes</h2>";
                    echo "<p>$totalSargentoSub</p>";

                    echo "<h2 class='margem-topo-5'>Oficiais</h2>";
                    echo "<p>$totalOficiais</p>";

                    echo "<br>";
                    echo "<h2> Total de militares</h2>";
                    echo "<p>$totalMilitares</p>";

                    echo "</br>";
                    echo "</br>";
                }

                $sqlCompanhias = "SELECT * FROM companhia";
                $resultCompanhias = $conn->query($sqlCompanhias);

                if ($resultCompanhias->num_rows > 0) {
                    while ($row = $resultCompanhias->fetch_assoc()) {
                        exibirRelatorioPorCompanhia($conn, $row["id"], $row["nome"]);
                    }
                } else {
                    echo "Sem resultados";
                }
                $conn->close();
                ?>


            </div>
        </div>
    </div>

    <script src="../sidebar-main/src/javascript/scriptRelatorioQuantitativo.js"></script>

</body>

</html>