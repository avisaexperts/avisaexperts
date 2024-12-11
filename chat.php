<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  session_start();
  include 'include/db.php'; // Database connection file

    $agentId = $_GET['aid'];
    $userId = $_SESSION['id'];
    // printf( $_SESSION['id'] ."<br>");


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Two-Way Chat</title>
    <style>
    /* Basic styling for the chat UI */
    body {
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        margin-top: 50px;
    }

    .chat-container {
        width: 400px;
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 8px;
    }

    .messages {
        height: 300px;
        overflow-y: auto;
        border: 1px solid #ccc;
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
        align-self: flex-start;
        border-top-left-radius: 0;
    }

    /* Receiver's message (right-aligned) */
    .receiver-message {
        background-color: #ffecb3;
        align-self: flex-end;
        text-align: right;
        border-top-right-radius: 0;
    }
    </style>
</head>

<body>
    <div class="chat-container">
        <div class="messages" id="messages"></div>
        <input type="text" id="sender_id" value="<?= $userId;?>" style="width: 48%; margin-bottom: 5px; display:none;" />
        <input type="text" id="receiver_id" value="<?= $agentId;?>" style="width: 48%; margin-bottom: 5px; display:none;" />
        <textarea id="message" placeholder="Type your message here..." rows="3" style="width: 100%"></textarea>
        <button onclick="sendMessage()">Send</button>
    </div>

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
                        if (message.sender_id == senderId) {
                            messageElement.classList.add("sender-message");
                            messageElement.innerHTML =
                            `<p class="sender">You:</p><p>${message.message}</p>`;
                        } else {
                            messageElement.classList.add("receiver-message");
                            messageElement.innerHTML =
                                `<p class="receiver">User ${message.sender_id}:</p><p>${message.message}</p>`;
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

        // console.log("sender-"+senderId);
        // console.log("receiver "+receiverId);
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
</body>

</html>