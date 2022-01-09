<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="less/game.css">
    <title>Игра</title>
</head>
<body>
    <?php include "header.php"; ?>
    <div id="loading">
        <img src="../img/cross.png" class="cross" alt="">
        <img src="../img/nought.png" alt="">
    </div>
    <main>
        <table style="display: none;">
            <tr>
                <td id="cell-0-0"></td>
                <td id="cell-0-1"></td>
                <td id="cell-0-2"></td>
            </tr>
            <tr>
                <td id="cell-1-0"></td>
                <td id="cell-1-1"></td>
                <td id="cell-1-2"></td>
            </tr>
            <tr>
                <td id="cell-2-0"></td>
                <td id="cell-2-1"></td>
                <td id="cell-2-2"></td>
            </tr>
        </table>
        <div id="info">Пожалуйста, подождите игрока...</div>
    </main>
</body>
</html>