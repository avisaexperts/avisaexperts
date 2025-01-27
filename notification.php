<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notification Design</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/conslutant.css">
    <link rel="stylesheet" href="css/notification.css">
    <link rel="stylesheet" href="modelpopup/model.css">
</head>

<body>
    <header>
        <a href="index.php">
            <div class="MAIN-LOGO">
                <img class="logop" src="https://res.cloudinary.com/dtjgawrwz/image/upload/v1733821901/main-logo_jrluci.svg" alt="Visa Experts">
                <img class="vector" src="img/Vector.png" alt="">
            </div>
        </a>
        <nav class="nav-links">
            <a href="#">Home</a>
            <a href="service.php">Services</a>
            <a href="about.php">About us</a>
            <a href="Course.php">Our Courses</a>
            <a href="consultant.php">Consultant</a>
            <a class="countries" href="#">Countries</a>
        </nav>
        <button class="menu-toggle" aria-label="Menu Toggle">
            <span></span>
            <span></span>
            <span></span>
        </button>

    </header>

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
    <div class="outer-notification-bar">
        <div class="notification-board">
            <div class="board-title">Notification</div>
            <div class="notification-card">
                <div class="card-image"><img src="https://res.cloudinary.com/dtjgawrwz/image/upload/v1733821948/c-card-f_adhwhh.jpg" alt="Visa"></div>
                <div class="card-content">
                    <p class="card-title"><span>😍</span> Attention! If you're looking to secure your visa for Dubai,
                        now is the time to act!</p>
                    <p class="card-text">Contact Our Visa Experts Today! Our experienced team is here to assist you with
                        all your visa needs, ensuring a smooth application process.</p>
                    <p class="notifi-card-date">24 Oct 2024 | 10:24</p>
                </div>
            </div>

            <div class="notification-card">
                <div class="card-image"><img src="https://res.cloudinary.com/dtjgawrwz/image/upload/v1733821949/c-card-f2_eegjki.jpg" alt="Airport"></div>
                <div class="card-content">
                    <p class="card-title"><span>😊</span> Kahin bhi jaana hai? Apna visa secure karne ka samay aa gaya
                        hai!</p>
                    <p class="card-text">Contact Our Visa Experts Today! Our experienced team is here to assist you with
                        all your visa needs, ensuring a smooth application process.</p>
                    <p class="notifi-card-date">20 Oct 2024 | 10:24</p>
                </div>
            </div>
            <div class="notification-card">
                <div class="card-image"><img src="https://res.cloudinary.com/dtjgawrwz/image/upload/v1733821949/c-card-f2_eegjki.jpg" alt="Airport"></div>
                <div class="card-content">
                    <p class="card-title"><span>😊</span> Kahin bhi jaana hai? Apna visa secure karne ka samay aa gaya
                        hai!</p>
                    <p class="card-text">Contact Our Visa Experts Today! Our experienced team is here to assist you with
                        all your visa needs, ensuring a smooth application process.</p>
                    <p class="notifi-card-date">20 Oct 2024 | 10:24</p>
                </div>
            </div>
            <div class="notification-card">
                <div class="card-image"><img src="https://res.cloudinary.com/dtjgawrwz/image/upload/v1733821949/c-card-f2_eegjki.jpg" alt="Airport"></div>
                <div class="card-content">
                    <p class="card-title"><span>😊</span> Kahin bhi jaana hai? Apna visa secure karne ka samay aa gaya
                        hai!</p>
                    <p class="card-text">Contact Our Visa Experts Today! Our experienced team is here to assist you with
                        all your visa needs, ensuring a smooth application process.</p>
                    <p class="notifi-card-date">20 Oct 2024 | 10:24</p>
                </div>
            </div>
            <div class="notification-card">
                <div class="card-image"><img src="https://res.cloudinary.com/dtjgawrwz/image/upload/v1733821949/c-card-f2_eegjki.jpg" alt="Airport"></div>
                <div class="card-content">
                    <p class="card-title"><span>😊</span> Kahin bhi jaana hai? Apna visa secure karne ka samay aa gaya
                        hai!</p>
                    <p class="card-text">Contact Our Visa Experts Today! Our experienced team is here to assist you with
                        all your visa needs, ensuring a smooth application process.</p>
                    <p class="notifi-card-date">20 Oct 2024 | 10:24</p>
                </div>
            </div>
            <div class="notification-card">
                <div class="card-image"><img src="https://res.cloudinary.com/dtjgawrwz/image/upload/v1733821949/c-card-f2_eegjki.jpg" alt="Airport"></div>
                <div class="card-content">
                    <p class="card-title"><span>😊</span> Kahin bhi jaana hai? Apna visa secure karne ka samay aa gaya
                        hai!</p>
                    <p class="card-text">Contact Our Visa Experts Today! Our experienced team is here to assist you with
                        all your visa needs, ensuring a smooth application process.</p>
                    <p class="notifi-card-date">20 Oct 2024 | 10:24</p>
                </div>
            </div>
            <div class="notification-card">
                <div class="card-image"><img src="https://res.cloudinary.com/dtjgawrwz/image/upload/v1733821949/c-card-f2_eegjki.jpg" alt="Airport"></div>
                <div class="card-content">
                    <p class="card-title"><span>😊</span> Kahin bhi jaana hai? Apna visa secure karne ka samay aa gaya
                        hai!</p>
                    <p class="card-text">Contact Our Visa Experts Today! Our experienced team is here to assist you with
                        all your visa needs, ensuring a smooth application process.</p>
                    <p class="notifi-card-date">20 Oct 2024 | 10:24</p>
                </div>
            </div>

            <!-- Additional Notification Cards -->
            <!-- Repeat similar blocks for each notification with updated image sources, text, and dates -->

        </div>
    </div>

</body>
<script src="js/consultant.js"></script>
<script src="js/model.js"></script>

</html>