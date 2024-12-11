<?php
require_once 'include/db.php';
session_start();
$senderId = $_GET['sender_id'];
$receiverId = $_GET['receiver_id'];

$agentId = $_SESSION['id'];
// Fetch messages between the two users (both directions)
$stmt = $conn->prepare("SELECT * FROM messages WHERE (sender_id = ? AND receiver_id = ?) OR (sender_id = ? AND receiver_id = ?) ORDER BY created_at ASC");
$stmt->execute([$senderId, $receiverId, $receiverId, $senderId]);
$result = $stmt->get_result(); 
$messages = $result->fetch_all(MYSQLI_ASSOC);

// $stmt = $conn->prepare("SELECT u.id, u.user_name, u.user_email, u.user_role, u.user_login_status, (SELECT COUNT(*)
//     FROM messages m WHERE m.receiver_id = ? AND m.sender_id = u.id AND m.status = 'Unread') AS count_status FROM users u;");
//    $stmt->bind_param("i", $agentId);
//    $stmt->execute();
//    $result = $stmt->get_result();

//    // Fetch all rows
//    $rows = $result->fetch_all(MYSQLI_ASSOC); 

// $allData[] = array(
//     'messages' => $messages,
//     'restData' => $rows
// );

echo json_encode($messages);
?>
