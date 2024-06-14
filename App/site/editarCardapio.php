<div class="side-bar">
    <?php include ('../sidebar-main/menuLateral.php'); ?>
    <script src="../sidebar-main/src/javascript/script.js"></script>
</div>

<?php
include '../sidebar-main/conexoes-banco/conexao.php';

// Verifica se há um ID válido na URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Busca o cardápio pelo ID (proteção contra SQL injection)
    $sql = "SELECT * FROM cardapio WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Cardápio não encontrado.";
        exit;
    }
}

// Processa o formulário quando enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nomeCardapio = $_POST['nomeCardapio'];
    $cafeDaManha = $_POST['cafedamanha'];
    $almoco = $_POST['almoco'];
    $jantar = $_POST['janta'];
    $ceia = $_POST['ceia'];

    // Atualiza o cardápio (proteção contra SQL injection)
    $sql = "UPDATE cardapio SET nomeCardapio = ?, cafeDaManha = ?, almoco = ?, jantar = ?, ceia = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssi", $nomeCardapio, $cafeDaManha, $almoco, $jantar, $ceia, $id);

    if ($stmt->execute()) {
        echo "Cardápio atualizado com sucesso.";
        header("Location: http://localhost/orancheiro/app/site/listaDeCardapios.php");
        exit();
    } else {
        echo "Erro ao atualizar o cardápio: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Editar Cardápio</title>
    <link rel="stylesheet" href="../sidebar-main/src/css/boxer.css">
    <link rel="stylesheet" href="../sidebar-main/src/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

<div class="box">
    <form method="post" action="editarCardapio.php">
        <fieldset>
            <legend>Editar Cardápio</legend>
            <div class="inputBox">
                <label for="nomeCardapio">Nome do Cardápio:</label>
                <input type="text" id="nomeCardapio" name="nomeCardapio" value="<?php echo $row['nomeCardapio']; ?>" class="inputUser">
            </div>
            <div class="inputBox">
                <label for="cafedamanha">Café da manhã:</label>
                <input type="text" id="cafedamanha" name="cafedamanha" value="<?php echo $row['cafeDaManha']; ?>" class="inputUser">
            </div>
            <div class="inputBox">
                <label for="almoco">Almoço:</label>
                <input type="text" id="almoco" name="almoco" value="<?php echo $row['almoco']; ?>" class="inputUser">
            </div>
            <div class="inputBox">
                <label for="janta">Janta:</label>
                <input type="text" id="janta" name="janta" value="<?php echo $row['jantar']; ?>" class="inputUser">
            </div>
            <div class="inputBox">
                <label for="ceia">Ceia:</label>
                <input type="text" id="ceia" name="ceia" value="<?php echo $row['ceia']; ?>" class="inputUser">
            </div>
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <input type="submit" value="Salvar" id="submit">
        </fieldset>
    </form>
</div>

</body>
</html>