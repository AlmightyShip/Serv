<?php
require_once 'db_connect.php';

$client_name = $_POST['client_name'];
$equipment_type = $_POST['equipment_type'];
$problem_description = $_POST['problem_description'];
$submission_date = date('Y-m-d');

$stmt = $conn->prepare("INSERT INTO repairs (client_name, equipment_type, problem_description, submission_date) VALUES (:client_name, :equipment_type, :problem_description, :submission_date)");
$stmt->bindParam(':client_name', $client_name);
$stmt->bindParam(':equipment_type', $equipment_type);
$stmt->bindParam(':problem_description', $problem_description); 
$stmt->bindParam(':submission_date', $submission_date);

if ($stmt->execute()) {
    $request_id = $conn->lastInsertId();
    echo '<script>alert("Ваша заявка №' . $request_id . ' успешно подана!"); window.location.href = "index.php";</script>';
} else {
    echo '<script>alert("При подаче заявки произошла ошибка: ' . $stmt->errorInfo()[2] . '"); window.location.href = "index.php";</script>';
}

$conn = null;
?>

<style>

    .modal {
        display: none;
        position: fixed;
        z-index: 9999;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.6);

    }

    .modal-content {
        background-color: #fefefe;
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        max-width: 500px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        animation-name: zoomIn;
        animation-duration: 0.6s;
    }

    @keyframes zoomIn {
        from {transform: scale(0)}
        to {transform: scale(1)}
    }

    .modal-header {
        padding: 2px 16px;
        background-color: #5cb85c;
        color: white;
    }

    .modal-body {
        padding: 2px 16px;
    }

    .modal-footer {
        padding: 2px 16px;
        background-color: #5cb85c;
        color: white;
        text-align: right;
    }

    .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }
</style>

<script>
    window.onload = function () {
        var modal = document.getElementById('modal');
        modal.style.display = "block"; 

        var closeBtn = document.querySelector('.close');
        closeBtn.onclick = function () {
            modal.style.display = "none";
        };

        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        };
    };
</script>