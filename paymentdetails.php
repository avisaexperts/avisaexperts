<?php require 'header.php'; ?>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/consultant.css">
<link rel="stylesheet" href="css/payment.css">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

<div class="margin-topp">
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

        <!-- Info Section -->
        <div class="info-section">
            <div><a href="notification.php">Notification</a></div>
            <div class="balance">
                <div><a href="awailablebalance.php">Available Balance</a></div>
                <span>₹ 125</span>
            </div>
            <div><a href="wallet.php">Wallet Transactions</a></div>
            <div><a href="#">Logout</a></div>
        </div>

    </div>
    <div class="payment-details-container">
        <div class="payment-header">Payment Details</div>

        <!-- Payment details table -->
        <table class="payment-summary-table">
            <tr class="payment-summary-row">
                <th>Recharge Amount</th>
                <td>₹ 25.0</td>
            </tr>
            <tr class="payment-summary-row">
                <th>GST@18%</th>
                <td>₹ 4.5</td>
            </tr>
            <tr class="payment-summary-row">
                <th>Sub Total</th>
                <td>₹ 29.5</td>
            </tr>
        </table>

        <!-- Payment method buttons -->
        <div class="payment-options">
            <div class="payment-option-button payment-option-upi">
                <img src="https://res.cloudinary.com/dtjgawrwz/image/upload/v1733821933/upipay_a4ygr9.png" alt="UPI">
                <div class="payment-option-label">Pay By UPI</div>
            </div>

            <div class="payment-option-button payment-option-card">
                <img src="https://res.cloudinary.com/dtjgawrwz/image/upload/v1733821907/credit_wfccaj.jpg" alt="Credit Card">
                <div class="payment-option-label">Pay By Credit / Debit Card</div>
            </div>

            <div class="payment-option-button payment-option-net-banking">
                <img src="https://res.cloudinary.com/dtjgawrwz/image/upload/v1733821900/mdibank_kzsqyw.jpg" alt="Net Banking">
                <div class="payment-option-label">Pay By Net Banking</div>
            </div>

            <div class="payment-option-button payment-option-wallet">
                <img src="https://res.cloudinary.com/dtjgawrwz/image/upload/v1733821903/wallet_j3rgbs.jpg" alt="Wallet">
                <div class="payment-option-label">Pay By Other Wallet</div>
            </div>
        </div>
    </div>
</div>