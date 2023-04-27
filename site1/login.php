<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Site</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <h2>Вход в административную панель</h2>

    <form action="admin/admin.php" class="container" method="post">
        <div class="form-group">
            <input type="text" name="login" placeholder="Введите логин">
        </div>
        <div class="form-group">
            <input type="text" name="password" placeholder="Введите пароль">
        </div>
        <button type="submit" class="button">Войти</button>
    </form>
</body>
</html>