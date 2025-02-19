<?php
include '../db/db_conn.php';

$data = json_decode(file_get_contents('php://input'), true);
$notificationId = $data['id'];

$sql = "UPDATE notifications SET is_read = 1 WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $notificationId);
$stmt->execute();

$response = ['success' => $stmt->affected_rows > 0];
echo json_encode($response);

$stmt->close();
$conn->close();
?>
