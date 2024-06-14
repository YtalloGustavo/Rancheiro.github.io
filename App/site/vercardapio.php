<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../sidebar-main/src/css/accordion.css">
    <link rel="stylesheet" href="../sidebar-main/src/css/styles.css">
    <link rel="stylesheet" href="../sidebar-main/src/css/background.css">
    <link rel="stylesheet" href="../sidebar-main/src/css/footer.css">
    <title>Cardapio Semanal</title>
</head>

<body>
    <!-- Inicio Sidebar -->
    <?php
    include('../sidebar-main/menuLateral.php');
    include('../sidebar-main/conexoes-banco/conexao.php');
    ?>
    <!-- Fim Sidebar -->

    <div class="background-container">
        <img src="..\sidebar-main\src\images\fundodetela1.jpeg" alt="Fundo" class="background-image">
    </div>


    <?php
    // Array com os dias da semana
    $diasSemana = [
        'terca' => 'Terça-feira',
        'quarta' => 'Quarta-feira',
        'quinta' => 'Quinta-feira',
        'sexta' => 'Sexta-feira',
        'sabado' => 'Sábado',
        'domingo' => 'Domingo',
        'segunda' => 'Segunda-feira'
    ];
    
    echo '<div id="container">';
    
    foreach ($diasSemana as $diaChave => $diaNome) {
        echo '<div class="accordion">';
        echo '<button class="accordion-header">';
        echo '<span>' . $diaNome . '</span>';
        echo '<i class="fa-solid fa-chevron-down arrow"></i>';
        echo '</button>';
    
        // Consulta para buscar o último cardápio com base no id do dia da semana
        $sql = "SELECT c.id, c.cafedamanha, c.almoco, c.jantar, c.ceia 
            FROM cardapio c 
            INNER JOIN cardapiosemanal cs ON c.id = cs.$diaChave
            ORDER BY cs.id DESC LIMIT 1";
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
            echo '<div class="accordion-body">';
            echo '<table border="1">
        <tr>
            <th>Café</th>
            <th>Almoço</th>
            <th>Janta</th>
            <th>Ceia</th>
        </tr>';
    
            while ($row = $result->fetch_assoc()) {
                echo '<tr>
            <td>' . $row['cafedamanha'] . '</td>
            <td>' . $row['almoco'] . '</td>
            <td>' . $row['jantar'] . '</td>
            <td>' . $row['ceia'] . '</td>
          </tr>';
            }
    
            echo '</table>';
            echo '</div>';
        } else {
            echo '<div class="accordion-body">Nenhum cardápio encontrado para ' . $diaNome . '.</div>';
        }
    
        echo '</div>';
    }
    
    echo '</div>';
    ?>


    <footer class="footer">
        <p>© 2024 Rancheiro. Todos os direitos reservados.</p>
    </footer>

    <script src="../sidebar-main/src/javascript/accordion.js"></script>
    <script src="../sidebar-main/src/javascript/script.js"></script>
</body>

</html>