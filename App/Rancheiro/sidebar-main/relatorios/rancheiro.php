<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "orancheiro";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}


function insereDados($cafeManha, $almoco, $janta, $ceia, $bebida, $idUsuario, $conn) {
    $sql = "INSERT INTO cardapio (cafeManha, almoco, janta, ceia, bebida, idUsuario)
            VALUES ('$cafeManha', '$almoco', '$janta', '$ceia', '$bebida', '$idUsuario')";

    if ($conn->query($sql) === TRUE) {
        echo "Novo registro inserido com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

function listaDados($conn) {
    $sql = "SELECT * FROM cardapio";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"]. " - Café da manhã: " . $row["cafeManha"]. " - Almoço: " . $row["almoco"]. "<br>";
        }
    } else {
        echo "0 resultados";
    }
}

function atualizaDados($id, $cafeManha, $almoco, $janta, $ceia, $bebida, $idUsuario, $conn) {
    $sql = "UPDATE cardapio
            SET cafeManha='$cafeManha', almoco='$almoco', janta='$janta', ceia='$ceia', bebida='$bebida', idUsuario='$idUsuario'
            WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Registro atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar registro: " . $conn->error;
    }
}

function deletaData($id, $conn) {
    $sql = "DELETE FROM cardapio WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Registro deletado com sucesso!";
    } else {
        echo "Erro ao deletar registro: " . $conn->error;
    }
}

?>
