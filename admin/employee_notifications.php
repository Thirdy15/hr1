<?php
include '../db/db_conn.php';

$message = "A new employee account has been created.";
$sql = "INSERT INTO employee_notifications (message, created_at, is_read) VALUES (?, NOW(), 0)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $message);
$stmt->execute();

$stmt->close();
$conn->close();
?>
