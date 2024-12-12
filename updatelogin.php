<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Open Sans" !important;
        }

        .container {
            width: 100%;
            height: 100vh;
            position: relative;
            background: url('https://res.cloudinary.com/dtjgawrwz/image/upload/v1734004670/allvisaimages/sjbckyzuzpavcar3amkz.png') rgb(0, 0, 0) 50% / cover no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            overflow: hidden;
        }

        .container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            /* Black overlay with 50% opacity */
            z-index: 0;
            /* Ensure it's behind other content */
        }

        .background-section {
            z-index: 1;
            /* position: absolute; */
            background: url('https://res.cloudinary.com/dtjgawrwz/image/upload/v1734004670/allvisaimages/sjbckyzuzpavcar3amkz.png') no-repeat center center/cover;
            width: 45%;
            height: 100%;
            top: 0;
            left: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .background-section {
            background: url('https://res.cloudinary.com/dtjgawrwz/image/upload/v1734004670/allvisaimages/sjbckyzuzpavcar3amkz.png') no-repeat center center/cover;
            width: 45%;
            height: 100%;
            top: 0;
            left: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 10px;
            /* Subtle shadow effect */
        }

        .form-container {
            width: 540px;
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(138, 142, 148, 0.1);
            z-index: 1;
        }

        .form-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-header .title {
            font-size: 24px;
            color: #282828;
            margin-bottom: 5px;
        }

        .form-header .subtitle {
            font-size: 14px;
            color: #949CA9;
        }

        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        .form-group label {
            display: block;
            font-size: 16px;
            font-weight: 600;
            color: #282828;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            font-size: 14px;
            color: black;
            border: 1px solid #E8E9EA;
            border-radius: 6px;
            outline: none;
        }

        .form-group input.error {
            border: 1px solid red;
        }

        .error-message {
            color: red;
            font-size: 12px;
            position: absolute;
            top: 0px;
            right: 0px;
            font-weight: bold;
        }

        .otp-container {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .otp-input {
            flex: 1;
            padding: 12px;
            border: 1px solid #E8E9EA;
            border-radius: 6px;
        }

        .verify-button {
            padding: 10px 20px;
            background: #001E74;
            color: white;
            border-radius: 6px;
            text-align: center;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
        }

        .resend-container {
            display: flex;
            gap: 10px;
            font-size: 12px;
            color: #9D9D9D;
            margin-bottom: 20px;
        }

        .resend-container .resend {
            color: #F58634;
            font-weight: 700;
            cursor: pointer;
        }

        .login-button {
            width: 100%;
            padding: 12px;
            background: #001E74;
            color: white;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 600;
            text-align: center;
            cursor: pointer;
        }

        .verification-success {
            color: green;
            font-size: 14px;
            font-weight: 600;
            margin-top: 10px;
        }

        @media (min-width: 768px) {
            .form-container {
                position: relative;
                right: 130px;
            }

            .container {
                padding: 20px 20px 20px 200px;
            }
        }

        @media (max-width: 768px) {
            .form-container {
                width: 90%;
            }

            .background-section {
                display: none;
            }

            .container {
                justify-content: center;
            }
        }

        @media (max-width:600px) {
            .container {
                padding: 0px;
            }

            .form-group label {
                font-size: 12px;
            }

            .error-message {
                font-size: 10px;
            }

            .verification-success {
                font-size: 10px;
            }
        }

        /* Add animation for form container */
        /* @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .form-container {
            animation: fadeIn 1s ease-in-out;
        }

/* Define animations for left and right sliding */
        @keyframes slideInLeft {
            from {
                transform: translateX(-100%);
                opacity: 0;
            }

            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes slideInRight {
            from {
                transform: translateX(100%);
                opacity: 0;
            }

            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        /* Apply animation to the sections */
        .background-section {
            animation: slideInLeft 1s ease-in-out;
        }

        .form-container {
            animation: slideInRight 1s ease-in-out;
        }

        /* Smooth transitions for hover and focus effects */
        .form-group input:focus {
            border-color: #001E74;
            box-shadow: 0 0 5px rgba(0, 30, 116, 0.5);
            transition: all 0.5s ease;
        }

        .verify-button:hover {
            background: #2545a1;
            transform: scale(1.05);
            transition: all 0.4s ease;
        }

        .login-button:hover {
            background: #2545a1;
            transition: all 0.4s ease;
        }

        @media (max-width: 768px) {
            .background-section {
                animation: none;
                /* Disable animation for hidden background */
            }

            .form-container {
                animation: fadeIn 1.2s ease-in-out;
                /* Use fade-in for smaller screens */
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="background-section">
            <div class="bg-img-lg"></div>
        </div>
        <div class="form-container">
            <div class="form-header">
                <div class="title">Log in</div>
                <div class="subtitle">Enter your details</div>
            </div>
            <form id="signup-form">
                <!-- <div class="form-group">
                    <label for="name">Your name</label>
                    <input type="text" id="name" placeholder="Enter your name">
                    <span class="error-message" id="name-error"></span>
                </div> -->
                <div class="form-group">
                    <label for="phone">Phone number</label>
                    <input type="number" id="phone" maxlength="10" placeholder="Enter your phone number">
                    <span class="error-message" id="phone-error"></span>
                </div>
                <div class="form-group">
                    <label for="otp">Enter OTP manually</label>
                    <div class="otp-container">
                        <input type="number" id="otp" maxlength="6" class="otp-input" placeholder="Enter OTP">
                        <div class="verify-button" onclick="verifyOTP()">Verify</div>
                    </div>
                    <span class="error-message" id="otp-error"></span>
                    <div class="verification-success" id="verification-msg" style="display: none;">Verification Done
                    </div>
                </div>
                <div class="resend-container">
                    <p>Didn’t receive OTP?</p> <span class="resend">Click to resend</span>
                </div>
                <div class="login-button" onclick="validateForm()">Login</div>
            </form>
        </div>
    </div>

    <script>
        // Function to validate form fields
        function validateForm() {
            const nameInput = document.getElementById("name");
            const phoneInput = document.getElementById("phone");
            const otpInput = document.getElementById("otp");

            const nameError = document.getElementById("name-error");
            const phoneError = document.getElementById("phone-error");
            const otpError = document.getElementById("otp-error");

            let isValid = true;

            // Name validation
            // if (!nameInput.value.trim()) {
            //     nameError.textContent = "Name is required";
            //     nameInput.classList.add("error");
            //     isValid = false;
            // } else {
            //     nameError.textContent = "";
            //     nameInput.classList.remove("error");
            // }

            // Phone validation
            if (!phoneInput.value.trim()) {
                phoneError.textContent = "Phone number is required";
                phoneInput.classList.add("error");
                otpError.textContent = ""; // Clear OTP error if phone is not filled
                otpInput.classList.remove("error");
                isValid = false;
            } else {
                phoneError.textContent = "";
                phoneInput.classList.remove("error");

                // OTP validation
                if (!otpInput.value.trim()) {
                    otpError.textContent = "OTP is required";
                    otpInput.classList.add("error");
                    isValid = false;
                } else {
                    otpError.textContent = "";
                    otpInput.classList.remove("error");
                }
            }

            return isValid;
        }

        // Function to hide error messages while typing in phone or OTP fields
  
        document.getElementById('phone').addEventListener('input', function () {
            document.getElementById('phone-error').textContent = '';
            this.classList.remove('error');
        });

        document.getElementById('otp').addEventListener('input', function () {
            document.getElementById('otp-error').textContent = '';
            this.classList.remove('error');
        });

        // Function to handle OTP verification and show success message
        // Function to handle OTP verification and show success message
        function verifyOTP() {
            const otpInput = document.getElementById('otp');
            const phoneInput = document.getElementById('phone');
            const verificationMsg = document.getElementById('verification-msg');
            document.getElementById('otp').addEventListener('input', function () {
                verificationMsg.style.display = "none";

            });
            if (!phoneInput.value.trim()) {
                verificationMsg.style.display = "block";
                verificationMsg.style.color = "red";
                verificationMsg.innerText = "Please enter your phone number first";
                return; // Exit the function if phone number is not entered
            }

            if (!otpInput.value.trim()) {
                verificationMsg.style.display = "block";
                verificationMsg.style.color = "red";
                verificationMsg.innerText = "Please enter OTP";
            } else {
                verificationMsg.style.display = "block";
                verificationMsg.style.color = "green";
                verificationMsg.innerText = "Verification Successful!";
            }
        }
        // Add staggered animations for form elements
        window.onload = function () {
            const bgSection = document.querySelector(".background-section");
            const formContainer = document.querySelector(".form-container");

            bgSection.style.animationDelay = "0s";
            formContainer.style.animationDelay = "0s"; // Delayed by 0.5s
        };

    </script>
</body>

</html>