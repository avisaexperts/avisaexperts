<?php
require_once 'include/db.php';
session_start();

$agentId = $_SESSION['id'];

$stmt = $conn->prepare("SELECT u.id, u.user_name, u.user_role, (SELECT COUNT(*)
    FROM messages m WHERE m.receiver_id = ? AND m.sender_id = u.id AND m.status = 'Unread') AS count_status FROM users u;");
   $stmt->bind_param("i", $agentId);
   $stmt->execute();
   $result = $stmt->get_result();
   
   // Fetch all rows
   $rows = $result->fetch_all(MYSQLI_ASSOC); 

echo json_encode($rows);
?>
