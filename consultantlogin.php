<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  session_start();
  include 'include/db.php'; // Database connection file


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $userEmail = $_POST['useremail'];
        $password = $_POST['password'];

        // printf( $userEmail ."<br>");
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

            $stmt1 = $conn->prepare("SELECT id, user_name, user_profile, user_status, user_login_status, expertise, language, experience, total_order FROM users WHERE user_email = ?");
            $stmt1->bind_param("s", $userEmail);
            $stmt1->execute();
            $result1 = $stmt1->get_result();
            $row1 = $result1->fetch_assoc();

            $userName = $row1['user_name'];
            $id = $row1['id'];

            if($row1['user_status'] == 'Enable' && $row1['user_login_status'] == 'Logout'){
            
                $stmt = $conn->prepare("UPDATE users SET user_login_status = 'Login' WHERE id = ?");

                $stmt->bind_param("i", $id);
                
                $stmt->execute();

                $_SESSION['userEmail'] = $userEmail;
                $_SESSION['userName'] = $userName;
                $_SESSION['id'] = $id;
                $_SESSION['status'] = $row1['user_status'];
                $_SESSION['login_status'] = $row1['user_login_status'];
                $_SESSION['expertise'] = $row1['expertise'];
                $_SESSION['language'] = $row1['language'];
                $_SESSION['experience'] = $row1['experience'];
                $_SESSION['total_order'] = $row1['total_order'];
                
                header("Location: dashboard.php");
            }
            else{
                echo "Invalid User Status";
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Visa Experts</title>
    <link rel="stylesheet" href="admincss/adminlogin.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        /* Add the CSS code from below here */
    </style>
</head>

<body>
    <section class="hero">
        <div class="overlay"></div>
        <div class="hero-content">
            <div class="hero-text">
                <div class="logo-contaimer">
                    <img src="https://res.cloudinary.com/dtjgawrwz/image/upload/v1733821901/main-logo_jrluci.svg" alt="A Visa Experts Logo" class="logo">
                    <img src="adminimg/logobttom.svg" alt="">
                </div>
                <h1>Welcome to <br><span>A Visa Experts</span></h1>
                <p>Your Trusted Partner for a Seamless Visa Journey! We're here to simplify the process and provide
                    personalized support at every step. Let's make your dreams a reality!</p>
                <button class="login-btn">Log in</button>
            </div>
            <div class="gallery-wrapper">
                <div class="gallery gallery-bottom-to-top">
                    <!-- Bottom-to-top images -->
                    <img src="adminimg/b2t1.png" alt="visitimage1">
                    <img src="adminimg/b212.png" alt="visitimage2">
                    <img src="adminimg/b2t3.png" alt="visitimage3">
                    <img src="adminimg/b2t4.png" alt="visitimage4">
                </div>

                <div class="gallery gallery-top-to-bottom">
                    <!-- Top-to-bottom images -->
                    <img src="adminimg/t2b1.png" alt="visitimage5">
                    <img src="adminimg/t2b2.png" alt="visitimage6">
                    <img src="adminimg/t2b3.png" alt="visitimage7">
                    <img src="adminimg/t2b4.png" alt="visitimage8">
                </div>


            </div>
        </div>

        <!-- //Pop Up -->
        <div id="loginPopup" class="popup">
            <div class="popup-content">
                <span class="close-btn" onclick="closePopup()"><svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M20.6199 7.05546C20.7134 6.96204 20.7877 6.85111 20.8383 6.72901C20.889 6.60691 20.9151 6.47603 20.9152 6.34383C20.9153 6.21163 20.8893 6.08072 20.8388 5.95855C20.7883 5.83639 20.7142 5.72537 20.6208 5.63184C20.5274 5.5383 20.4164 5.46408 20.2943 5.41342C20.1722 5.36276 20.0414 5.33664 19.9092 5.33656C19.777 5.33648 19.646 5.36243 19.5239 5.41295C19.4017 5.46346 19.2907 5.53754 19.1972 5.63096L13.1264 11.7017L7.05741 5.63096C6.86851 5.44206 6.61231 5.33594 6.34516 5.33594C6.07802 5.33594 5.82181 5.44206 5.63291 5.63096C5.44401 5.81986 5.33789 6.07607 5.33789 6.34321C5.33789 6.61036 5.44401 6.86656 5.63291 7.05546L11.7037 13.1245L5.63291 19.1935C5.53938 19.287 5.46518 19.398 5.41456 19.5202C5.36394 19.6425 5.33789 19.7734 5.33789 19.9057C5.33789 20.038 5.36394 20.169 5.41456 20.2912C5.46518 20.4134 5.53938 20.5244 5.63291 20.618C5.82181 20.8069 6.07802 20.913 6.34516 20.913C6.47744 20.913 6.60842 20.8869 6.73063 20.8363C6.85284 20.7857 6.96388 20.7115 7.05741 20.618L13.1264 14.5472L19.1972 20.618C19.3861 20.8066 19.6422 20.9125 19.9092 20.9124C20.1761 20.9122 20.4321 20.806 20.6208 20.6171C20.8095 20.4282 20.9154 20.1721 20.9152 19.9051C20.915 19.6381 20.8088 19.3821 20.6199 19.1935L14.5492 13.1245L20.6199 7.05546Z" fill="white"/>
                  </svg></span>
                <h2>Login</h2>
                <form action="" method="POST">
                    <!-- <label for="userid">User Id</label> -->
                   <div class="hideusername">
                    <input type="text" id="userid" name="useremail" placeholder="User Email">
                 
                   </div>

                    <!-- <label for="password">Password</label> -->
                   <div class="hidepassword" >
                    <input type="password" id="password" name="password" placeholder="Password">
                    <span class="show-hide-icon " id="togglePassword">Show</span>

                   </div>
                    <!-- <a href="#" class="forgot-password">Forget Password?</a> -->
                    <button type="submit" class="continue-btn">Continue</button>
                </form>
                <!-- <p>Don’t have an account? <a href="#">Sign up</a></p> -->
            </div>
        </div>
    </section>
</body>
<script>
    // script.js

    // Select the custom cursor elements
   
    function startInfiniteScroll(selector, direction = 'bottom-to-top') {
        const gallery = document.querySelector(selector);
        const images = Array.from(gallery.children);

        // Duplicate images for continuous scroll effect
        images.forEach(image => {
            const clone = image.cloneNode(true);
            gallery.appendChild(clone);
        });

        let scrollPosition = 0;
        const scrollSpeed = 1; // Control the speed of scroll (higher = faster)

        function scroll() {
            if (direction === 'bottom-to-top') {
                scrollPosition += scrollSpeed;
                if (scrollPosition >= gallery.scrollHeight / 2) {
                    scrollPosition = 0;
                }
                gallery.scrollTop = scrollPosition;
            } else if (direction === 'top-to-bottom') {
                scrollPosition -= scrollSpeed;
                if (scrollPosition <= 0) {
                    scrollPosition = gallery.scrollHeight / 2;
                }
                gallery.scrollTop = scrollPosition;
            }

            requestAnimationFrame(scroll);
        }

        scroll();
    }

    // Start the scrolling for both galleries
    startInfiniteScroll('.gallery-bottom-to-top', 'bottom-to-top');
    startInfiniteScroll('.gallery-top-to-bottom', 'top-to-bottom');
    document.querySelectorAll('.gallery').forEach(gallery => {
        gallery.addEventListener('mouseenter', () => {
            scrollSpeed = 0;
        });
        gallery.addEventListener('mouseleave', () => {
            scrollSpeed = 1; // Reset the speed or adjust as needed
        });
    });


    // Pop Up Js
    // script.js

    // Open the popup
    document.querySelector('.login-btn').addEventListener('click', function () {
        document.getElementById('loginPopup').style.display = 'flex';
    });

    // Close the popup
    function closePopup() {
        document.getElementById('loginPopup').style.display = 'none';
    }

    // Close popup when clicking outside of it
    window.onclick = function (event) {
        let popup = document.getElementById('loginPopup');
        if (event.target === popup) {
            popup.style.display = 'none';
        }
    };

    const togglePassword = document.getElementById('togglePassword');
  const password = document.getElementById('password');

  togglePassword.addEventListener('click', function () {
    // Toggle the type of the password input
    const type = password.type === 'password' ? 'text' : 'password';
    password.type = type;

    // Change the icon text based on the visibility of the password
    this.textContent = type === 'password' ? 'Show' : 'Hide'; // 👁️ for hidden, 🙈 for visible
  });


</script>

</html>