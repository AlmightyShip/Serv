<?php
require_once 'db_connect.php';

$request_id = $_POST['request_id'];
$note = $_POST['note'];

$stmt = $conn->prepare("UPDATE repairs SET admin_notes=:note WHERE id=:request_id");
$stmt->bindParam(':request_id', $request_id);
$stmt->bindParam(':note', $note);

if ($stmt->execute()) {
    echo '<script>alert("Примечание успешно добавлено."); window.history.back();</script>';
} else {
    echo '<script>alert("Ошибка при добавлении примечания: ' . $stmt->errorInfo()[2] . '"); window.history.back();</script>';
}

$conn = null;
?>