<?php
require_once 'db_connect.php';

$stmt = $conn->query("SELECT * FROM repairs");
$requests = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($requests as $request) {
    echo "<p>Заявка №{$request['id']}:</p>";
    echo "<p>Клиент: {$request['client_name']}</p>";
    echo "<p>Оборудование: {$request['equipment_type']}</p>";
    echo "<p>Дата подачи: {$request['submission_date']}</p>";
    echo "<p>Описание проблемы: {$request['problem_description']}</p>"; 
}

$conn = null;
?>