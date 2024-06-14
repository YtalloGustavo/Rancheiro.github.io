<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="script.js" defer></script>

    <title>DashBoard</title>

</head>

<body style="background-color: #4CAF50;">
    <button id="generate-pdf" class="btn btn-primary">Gerar PDF</button>
    <div id="content" class="container mt-5">
        <p class="h1 text-center">RELATORIO DIARIO</p>

        <div class="container-xl bg-light mt-5 mb-5 border border-bottom">

            <?php include 'conexao.php';

            function exibirRelatorioPorCompanhia($conn, $idCompanhia, $nomeCompanhia)
            {
                echo "<h1 class='text-center mt-1 mb-2'>$nomeCompanhia</h1>";
                echo "<div class='container border border-bottom border-black'></div>";

                // Tabela para Soldado e Cabo
                $sqlSoldadoCabo = "SELECT postoGraduacao, nomeDeGuerra, statusUsuario, idCompanhia FROM usuario WHERE postoGraduacao IN ('Soldado', 'Cabo')";
                $resultSoldadoCabo = $conn->query($sqlSoldadoCabo);

                echo "<h2 class='mt-1'>Soldados e Cabos</h2>";
                echo "<table class='table table-striped' border='1'>
                    <tr>
                        <th scope='col'>Posto / Graduação</th>
                        <th scope='col'>Nome de Guerra</th>
                        <th scope='col'>Status</th>
                    </tr>";

                // Verifica se há resultados para Soldado e Cabo
                if ($resultSoldadoCabo->num_rows > 0) {
                    // resultado para mostrar sem registro atualizar para os superiores
                    $registrosSoldadoCabo = false;
                    // output data de cada linha
                    while ($row = $resultSoldadoCabo->fetch_assoc()) {
                        if ($row["idCompanhia"] == $idCompanhia) {
                            $registrosSoldadoCabo = true;
                            echo "<tr>";
                            echo "<td>" . $row["postoGraduacao"] . "</td>";
                            echo "<td>" . $row["nomeDeGuerra"] . "</td>";

                            $status = ($row["status"] == 1) ? "Interno" : "Externo";
                            echo "<td>" . $status . "</td>";
                            echo "</tr>";
                        }
                    }
                    if (!$registrosSoldadoCabo) {
                        echo "<tr><td colspan='3'>Sem Registro</td></tr>";
                    }
                } 
                echo "</table>";

                // Tabela para Sargento
                $sqlSargento = "SELECT postoGraduacao, nomeDeGuerra, statusUsuario, idCompanhia FROM usuario WHERE postoGraduacao IN ('Sargento','Subtenente')";
                $resultSargento = $conn->query($sqlSargento);

                echo "<h2>Sargentos / Sub-Tenentes</h2>";
                echo "<table class='table table-striped' border='1'>
                    <tr>
                        <th scope='col'>Posto / Graduação</th>
                        <th scope='col'>Nome de Guerra</th>
                        <th scope='col'>Status</th>
                    </tr>";

                // Verifica se há resultados para Sargento
                if ($resultSargento->num_rows > 0) {
                    // output data de cada linha
                    while ($row = $resultSargento->fetch_assoc()) {
                        if ($row["idCompanhia"] == $idCompanhia) {
                            echo "<tr>";
                            echo "<td>" . $row["postoGraduacao"] . "</td>";
                            echo "<td>" . $row["nomeDeGuerra"] . "</td>";

                            $status = ($row["status"] == 1) ? "Interno" : "Externo";
                            echo "<td>" . $status . "</td>";
                            echo "</tr>";
                        }
                    }
                } else {
                    echo "<tr><td colspan='3'>0 resultados</td></tr>";
                }
                echo "</table>";

                // Tabela para Tenente
                $sqlTenente = "SELECT postoGraduacao, nomeDeGuerra, statusUsuario, idCompanhia FROM usuario WHERE postoGraduacao 
                    IN ('1º Tenente', '2º Tenente','General do Exército','General de Divisão', 'General de Brigada','Major','Capitão','Aspirante a Oficial',
                    'Marechal', 'Coronel', 'Tenente-Coronel')";
                $resultTenente = $conn->query($sqlTenente);

                echo "<h2>Oficiais</h2>";
                echo "<table class='table table-striped' border='1'>
                    <tr>
                        <th scope='col'>Posto / Graduação</th>
                        <th scope='col'>Nome de Guerra</th>
                        <th scope='col'>Status</th>
                    </tr>";

                // Verifica se há resultados para Tenente
                if ($resultTenente->num_rows > 0) {
                    // output data de cada linha
                    while ($row = $resultTenente->fetch_assoc()) {
                        if ($row["idCompanhia"] == $idCompanhia) {
                            echo "<tr>";
                            echo "<td>" . $row["postoGraduacao"] . "</td>";
                            echo "<td>" . $row["nomeDeGuerra"] . "</td>";

                            $status = ($row["status"] == 1) ? "Interno" : "Externo";
                            echo "<td>" . $status . "</td>";
                            echo "</tr>";
                        }
                    }
                } else {
                    echo "<tr><td colspan='3'>0 resultados</td></tr>";
                }
                echo "</table>";
                echo "<div class='container border border-bottom border-black'></div>";
            }

            include 'conexao.php';

            $sqlCompanhia = "SELECT id, nome FROM companhia";
            $resultCompanhia = $conn->query($sqlCompanhia);

            if ($resultCompanhia->num_rows > 0) {
                while ($row = $resultCompanhia->fetch_assoc()) {
                    $companhia_id = $row['id'];
                    $nome_companhia = $row['nome'];
                    exibirRelatorioPorCompanhia($conn, $companhia_id, $nome_companhia);
                }
            }

            $conn->close();
            ?>


        </div>
    </div>

</body>

</html>