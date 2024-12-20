<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Панель управления</title>
    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        
        html {
            font-size: 62.5%;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
            font-size: 1.6rem;
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-weight: bold;
            margin-top: 0;
            margin-bottom: 1.5rem;
        }
        
        .container {
            width: 90%;
            max-width: 80rem;
            margin: 5rem auto; 
            padding: 3rem;
            background-color: #fff;
            border-radius: 1rem;
            box-shadow: 0 0 1rem rgba(0, 0, 0, 0.1); 
        }
        
        h1 {
            text-align: center;
            margin-bottom: 3rem;
            font-size: 2.8rem;
        }
        
        .admin-nav ul {
            list-style-type: none;
            padding-left: 0;
        }
        
        .admin-nav li {
            margin-bottom: 1rem;
        }
        
        .admin-nav a {
            display: block;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        
        .admin-nav a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Панель управления</h1>
    <nav class="admin-nav">
        <ul>
            <li><a href="view_requests.php">Просмотреть все заявки</a></li>
            <li><a href="add_admin_note.php">Добавить примечание к заявке</a></li>
            <li><a href="change_status.php">Изменить статус заявки</a></li>
            <li><a href="set_completion_date.php">Установить дату завершения ремонта</a></li>
        </ul>
    </nav>
</div>
</body>
</html>