<?php require 'header.php'; ?>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/conslutant.css">
    <link rel="stylesheet" href="css/wallet.css">
    <link rel="stylesheet" href="modelpopup/model.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
          <div id="navbar">
            <div id="main-nav">
                <div id="search-container">
                    <input type="text" placeholder="Search consultant by name" />
                    <button id="search-button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path
                                d="M11 16.5C14.0376 16.5 16.5 14.0376 16.5 11C16.5 7.96243 14.0376 5.5 11 5.5C7.96243 5.5 5.5 7.96243 5.5 11C5.5 14.0376 7.96243 16.5 11 16.5Z"
                                stroke="black" />
                            <path d="M15 15L19 19" stroke="black" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
                <div id="balance">
                    <img src="https://res.cloudinary.com/dtjgawrwz/image/upload/v1733821925/noto_coin_yylejl.jpg" alt="" />
                    <span>$41</span>
                </div>
                <div id="profile">
                    <img src="https://res.cloudinary.com/dtjgawrwz/image/upload/v1733821901/blogimg1_lxepf1.jpg" alt="Profile Picture" />
                </div>
            </div>
        </div>
        <div class="profile-card">
            <!-- Profile Image -->
            <div class="profile-image">
                <img src="https://res.cloudinary.com/dtjgawrwz/image/upload/v1733821901/blogimg1_lxepf1.jpg" alt="User Image">
            </div>
            <!-- Profile Name -->
            <div class="profile-name">Urvasikha Singh</div>
            <!-- Profile Phone -->
            <div class="profile-phone">+91 9709250403</div>
            <!-- View Profile Button -->
            <button class="profile-btn">View Profile</button>
            <div id="htmlModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span> <!-- Cross button -->
                <p>Are you sure you want to log out?</p>
                <div class="popupbtns">
                    <button class="cancelbtn"><a>Cancel</a></button>
                    <button class="rechargebtn"><a href="logout.php">Yes, Logout</a></button>
                </div>
            </div>
        </div>
            <!-- Info Section -->
            <div class="info-section-consultant">
            <a href="notification.php">
                <div>Notification</div>
            </a>
            <a href="awailablebalance.php">
                <div class="balance">
                    <div>Available Balance</div>
                    <div>₹ 125</div>
                </div>
            </a>
            <a href="wallet.php">
                <div>Wallet Transactions</div>
            </a>
            <a class="modellogin">
                <div>Logout</div>
            </a>
        </div>
   
          </div>
    <div class="outer-wallet-section">
        <table class="transaction-table">
            <caption>Wallet Transaction</caption>
            <thead>
                <tr>
                    <th>Amounts</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Transaction ID</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody class="t-body">
                <tr>
                    <td>₹ 200</td>
                    <td>Oct 24, 2024</td>
                    <td>07:45 PM</td>
                    <td>123456789ABCDEF</td>
                    <td class="status-pending red-clr">Pending</td>
                </tr>
                <tr>
                    <td>₹ 100</td>
                    <td>Oct 24, 2024</td>
                    <td>07:45 PM</td>
                    <td>123456789ABCDEF</td>
                    <td class="status-pending red-clr">Pending</td>
                </tr>
                <tr>
                    <td>₹ 200</td>
                    <td>Oct 24, 2024</td>
                    <td>07:45 PM</td>
                    <td>123456789ABCDEF</td>
                    <td class="status-pending red-clr">Pending</td>
                </tr>
                <tr>
                    <td>₹ 100</td>
                    <td>Oct 24, 2024</td>
                    <td>07:45 PM</td>
                    <td>123456789ABCDEF</td>
                    <td class="status-pending red-clr">Pending</td>
                </tr>
                <tr>
                    <td>₹ 200</td>
                    <td>Oct 24, 2024</td>
                    <td>07:45 PM</td>
                    <td>123456789ABCDEF</td>
                    <td class="status-pending red-clr">Pending</td>
                </tr>
                <tr>
                    <td>₹ 100</td>
                    <td>Oct 24, 2024</td>
                    <td>07:45 PM</td>
                    <td>123456789ABCDEF</td>
                    <td class="status-pending red-clr">Pending</td>
                </tr>
                <tr>
                    <td>₹ 200</td>
                    <td>Oct 24, 2024</td>
                    <td>07:45 PM</td>
                    <td>123456789ABCDEF</td>
                    <td class="status-pending red-clr">Pending</td>
                </tr>
                <tr>
                    <td>₹ 100</td>
                    <td>Oct 24, 2024</td>
                    <td>07:45 PM</td>
                    <td>123456789ABCDEF</td>
                    <td class="status-pending red-clr">Pending</td>
                </tr>
                <tr>
                    <td>₹ 150</td>
                    <td>Oct 10, 2024</td>
                    <td>07:45 PM</td>
                    <td>123456789ABCDEF</td>
                    <td class="status-pending red-clr">Pending</td>
                </tr>
                <tr>
                    <td>₹ 100</td>
                    <td>Oct 05, 2024</td>
                    <td>07:45 PM</td>
                    <td>123456789ABCDEF</td>
                    <td class="status-done green-clr">Done</td>
                </tr>
                <tr>
                    <td>₹ 200</td>
                    <td>Oct 01, 2024</td>
                    <td>07:45 PM</td>
                    <td>123456789ABCDEF</td>
                    <td class="status-pending red-clr">Pending</td>
                </tr>
                <tr>
                    <td>₹ 100</td>
                    <td>Nov 29, 2024</td>
                    <td>07:45 PM</td>
                    <td>123456789ABCDEF</td>
                    <td class="status-done green-clr">Done</td>
                </tr>
                <tr>
                    <td>₹ 100</td>
                    <td>Nov 20, 2024</td>
                    <td>07:45 PM</td>
                    <td>123456789ABCDEF</td>
                    <td class="status-pending red-clr">Pending</td>
                </tr>
                <tr>
                    <td>₹ 25</td>
                    <td>Nov 12, 2024</td>
                    <td>10:46 PM</td>
                    <td>123456789ABCDEF</td>
                    <td class="status-done green-clr">Done</td>
                </tr>
                <tr>
                    <td>₹ 50</td>
                    <td>Nov 02, 2024</td>
                    <td>10:46 PM</td>
                    <td>123456789ABCDEF</td>
                    <td class="status-done green-clr">Done</td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php require 'footer.php'; ?>
    <script src="js/model.js"></script>