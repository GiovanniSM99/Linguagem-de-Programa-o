<?php
    $host = 'localhost';
    $dbname = 'bdLivros';
    $usarname = 'root';
    $password = '';

    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $usarname, $password);

?>