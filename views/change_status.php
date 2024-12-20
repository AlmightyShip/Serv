<?php require_once '../db_connect.php'; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Изменить статус</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
         body {
            background: linear-gradient(to right bottom, #ffecd2, #fcb69f); 
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    background-position: center;
        }
        </style>
</head>
<body>
<div class="container">
    <h1>Изменить статус заявки</h1>
    <form action="../change_status.php" method="post">
    <label for="request_id">Номер заявки:</label><br>
    <input type="number" name="request_id" required><br><br>

    <label for="new_status">Новый статус:</label><br>
    <select name="new_status" required>
        <option value="in_progress">В процессе</option>
        <option value="completed">Завершена</option>
        <option value="canceled">Отказано</option>
    </select><br><br>

    <button type="submit">Изменить статус</button>
</form>
</div>
</body>
</html>