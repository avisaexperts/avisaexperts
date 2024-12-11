<?php   
    include 'include/db.php';
    session_start(); //to ensure you are using same session

    if(isset($_SESSION['id'])){

        $id = $_SESSION['id'];
        $stmt = $conn->prepare("UPDATE users SET user_login_status = 'Logout' WHERE id = ?");

        $stmt->bind_param("i", $id);
        
        $stmt->execute();
        
        
        session_destroy(); //destroy the session
        header("Location: consultantlogin.php"); //to redirect back to "index.php" after logging out
        exit();
        
    }
    else{
        echo "Invalid User Status.";
    }
?>