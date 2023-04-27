<?php
$pdo = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'root', '');




//Меняем значние таблицы Контакты с панели администратора

$city = $_POST["city"];
$phone = $_POST["phone"];
$email = $_POST["email"];

$query = $pdo->prepare("UPDATE contacs SET city=:city, phone=:phone, email=:email");
$query->execute(["city"=>$city, "phone"=>$phone, "email"=>$email]);
echo "<meta http-equiv='refresh' content='0, URL=/admin/contacs.php'>";
?>