<?php require_once '../db_connect.php'; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Добавить примечание</title>
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
    <h1>Добавить примечание к заявке</h1>
    <form action="../add_admin_note.php" method="post">
        <label for="request_id">Номер заявки:</label><br>
        <input type="number" name="request_id" required><br><br>
        
        <label for="note">Примечание:</label><br>
        <textarea name="note" rows="5" cols="40"></textarea><br><br>
        
        <button type="submit">Добавить примечание</button>
    </form>
</div>
</body>
</html>