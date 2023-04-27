<?php

$pdo = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'root', '');

$main = $pdo->prepare("SELECT * FROM user");
$main->execute();
$result = $main->fetch(PDO::FETCH_OBJ);

?>