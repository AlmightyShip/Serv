<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Подача заявки</title>
    <style>
       * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Arial', sans-serif;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: linear-gradient(to right bottom, #ffecd2, #fcb69f); 
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    background-position: center;
}

.container {
    background-color: #fff;
    padding: 60px;
    border-radius: 12px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
    max-width: 600px;
    width: 100%;
}

h1 {
    text-align: center;
    margin-bottom: 30px;
    font-size: 28px;
    color: #333;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-top: 25px;
    font-weight: 500;
    font-size: 18px;
    color: #555;
}

input[type="text"],
select,
textarea {
    padding: 14px 22px;
    margin-top: 12px;
    margin-bottom: 26px;
    border: 1px solid #ddd;
    border-radius: 6px;
    outline: none;
    width: 100%;
    transition: all 0.3s ease-in-out;
}

input[type="text"]:focus,
select:focus,
textarea:focus {
    border-color: #2196F3;
    box-shadow: 0 0 7px rgba(33, 150, 243, 0.35);
}

button {
    background-color: #0056b3;
    color: white;
    padding: 16px 36px;
    margin-top: 20px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    width: 100%;
    transition: background-color 0.3s ease;
    font-size: 18px;
    font-weight: 500;
}

button:hover {
    background-color: #00429c;
}
    </style>
</head>
<body>
<div class="container">
    <h1>Подача заявки на ремонт</h1>
    <form action="../submit_request.php" method="post">
        <label for="client_name">ФИО:</label><br>
        <input type="text" name="client_name" required><br><br>

        <label for="equipment_type">Какая техника:</label><br>
        <select name="equipment_type" required>
            <option value="">Выберите тип техники</option>
            <option value="Телефон">Телефон</option>
            <option value="Ноутбук">Ноутбук</option>
            <option value="Планшет">Планшет</option>
            <option value="Плазма">Плазма</option>
            <option value="Компьютер">Компьютер</option>
        </select><br><br>

        <label for="problem_description">Что случилось с устройством?</label><br>
        <textarea name="problem_description" rows="4" placeholder="Опишите, что произошло..." required></textarea><br><br>

        <button type="submit">Отправить заявку</button>
    </form>
    
</div>
</body>
</html>