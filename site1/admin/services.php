<?php session_start();?>
<?php require_once "../connect.php";?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Панель администратора</title>
</head>
<body>
    <div style="text-align: center;">
    <h1>Панель редактирования блока "Услуги"</h1>
    <?php if(!empty($result->login)): ?>

    <?php echo  "Добрый день, " . $result->login  ?><br>
    <a href="/logout.php">Выйти</a><br>
    <br>
    <?php
        $sql = $pdo->prepare("SELECT * FROM services");
        $sql->execute();
        $res = $sql->fetch(PDO::FETCH_OBJ);
    ?>

    <form action="/admin/services/update-services.php" method="post" enctype="multipart/form-data">
        <input type="text" name = "title" value="<?php echo $res->title?>">
        <input type="text" name = "price" value="<?php echo $res->price?>"><br><br>
        
        <input type="submit" name ="save"value="Сохранить">
    </form>
    <br>
    <img src="/images/<?php echo $res->filename?>" alt="">
    

    <?php else:
        echo '<a href="/">На главную</a>';
    ?>
    <?php endif ?>
    </div>
    
</body>
</html>