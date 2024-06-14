<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js" integrity="sha512-BNaRQnYJYiPSqHHDb58B0yaPfCu+Wgds8Gp/gU33kqBtgNS4tSPHuGibyoeqMV/TJlSKda6FXzoEyYGjTe+vXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="../sidebar-main/src/css/site.css">
    <link rel="stylesheet" href="../sidebar-main/src/css/styles.css">


    <title>Relatório Diário</title>
</head>

<body>

    <div class="side-bar">
        <?php include('../sidebar-main/menuLateral.php'); ?>
        <script src="../sidebar-main/src/javascript/script.js"></script>
    </div>

    <div>
        <div class="botoes">
            <button id="generate-pdf" class="botao">Baixar relatorio</button>
            <a class="botao" href="http://localhost/orancheiro/App/site/relatorioQuantitativo.php">Relatório Quantitativo</a>
        </div>
        <div id="relatorio-container" class="container-grande margem-topo-5">

            <div id="content" class="relatorio-conteudo">


                <h1>RELATÓRIO DIÁRIO</h1>
                <?php

                include '../sidebar-main/conexoes-banco/conexao.php';

                function exibirRelatorioPorCompanhia($conn, $idCompanhia, $nomeCompanhia)
                {
                    echo "<div class='container-grande borda borda-inferior'>
                            <h1 class='text-center'>$nomeCompanhia</h1>
                            </div>";


                    $sqlSoldadoCabo = "SELECT postoGraduacao, nomeDeGuerra, statusUsuario, idCompanhia FROM usuario WHERE postoGraduacao 
                    IN ('Soldado', 'Cabo') AND arranchado = 1";
                    $resultSoldadoCabo = $conn->query($sqlSoldadoCabo);

                    echo "<h2 class='margem-topo-5'>Soldados e Cabos</h2>";
                    echo "<table class='tabela-relatorio' border='1'>
                            <tr>
                                <th scope='col'>Posto / Graduação</th>
                                <th scope='col'>Nome de Guerra</th>
                                <th scope='col'>Status</th>
                            </tr>";

                    if ($resultSoldadoCabo->num_rows > 0) {
                        $registrosSoldadoCabo = false;

                        while ($row = $resultSoldadoCabo->fetch_assoc()) {

                            if ($row["idCompanhia"] == $idCompanhia) {
                                $registrosSoldadoCabo = true;
                                echo "<tr>";
                                echo "<td>" . $row["postoGraduacao"] . "</td>";
                                echo "<td>" . $row["nomeDeGuerra"] . "</td>";

                                $status = ($row["statusUsuario"] == 1) ? "Interno" : "Externo";
                                echo "<td>" . $status . "</td>";
                                echo "</tr>";
                            }
                        }
                        if (!$registrosSoldadoCabo) {
                            echo "<tr><td colspan='3'>Sem Registro</td></tr>";
                        }
                    }


                    echo "</table>";

                    // Tabela para Sargento e Sub-tenente
                    $sqlSargento = "SELECT postoGraduacao, nomeDeGuerra, statusUsuario, idCompanhia FROM usuario WHERE postoGraduacao 
                    IN ('Sargento','Sub-tenente') AND arranchado = 1";
                    $resultSargento = $conn->query($sqlSargento);

                    echo "<h2 class='margem-topo-5'>Sargentos / Sub-Tenentes</h2>";
                    echo "<table class='tabela-relatorio' border='1'>
                    <tr>
                    <th scope='col'>Posto / Graduação</th>
                    <th scope='col'>Nome de Guerra</th>
                    <th scope='col'>Status</th>
                    </tr>";

                    // Verifica se há resultados para Sargento
                    if ($resultSargento->num_rows > 0) {
                        // output data de cada linha
                        $registrosSargentoSub = false;

                        while ($row = $resultSargento->fetch_assoc()) {
                            if ($row["idCompanhia"] == $idCompanhia) {
                                $registrosSargentoSub = true;
                                echo "<tr>";
                                echo "<td>" . $row["postoGraduacao"] . "</td>";
                                echo "<td>" . $row["nomeDeGuerra"] . "</td>";

                                $status = ($row["statusUsuario"] == 1) ? "Interno" : "Externo";
                                echo "<td>" . $status . "</td>";
                                echo "</tr>";
                            }
                        }
                        if (!$registrosSargentoSub) {
                            echo "<tr><td colspan='3'>Sem Registro</td></tr>";
                        }
                    }
                    echo "</table>";

                    // Tabela para Oficiais
                    $sqlOficiais = "SELECT postoGraduacao, nomeDeGuerra, statusUsuario, idCompanhia FROM usuario WHERE postoGraduacao 
                    IN ('Aspirante a Oficial', 'Tenente', 'Capitão', 'Major', 'Tenente-Coronel', 'Coronel', 'General') AND arranchado = 1";
                    $resultOficiais = $conn->query($sqlOficiais);

                    echo "<h2 class='margem-topo-5'>Oficiais</h2>";
                    echo "<table class='tabela-relatorio' border='1'>
                    <tr>
                    <th scope='col'>Posto / Graduação</th>
                    <th scope='col'>Nome de Guerra</th>
                    <th scope='col'>Status</th>
                    </tr>";

                    // Verifica se há resultados para Tenente
                    if ($resultOficiais->num_rows > 0) {
                        // output data de cada linha
                        $registrosOficiais = false;

                        while ($row = $resultOficiais->fetch_assoc()) {
                            if ($row["idCompanhia"] == $idCompanhia) {
                                $registrosOficiais = true;
                                echo "<tr>";
                                echo "<td>" . $row["postoGraduacao"] . "</td>";
                                echo "<td>" . $row["nomeDeGuerra"] . "</td>";

                                $status = ($row["statusUsuario"] == 1) ? "Interno" : "Externo";
                                echo "<td>" . $status . "</td>";
                                echo "</tr>";
                            }
                        }
                        if (!$registrosOficiais) {
                            echo "<tr><td colspan='3'>Sem Registro</td></tr>";
                        }
                    }
                    echo "</table>";
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
    
    <script src="../sidebar-main/src/javascript/scriptRelatorio.js"></script>

</body>

</html>