<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Информация о заявке</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background: linear-gradient(to right bottom, #ffecd2, #fcb69f); 
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    background-position: center;
}
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        p {
            line-height: 1.5;
            margin-bottom: 10px;
        }
        
    </style>
</head>
<body>
<div class="container">
    <h1>Информация о заявке</h1>
    <?php
    require_once 'db_connect.php';

    $request_id = $_GET['request_id'];

    $stmt = $conn->prepare("SELECT * FROM repairs WHERE id=:request_id");
    $stmt->bindParam(':request_id', $request_id);
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        echo "<p>Номер заявки: " . $row["id"] . "</p>";
        echo "<p>ФИО клиента: " . $row["client_name"] . "</p>";
        echo "<p>Дата подачи: " . $row["submission_date"] . "</p>";
        echo "<p>Тип оборудования: " . $row["equipment_type"] . "</p>";
        echo "<p>Статус заявки: " . $row["status"] . "</p>";
        if (!is_null($row["completion_date"])) {
            echo "<p>Дата завершения: " . $row["completion_date"] . "</p>";
        }

        if (!empty($row["admin_notes"])) {
            echo "<p><strong>Примечания от администратора:</strong></p>";
            echo "<p>" . nl2br($row["admin_notes"]) . "</p>";
        }
    } else {
        echo "Запись не найдена.";
    }

    $conn = null;
    ?>
</div>
</body>
</html>