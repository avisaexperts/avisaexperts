<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  session_start();
  include 'include/db.php'; // Database connection file


  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userEmail = $_POST['email'];
    $password = $_POST['password'];

    // printf( $username ."<br>");
    // printf( $password ."<br>");

     // Check if the username exists
     $stmt = $conn->prepare("SELECT user_password FROM users WHERE user_email = ?");
     $stmt->bind_param("s", $userEmail);
     $stmt->execute();
     $result = $stmt->get_result();

    if ($result->num_rows > 0) {
      // Fetch the hashed password from the database
      $row = $result->fetch_assoc();
      $dbPassword = $row['user_password'];

      // Verify the entered password against the hashed password
      if ($dbPassword === $password) {
          // Login successful

          $stmt1 = $conn->prepare("SELECT id, user_name, user_profile, user_status, user_login_status FROM users WHERE user_email = ?");
          $stmt1->bind_param("s", $userEmail);
          $stmt1->execute();
          $result1 = $stmt1->get_result();
          $row1 = $result1->fetch_assoc();
          $id = $row1['id'];

          if($row1['user_status'] == 'Enable' && $row1['user_login_status'] == 'Logout'){
            
            $stmt = $conn->prepare("UPDATE users SET user_login_status = 'Login' WHERE id = ?");

            $stmt->bind_param("i", $id);
            
            $stmt->execute();
            
            $userName = $row1['user_name'];

            $_SESSION['userEmail'] = $userEmail;
            $_SESSION['userName'] = $userName;
            $_SESSION['id'] = $id;

            header("Location: consultant.php");
          }
          else{
            echo "Invalid User Status.";
          }
          
          
      } else {
          // Incorrect password
          echo "Incorrect password";
      }
    } else {
        // Username not found
        echo 'User not Found';
    }

  }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Create Your Account</title>
    <link rel="stylesheet" href="css/login.css" />
  </head>
  <body>
    <div class="form-container">
      <h1>Create your Account</h1>
      <p>Welcome back! Please enter your details</p>
      <form id="accountForm" method="POST" action="">
        <label for="name">Name</label>
        <input
          type="text"
          id="name"
          name="name"
          placeholder="Enter your name"/>

        <label for="email">Email</label>
        <input
          type="email"
          id="email"
          name="email"
          placeholder="Enter your email"
          required/>

        <label for="pass">Password</label>
        <input
          type="password"
          id="password"
          name="password"
          placeholder="Enter your Password"
          required/>
        <!-- for furture updation -->
        <!-- <label for="phone">Phone Number</label>
        <div class="phone-detail"> -->
          <!-- <label for="phone">Phone Number</label> -->
          <!-- <div class="country-code">
            <input type="tel" id="phone" name="phone" placeholder="" required />
          </div>
          <div class="number-place">
            <input
              type="tel"
              id="phone"
              name="phone"
              placeholder="Enter your phone number"
              required
            />
          </div>
          <button type="button" id="getOtp">Get OTP</button>
        </div> -->
        <!-- <button type="button" id="getOtp">Get OTP</button> -->

        <label for="otp">Enter OTP manually</label>
        <div class="otp-main">
          <input
            type="text"
            id="otp"
            name="otp"
            placeholder="Enter OTP manually"/>
          <button type="button" id="verifyOtp">Verify</button>
        </div>
        <div class="resend">
          <p>Didn't receive OTP ?</p>
          <a href="#">Click to resend</a>
        </div>
        <button type="submit">Login</button>
      </form>
    </div>
    <script src="js/script.js"></script>
  </body>
</html>
