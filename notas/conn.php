<?php
    $host = 'localhost';
    $dbname = 'bdNotas';
    $usarname = 'root';
    $password = '';

    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $usarname, $password);

?>