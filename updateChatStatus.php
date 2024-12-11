<?php
    require_once 'include/db.php';
    session_start();
    //sender_id, receiver_id
    $agentId = $_SESSION['id'];

    $senderId = $_GET['sender_id'];
    $receiverId = $_GET['receiver_id'];

    $stmt = $conn->prepare("UPDATE messages
			SET status = 'Read', is_read = 'Yes' WHERE receiver_id = ? AND sender_id = ? AND status = 'Unread' AND is_read = 'No'");
    $stmt->bind_param("ii", $receiverId,$senderId);
    
    if($stmt->execute()){
        echo json_encode(200);
    }
    else{
        echo json_encode(400);
    }
    
    
?>