<?php require_once '../db_connect.php'; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Все заявки</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        body {
            background: linear-gradient(to right bottom, #ffecd2, #fcb69f); 
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    background-position: center;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 30px;
            background-color: #fff;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 28px;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        thead th {
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
        }

        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        a {
            color: #007BFF;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .actions {
            text-align: right;
            margin-top: 20px;
        }

        .btn {
            padding: 8px 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            font-size: 14px;
        }

        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Все заявки</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>ФИО Клиента</th>
                <th>Тип Оборудования</th>
                <th>Дата Подачи</th>
                <th>Статус</th>
                <th>Дата Завершения</th>
                <th>Примечания</th>
                <th>Описание Проблемы</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $statuses = [
                'in_progress' => 'В процессе',
                'completed'   => 'Завершена',
                'canceled'    => 'Отменена'
            ];
            
            $stmt = $conn->query("SELECT * FROM repairs");
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $status = isset($statuses[$row['status']]) ? $statuses[$row['status']] : $row['status'];
            ?>
                <tr>
                    <td><?= htmlspecialchars($row['id'], ENT_QUOTES); ?></td>
                    <td><?= htmlspecialchars($row['client_name'], ENT_QUOTES); ?></td>
                    <td><?= htmlspecialchars($row['equipment_type'], ENT_QUOTES); ?></td>
                    <td><?= htmlspecialchars($row['submission_date'], ENT_QUOTES); ?></td>
                    <td><?= htmlspecialchars($status, ENT_QUOTES); ?></td>
                    <td><?= htmlspecialchars($row['completion_date'], ENT_QUOTES); ?></td>
                    <td><?= htmlspecialchars($row['admin_notes'], ENT_QUOTES); ?></td>
                    <td><?= htmlspecialchars($row['problem_description'], ENT_QUOTES); ?></td> <!-- Новый столбец -->
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
</body>
</html>