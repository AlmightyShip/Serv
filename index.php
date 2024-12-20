<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Ремонт электроники</title>
    <link rel="stylesheet" href="css/style.css">
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
            color: #333;
            line-height: 1.6;
            font-size: 1.6rem; 
            background: linear-gradient(to right bottom, #ffecd2, #fcb69f); 
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    background-position: center;
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
        
        .links {
            display: flex;
            justify-content: space-between;
            margin-bottom: 2rem;
        }
        
        .links a {
            color: #007bff;
            text-decoration: none;
        }
        
        .links a:hover {
            text-decoration: underline;
        }
        
        .links a.button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        
        .links a.button:hover {
            background-color: #0056b3;
        }
        
        .admin-link {
            background-color: #d32f2f;
        }
        
        .admin-link:hover {
            background-color: #c2185b;
        }
        
        @media (max-width: 64rem) { 
            .container {
                width: 95%;
            }
            
            .links {
                flex-wrap: wrap;
                gap: 1rem;
            }
        }
        
        @media (max-width: 48rem) { 
            .container {
                width: 98%;
            }
            
            .links {
                flex-wrap: wrap;
                gap: 1rem;
            }
        }
        
        @media (max-width: 36rem) { 
            .container {
                width: 100%;
            }
            
            .links {
                flex-wrap: wrap;
                gap: 1rem;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Добро пожаловать!</h1>
    <div class="links">
        <a href="views/submit_request.php" class="button">Подать заявку</a>
        <a href="views/track_request.php" class="button">Отследить заявку</a>
            <a href="views/admin_panel.php" class="admin-link button">Администраторская панель</a>
    </div>
</div>
</body>
</html>