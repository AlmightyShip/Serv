<?php require_once '../db_connect.php'; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Установка даты завершения</title>
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
    <h1>Установка даты завершения ремонта</h1>
    <form action="../set_completion_date.php" method="post">
        <label for="request_id">Номер заявки:</label><br>
        <input type="number" name="request_id" required><br><br>
        
        <label for="completion_date">Дата завершения:</label><br>
        <input type="date" name="completion_date" required><br><br>
        
        <button type="submit">Установить дату</button>
    </form>
</div>
</body>
</html>