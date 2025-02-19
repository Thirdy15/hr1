<?php
include '../db/db_conn.php';

function clearNotifications() {
    global $conn;
    $sql = "UPDATE notifications SET is_read = 1";
    $result = $conn->query($sql);
    $response = ['success' => $result];
    echo json_encode($response);
    $conn->close();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    clearNotifications();
}
?>
