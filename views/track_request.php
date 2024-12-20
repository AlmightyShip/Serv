<?php require_once '../db_connect.php'; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Отслеживание заявки</title>
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
    <h1>Отслеживание заявки</h1>
    <form action="../track_request.php" method="get">
        <label for="request_id">Номер заявки:</label><br>
        <input type="number" name="request_id" required><br><br>
        
        <button type="submit">Найти заявку</button>
    </form>
</div>
</body>
</html>