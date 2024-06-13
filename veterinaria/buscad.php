<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bdveterinaria"; 

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Conexão falhou: " . $e->getMessage());
}

if (isset($_GET['termo'])) {
    $termo = $_GET['termo'];
    $termo = "%$termo%";
    
    $sql = "
        SELECT 
            tbAnimal.codAnimal, tbAnimal.nomeAnimal, tbAnimal.fotoAnimal,
            tbCliente.nomeCliente, tbCliente.telefoneCliente, tbCliente.EmailCliente,
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
            tbAnimal.nomeAnimal LIKE :termo OR
            tbCliente.nomeCliente LIKE :termo OR
            tbCliente.telefoneCliente LIKE :termo OR
            tbCliente.EmailCliente LIKE :termo OR
            tbTipoAnimal.tipoAnimal LIKE :termo OR
            tbVeterinario.nomeVet LIKE :termo OR
            tbAtendimento.DataAtendimento LIKE :termo OR
            tbAtendimento.HoraAtendimento LIKE :termo
    ";
    
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':termo', $termo, PDO::PARAM_STR);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo json_encode($result);
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Busca na Tabela em Tempo Real</title>
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
    <script>
        function buscar() {
            let termo = document.getElementById("termo").value;
            if (termo.length > 0) {
                let xhr = new XMLHttpRequest();
                xhr.open("GET", "?termo=" + termo, true);
                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        let resultados = JSON.parse(xhr.responseText);
                        let tabela = document.getElementById("resultados");
                        tabela.innerHTML = "";

                        if (resultados.length > 0) {
                            resultados.forEach(function(row) {
                                let tr = document.createElement("tr");
                                tr.innerHTML = `
                                    <td>${row.codAnimal}</td>
                                    <td>${row.nomeAnimal}</td>
                                    <td>${row.fotoAnimal}</td>
                                    <td>${row.tipoAnimal}</td>
                                    <td>${row.nomeCliente}</td>
                                    <td>${row.telefoneCliente}</td>
                                    <td>${row.EmailCliente}</td>
                                    <td>${row.DataAtendimento}</td>
                                    <td>${row.HoraAtendimento}</td>
                                    <td>${row.nomeVet}</td>
                                `;
                                tabela.appendChild(tr);
                            });
                        } else {
                            tabela.innerHTML = "<tr><td colspan='10'>Nenhum resultado encontrado</td></tr>";
                        }
                    }
                };
                xhr.send();
            } else {
                document.getElementById("resultados").innerHTML = "<tr><td colspan='10'>Nenhum resultado encontrado</td></tr>";
            }
        }

        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("termo").addEventListener("input", buscar);
        });
    </script>
</head>
<body>

<h2>Buscar na Tabela em Tempo Real</h2>

<form onsubmit="return false;">
    <input type="text" id="termo" name="termo" placeholder="Digite para buscar">
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
    <tbody id="resultados">
        <tr><td colspan="10">Nenhum resultado encontrado</td></tr>
    </tbody>
</table>

</body>
</html>
