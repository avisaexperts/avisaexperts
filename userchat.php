<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    session_start();

    if (!isset($_SESSION['id'])) // If the user is unauthenticated / logged out, redirect them to the login page
    {
        header('location:login.php');
    }
    include 'include/db.php'; // Database connection file

    $agentId = $_GET['aid'];

    // printf( $_SESSION['id'] ."<br>");
    // printf( $_SESSION['userName'] ."<br>");
    // printf( $agentId ."<br>");

    
        // Check if the username exists
        $stmt = $conn->prepare("SELECT user_name FROM users WHERE id = ?");
        $stmt->bind_param("i", $agentId);
        $stmt->execute();
        $result = $stmt->get_result();
        
        // Fetch all rows
        $rows = $result->fetch_all(MYSQLI_ASSOC); // Fetches all rows as an associative array
        // print_r($rows); // Print all rows

        foreach ($rows as $key => $value) {
            
        }

?>


<?php require 'header.php'; ?>


<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/userchat.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
       .messages {
            /* height: 300px; */
            overflow-y: auto;
            /* border: 1px solid #ccc; */
            padding: 10px;
            margin-bottom: 10px;
            display: flex;
            flex-direction: column;
        }

        .message {
            padding: 10px;
            margin: 5px 0;
            border-radius: 8px;
            max-width: 70%;
            display: inline-block;
            clear: both;
        }

        /* Sender's message (left-aligned) */
        .sender-message {
            background-color: #e0f7fa;
            align-self: flex-end !important;
            text-align: right !important;
            border-top-left-radius: 0;
        }
        .sender-message p{
            overflow-x: scroll;
        }
        .sender-message p::-webkit-scrollbar{
            display: none;
        }

        /* Receiver's message (right-aligned) */
        .receiver-message {
            background-color: #ffecb3;
            align-self: flex-start !important;
            text-align: left !important;
            border-top-right-radius: 0;
        }
        .receiver-message p{
            overflow-x: scroll;
        }
        .receiver-message p::-webkit-scrollbar{
            display: none;
        }
    </style>
    <div class="outer-chat-bx">
        <div class="chat-container">
            <div class="header-next-chat">
                <img src="https://res.cloudinary.com/dtjgawrwz/image/upload/v1733821943/constimg_djeflf.jpg" alt="Profile" class="profile-pic">
                <div class="header-info">
                    <h3> <?= $value['user_name'];?></h3>
                    <span id="timer">00:00:00</span>
                </div>
                <a href="consultant.php" class="status" style="color:red;">End Chat</a>
            </div>
            <div class="chat-messages messages" id="messages">
                <!-- <div class="message left">
                    <img src="https://res.cloudinary.com/dtjgawrwz/image/upload/v1733821905/userprofile_cpqhoo.png" alt="Profile" class="message-pic">
                    <div class="message-text">Hi! I have some questions about my Visa application status.</div>
                </div>
                <div class="message right">
                    <div class="message-text">Yes, it’s Visa845656</div>
                </div>
                <div class="message left">
                    <img src="https://res.cloudinary.com/dtjgawrwz/image/upload/v1733821905/userprofile_cpqhoo.png" alt="Profile" class="message-pic">
                    <div class="message-text">Hi! I have some questions about my Visa application status.</div>
                </div>
                <div class="message right">
                    <div class="message-text">Yes, it’s Visa845656</div>
                </div>
                <div class="message left">
                    <img src="https://res.cloudinary.com/dtjgawrwz/image/upload/v1733821905/userprofile_cpqhoo.png" alt="Profile" class="message-pic">
                    <div class="message-text">Hi! I have some questions about my Visa application status.</div>
                </div>
                <div class="message right">
                    <div class="message-text">Yes, it’s Visa845656</div>
                </div> -->
                

            </div>
            <div class="message-input">

                <div class="message-input" style="width: 100%; gap: 4px;">
                    <div class="messages"></div>
                    <input type="text" id="sender_id" value="<?= $_SESSION['id'];?>" style="width: 48%; margin-bottom: 5px; display:none;" />
                    <input type="text" id="receiver_id" value="<?= $agentId;?>" style="width: 48%; margin-bottom: 5px; display:none;" />
                    <textarea id="message" placeholder="Type your message here..." rows="3" style="width: 100%"></textarea>
                    <!-- <input type="text" id="message" placeholder="Write your messages..." /> -->
                    <button class="send-button"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" onclick="sendMessage()" style="margin-top: 8px;">
                            <path
                                d="M20.0396 2.32246C21.0556 1.96746 22.0316 2.94346 21.6766 3.95946L15.7516 20.8895C15.3666 21.9875 13.8366 22.0495 13.3646 20.9865L10.5056 14.5545L14.5296 10.5295C14.6621 10.3873 14.7342 10.1992 14.7308 10.0049C14.7274 9.81064 14.6486 9.62526 14.5112 9.48784C14.3738 9.35043 14.1884 9.27172 13.9941 9.26829C13.7998 9.26486 13.6118 9.33698 13.4696 9.46946L9.44461 13.4935L3.01261 10.6345C1.94961 10.1615 2.01261 8.63246 3.10961 8.24746L20.0396 2.32246Z"
                                fill="white" />
                        </svg></button>
                </div>
                <!-- <input type="text" placeholder="Write your messages..">
                <div class="svg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M12 2C17.523 2 22 6.477 22 12C22 17.523 17.523 22 12 22C6.477 22 2 17.523 2 12C2 6.477 6.477 2 12 2ZM12 4C9.87827 4 7.84344 4.84285 6.34315 6.34315C4.84285 7.84344 4 9.87827 4 12C4 14.1217 4.84285 16.1566 6.34315 17.6569C7.84344 19.1571 9.87827 20 12 20C14.1217 20 16.1566 19.1571 17.6569 17.6569C19.1571 16.1566 20 14.1217 20 12C20 9.87827 19.1571 7.84344 17.6569 6.34315C16.1566 4.84285 14.1217 4 12 4ZM14.8 13.857C14.8933 13.7629 15.0044 13.6882 15.1268 13.6374C15.2492 13.5866 15.3804 13.5606 15.513 13.561C15.6455 13.5614 15.7766 13.5881 15.8987 13.6396C16.0208 13.6911 16.1315 13.7663 16.2243 13.8609C16.317 13.9556 16.3901 14.0677 16.4391 14.1908C16.4882 14.3139 16.5123 14.4455 16.5101 14.578C16.5078 14.7105 16.4792 14.8413 16.426 14.9626C16.3728 15.084 16.2959 15.1936 16.2 15.285C15.0796 16.3861 13.5709 17.0022 12 17C10.4291 17.0022 8.92039 16.3861 7.8 15.285C7.61503 15.0984 7.51093 14.8465 7.5102 14.5838C7.50948 14.321 7.61219 14.0685 7.79613 13.8809C7.98006 13.6933 8.23045 13.5856 8.49316 13.5811C8.75586 13.5767 9.00977 13.6758 9.2 13.857C9.94658 14.5916 10.9526 15.0023 12 15C13.09 15 14.077 14.565 14.8 13.857ZM8.5 8C8.89782 8 9.27936 8.15804 9.56066 8.43934C9.84196 8.72064 10 9.10218 10 9.5C10 9.89782 9.84196 10.2794 9.56066 10.5607C9.27936 10.842 8.89782 11 8.5 11C8.10218 11 7.72064 10.842 7.43934 10.5607C7.15804 10.2794 7 9.89782 7 9.5C7 9.10218 7.15804 8.72064 7.43934 8.43934C7.72064 8.15804 8.10218 8 8.5 8ZM15.5 8C15.8978 8 16.2794 8.15804 16.5607 8.43934C16.842 8.72064 17 9.10218 17 9.5C17 9.89782 16.842 10.2794 16.5607 10.5607C16.2794 10.842 15.8978 11 15.5 11C15.1022 11 14.7206 10.842 14.4393 10.5607C14.158 10.2794 14 9.89782 14 9.5C14 9.10218 14.158 8.72064 14.4393 8.43934C14.7206 8.15804 15.1022 8 15.5 8Z" fill="black" fill-opacity="0.4"/>
                      </svg>
                </div>
                <button><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M20.0396 2.32295C21.0556 1.96795 22.0316 2.94395 21.6766 3.95995L15.7516 20.89C15.3666 21.988 13.8366 22.05 13.3646 20.987L10.5056 14.555L14.5296 10.53C14.6621 10.3878 14.7342 10.1997 14.7308 10.0054C14.7274 9.81113 14.6486 9.62574 14.5112 9.48833C14.3738 9.35092 14.1884 9.27221 13.9941 9.26878C13.7998 9.26535 13.6118 9.33747 13.4696 9.46995L9.44461 13.494L3.01261 10.635C1.94961 10.162 2.01261 8.63295 3.10961 8.24795L20.0396 2.32295Z" fill="white"/>
                  </svg></button> -->
            </div>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>

    <script>
        // Fetch messages from the server between the sender and receiver
        function fetchMessages() {
            const senderId = document.getElementById("sender_id").value;
            const receiverId = document.getElementById("receiver_id").value;

            if (senderId && receiverId) {
                fetch(
                        `getMessages.php?sender_id=${senderId}&receiver_id=${receiverId}`
                    )
                    .then((response) => response.json())
                    .then((data) => {
                        const messagesContainer = document.getElementById("messages");
                        messagesContainer.innerHTML = ""; // Clear current messages

                        // Display each message
                        data.forEach((message) => {
                            const messageElement = document.createElement("div");
                            messageElement.classList.add("message");

                            // Check if the message is from the sender or receiver and apply classes
                            if (message.sender_id != senderId) {
                                messageElement.classList.add("receiver-message");
                                messageElement.innerHTML =
                                    `<p class="receiver"></p><p>${message.message}</p>`;

                            } else {
                                messageElement.classList.add("sender-message");
                                messageElement.innerHTML =
                                `<p class="sender">You:</p><p>${message.message}</p>`;   
                            }

                            messagesContainer.appendChild(messageElement);
                        });

                        // Scroll to the bottom of the messages container
                        messagesContainer.scrollTop = messagesContainer.scrollHeight;
                    });
            }
        }

        // Send a new message to the server
        function sendMessage() {
            const senderId = Number(document.getElementById("sender_id").value);
            const receiverId = Number(document.getElementById("receiver_id").value);
            const message = document.getElementById("message").value;

            console.log("sender- "+senderId);
            console.log("receiver "+receiverId);
            // console.log(message);



            if (senderId && receiverId && message) {
                fetch("sendMessage.php", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/x-www-form-urlencoded",
                        },
                        body: `sender_id=${encodeURIComponent(
                senderId
                )}&receiver_id=${encodeURIComponent(
                receiverId
                )}&message=${encodeURIComponent(message)}`,
                    })
                    .then((response) => response.json())
                    .then((data) => {
                        if (data.success) {
                            document.getElementById("message").value = ""; // Clear input
                            fetchMessages(); // Refresh messages
                        } else {
                            alert("Message failed to send.");
                        }
                    });
            } else {
                alert("Please enter both sender ID, receiver ID, and a message.");
            }
        }

        // Polling to refresh messages every 3 seconds
        setInterval(fetchMessages, 3000);
        fetchMessages(); // Initial load
    </script>
        <script>
        document.addEventListener("DOMContentLoaded", () => {
  const inputField = document.getElementById("message");

  // Listen for the Enter key on the input field
  inputField.addEventListener("keydown", (event) => {
    if (event.key === "Enter") {
      sendMessage();
    }
  });
});
    </script>
<?php require 'footer.php'; ?>
<script src="js/script.js"></script>
<script>
    let seconds = 0;
    let minutes = 0;
    let hours = 0;

    // Start the timer
    let timerInterval = setInterval(function() {
        seconds++;

        if (seconds == 60) {
            seconds = 0;
            minutes++;
        }

        if (minutes == 60) {
            minutes = 0;
            hours++;
        }

        // Format time to always show 2 digits
        let formattedTime = `${String(hours).padStart(2, '0')}:${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;
        document.getElementById('timer').textContent = formattedTime;
    }, 1000); // Update every 1 second
</script>