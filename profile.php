<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <link rel="stylesheet" href="less/profile.css">
    <title>Личный кабинет</title>
</head>
<body>
    <?php include "header.php"; ?>
    <div class="window-wrap" id="avatar-choice" style="display: none;">
        <div class="window">
            <form action="profile-submit-avatar.php" method="POST" enctype="multipart/form-data">
                <label for="avatar-upload">Нажмите, чтобы загрузить файл</label>
                <input type="file" name="avatar" id="avatar-upload" required>
                <button type="submit" name="submit">Принять</button>
            </form>
        </div>
    </div>
    <main>
        <section id="avatar-wrap">
            <div id="avatar">
                <img src="/img/ava-change.png" class="icon" draggable="false" alt="">
                <div style="background-image: url('../img/avatars/avatar.jpg');"></div>
            </div>
            <p id="user-name">OldestSalt</p>
        </section>
        <section id="stats-games">
            <div>
                <span>10</span>
                победы
            </div>
            <div>
                <span>10</span>
                ничьи
            </div>
            <div>
                <span>10</span>
                поражения
            </div>
        </section>
    </main>
    <script src="js/profile.js"></script>
</body>
</html>