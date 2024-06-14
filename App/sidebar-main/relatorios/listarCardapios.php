<?php 
include '../sidebar-main/conexoes-banco/conexao.php'; // Inclui o arquivo de conexão com o banco de dados

function listaDados($conn)
{
    $output = ''; // Variável para armazenar o HTML da tabela

    $sqlListaCardapio = "SELECT * FROM cardapio";
    $resultListaCardapio = $conn->query($sqlListaCardapio);

    if ($resultListaCardapio->num_rows > 0) {
        // Inicia a tabela com classes CSS
        $output .= '<table class="tabela-relatorio">';
        $output .= '<thead>
                        <tr>
                            <th>#</th>
                            <th>Nome do Cardápio</th>
                            <th>Ações</th>
                        </tr>
                    </thead>';
        $output .= '<tbody>';

        // Saída de dados de cada linha
        while ($row = $resultListaCardapio->fetch_assoc()) {
            $output .= '<tr>';
            $output .= '<td>' . htmlspecialchars($row["id"]) . '</td>'; // Utiliza htmlspecialchars para evitar XSS
            $output .= '<td>' . htmlspecialchars($row["nomeCardapio"]) . '</td>'; // Utiliza htmlspecialchars para evitar XSS
            $output .= '<td>
                            <button class="botao editar" onclick="editarCardapio(' . $row['id'] . ')">Editar</button>
                            <button class="botao excluir" onclick="excluirCardapio(' . $row['id'] . ')">Excluir</button>
                        </td>';
            $output .= '</tr>';
        }

        $output .= '</tbody>';
        $output .= '</table>';
    } else {
        $output = '<p>Nenhum cardápio encontrado.</p>'; // Mensagem caso não haja resultados
    }

    echo $output; // Mostra a tabela na página
}
?>
