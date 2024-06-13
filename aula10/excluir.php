<?php
include('conn.php');

$id= $_GET['id'];
$stmt = $pdo ->prepare('DELETE FROM tbaluno WHERE ra = ?');
$stmt ->execute([$id]);

header('Location: index.php');