<?php
include('conn.php');

$id= $_GET['codAtendimento'];
$stmt = $pdo ->prepare('DELETE FROM tbatendimento  WHERE codAtendimento = ?');
$stmt ->execute([$id]);

header('Location: index.php');


    echo "<td>" . $row["codAtendimento"] . "</td>"; 
    echo "<td>" . $row["dataAtendimento"] . "</td>";
    echo "<td>" . $row["horaAtendimento"] . "</td>";

?>
