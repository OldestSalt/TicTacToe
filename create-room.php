<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="less/create-room.css">
    <title>Создание комнаты</title>
</head>
<body>
    <?php include "header.php"; ?>
    <main>
        <!-- <section class="warning">Войдите или зарегистрируйтесь, чтобы создать комнату или присоединиться к другому игроку</section> -->
        <form action="paha-churka.php" method="POST">
            <input type="text" name="room-name" id="room-name" placeholder="Название комнаты" required minlength="" maxlength="">
            <button type="submit">Создать</button>
        </form>
    </main>
</body>
</html>