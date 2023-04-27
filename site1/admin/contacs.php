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
    <br>
    <?php
        $sql = $pdo->prepare("SELECT * FROM contacs");
        $sql->execute();
        $res = $sql->fetch(PDO::FETCH_OBJ);
    ?>

    <form action="/admin/contact/update.php" method="post">
        <input type="text" name = "city" value="<?php echo $res->city?>">
        <input type="text" name = "phone" value="<?php echo $res->phone?>">
        <input type="text" name = "email" value="<?php echo $res->email?>">
        <input type="submit" value="Сохранить">
    </form>
    

    <?php else:
        echo '<a href="/">На главную</a>';
    ?>
    <?php endif ?>
    </div>
    
</body>
</html>