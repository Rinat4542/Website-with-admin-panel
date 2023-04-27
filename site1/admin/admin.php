<?php session_start();?>
<?php require_once "../connect.php";?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Комната администратора</title>
</head>
<body>
    <div style="text-align: center;">
    <?php if(!empty($result->login)): ?>

    <?php echo  "Добрый день, " . $result->login  ?><br>
    <a href="/logout.php">Выйти</a><br>
    <a href="contacs.php">Контакты</a>
    <a href="#">Шапка страницы</a>
    <a href="#">Услуги</a>
    <a href="about.php">О нас</a>
    <?php else:
        echo '<a href="/">На главную</a>';
    ?>
    <?php endif ?>
    </div>
    
</body>
</html>