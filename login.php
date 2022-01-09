<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="less/login.css">
    <title>Авторизация</title>
</head>
<body>
    <form action="paha-churka.php" method="POST">
        <!-- <div class="infobox error">Сам напиши ошибку паха</div> -->
        <!-- <div class="infobox success">Сам напиши успех паха</div> -->
        <input type="login" id="login" required placeholder="Логин" minlength="5" maxlength="20" name="login">
        <input type="password" id="password" required placeholder="Пароль" minlength="5" maxlength="20" name="password">
        <button type="submit" id="login-btn" name="loginhit">Вход</button>
        <button type="submit" id="reg-btn" name="reghit">Регистрация</button>
    </form>
</body>
</html>