<?php
require_once 'include/db.php';

// $senderId = $_POST['sender_id'];
// $receiverId = $_POST['receiver_id'];
// $message = $_POST['message'];

// // printf($senderId."<br>");
// // printf($senderId."<br>");
// // printf($senderId."<br>");

// // exit();
// if ($senderId && $receiverId && $message) {
//     $stmt = $conn->prepare("INSERT INTO messages (sender_id, receiver_id, message) VALUES (?, ?, ?)");
//     $stmt->execute([$senderId, $receiverId, $message]);

//     echo json_encode(['success' => true, 'message' => 'Message sent']);
// } else {
//     echo json_encode(['success' => false, 'message' => 'Invalid input']);
// }




if (isset($_POST['sender_id'], $_POST['receiver_id'], $_POST['message'])) {
    $senderId = $_POST['sender_id'];
    $receiverId = $_POST['receiver_id'];
    $message = $_POST['message'];

    error_log("Sender ID: $senderId, Receiver ID: $receiverId, Message: $message");

    // Prepare and execute the query
    $stmt = $conn->prepare("INSERT INTO messages (sender_id, receiver_id, message) VALUES (?, ?, ?)");
    if ($stmt) {
        $stmt->bind_param("iis", $senderId, $receiverId, $message); // Bind parameters (i = integer, s = string)
        if ($stmt->execute()) {
            echo json_encode(['success' => true, 'message' => 'Message sent']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Failed to send message']);
        }
        $stmt->close();
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to prepare statement']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid input']);
}

?>

