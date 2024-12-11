<?php
    require_once 'include/db.php';
    session_start();

    $stmt = $conn->prepare("SELECT * FROM users where user_role = 'Agent'");
    $stmt->execute();
    $result = $stmt->get_result();
    
    // Fetch all rows
    $rows = $result->fetch_all(MYSQLI_ASSOC); 

    echo json_encode($rows);
?>
