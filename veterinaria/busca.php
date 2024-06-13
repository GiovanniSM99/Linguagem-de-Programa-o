<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bdveterinaria"; 

// Criando a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Função para buscar dados com base no termo de busca
function buscarDados($termo) {
    global $conn;
    $sql = "
        SELECT 
            tbAnimal.codAnimal, tbAnimal.nomeAnimal, tbAnimal.fotoAnimal,
            tbCliente.nomecliente, tbCliente.telefonecliente, tbCliente.EmailCliente,
            tbTipoAnimal.tipoAnimal,
            tbAtendimento.DataAtendimento, tbAtendimento.HoraAtendimento,
            tbVeterinario.nomeVet
        FROM 
            tbAnimal
        JOIN 
            tbCliente ON tbAnimal.codCliente = tbCliente.codCliente
        JOIN 
            tbTipoAnimal ON tbAnimal.codTipoAnimal = tbTipoAnimal.codTipoAnimal
        LEFT JOIN 
            tbAtendimento ON tbAnimal.codAnimal = tbAtendimento.codAnimal
        LEFT JOIN 
            tbVeterinario ON tbAtendimento.codVet = tbVeterinario.codVet
        WHERE 
            tbAnimal.nomeAnimal LIKE '%$termo%' OR
            tbCliente.nomecliente LIKE '%$termo%' OR
            tbTipoAnimal.tipoAnimal LIKE '%$termo%' OR
            tbVeterinario.nomeVet LIKE '%$termo%' OR
            tbAtendimento.DataAtendimento LIKE '%$termo%' OR
            tbAtendimento.HoraAtendimento LIKE '%$termo%';
    ";
    $result = $conn->query($sql);
    return $result;
}

$resultado = null;

if (isset($_POST['buscar'])) {
    $termo = $_POST['termo'];
    $resultado = buscarDados($termo);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Busca na Tabela</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Buscar na Tabela</h2>

<form method="post">
    <input type="text" id="termo" name="termo" placeholder="Digite para buscar">
    <button type="submit" name="buscar">Buscar</button>
</form>

<table>
    <tr>
        <th>Código do Animal</th>
        <th>Nome do Animal</th>
        <th>Foto do Animal</th>
        <th>Tipo do Animal</th>
        <th>Nome do Cliente</th>
        <th>Telefone do Cliente</th>
        <th>Email do Cliente</th>
        <th>Data do Atendimento</th>
        <th>Hora do Atendimento</th>
        <th>Nome do Veterinário</th>
    </tr>
    <?php
    if ($resultado && $resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["codAnimal"] . "</td>";
            echo "<td>" . $row["nomeAnimal"] . "</td>";
            echo "<td>" . $row["fotoAnimal"] . "</td>";
            echo "<td>" . $row["tipoAnimal"] . "</td>";
            echo "<td>" . $row["nomecliente"] . "</td>";
            echo "<td>" . $row["telefonecliente"] . "</td>";
            echo "<td>" . $row["EmailCliente"] . "</td>";
            echo "<td>" . $row["DataAtendimento"] . "</td>";
            echo "<td>" . $row["HoraAtendimento"] . "</td>";
            echo "<td>" . $row["nomeVet"] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='10'>Nenhum resultado encontrado</td></tr>";
    }
    ?>
</table>

</body>
</html>

<?php
$conn->close();
?>