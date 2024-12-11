<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
include 'include/db.php'; // Database connection file


?>

<?php require 'header.php'; ?>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/conslutant.css">
<link rel="stylesheet" href="css/carousel.css">
<link rel="stylesheet" href="modelpopup/model.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<div class="margin-from-bottom">

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
            <?php
            if (isset($_SESSION['id'])) {
            ?>
                <div id="balance">
                    <img src="https://res.cloudinary.com/dtjgawrwz/image/upload/v1733821925/noto_coin_yylejl.jpg" alt="" />
                    <span>$41</span>
                </div>
                <div id="profile">
                    <img src="https://res.cloudinary.com/dtjgawrwz/image/upload/v1733821905/userprofile_cpqhoo.png" alt="Profile Picture" />
                </div>
            <?php
            } else {
            ?>
                <div id="balance" style="background-color: #f58634;">
                    <a href="login.php" style="color: #fff;padding: 10px;">Login</a>

                </div>
            <?php

            }
            ?>

        </div>
    </div>
    <div class="profile-card">
        <!-- Profile Image -->
        <div class="profile-image">
            <img src="https://res.cloudinary.com/dtjgawrwz/image/upload/v1733821905/userprofile_cpqhoo.png" alt="User Image">
        </div>
        <!-- Profile Name -->
        <div class="profile-name"><?= $_SESSION['userName']; ?></div>
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

    <!-- <div class="info-section-consultant">
            <div><a href="notification.php">Notification</a></div>
            <div class="balance">
                <div><a href="awailablebalance.php">Available Balance</a></div>
                <span>₹ 125</span>
            </div>
            <div><a href="wallet.php">Wallet Transactions</a></div>
            <div><a href="logout.php">Logout</a></div>
        </div> -->

    <div class="consultant-section">
        <h2>Our Immigration advisers</h2>
        <div class="flex-filter">
            <div class="history-container" id="history-con">
                History
            </div>
            <button class="filter-btn">
                <img src="https://res.cloudinary.com/dtjgawrwz/image/upload/v1733821908/mage_filter_pxkv6u.jpg" alt="Filter Icon" />
            </button>
        </div>
    </div>
    <div class="tabs-con-container">
        <div class="tabs-con-header">
            <h2>Recent Video Call</h2>
            <div class="tabs-con-icon-group">
                <div class="tabs-con-icon-button video active" onclick="showTab('video', this)">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <g clip-path="url(#clip0_1877_52497)">
                            <path
                                d="M9.55556 10.3333V11.8889C9.55556 12.0952 9.47361 12.293 9.32775 12.4389C9.18189 12.5847 8.98406 12.6667 8.77778 12.6667H3.33333L1 15V7.22222C1 7.01594 1.08194 6.81811 1.22781 6.67225C1.37367 6.52639 1.5715 6.44444 1.77778 6.44444H3.33333M15 9.55556L12.6667 7.22222H7.22222C7.01594 7.22222 6.81811 7.14028 6.67225 6.99442C6.52639 6.84855 6.44444 6.65072 6.44444 6.44444V1.77778C6.44444 1.5715 6.52639 1.37367 6.67225 1.22781C6.81811 1.08194 7.01594 1 7.22222 1H14.2222C14.4285 1 14.6263 1.08194 14.7722 1.22781C14.9181 1.37367 15 1.5715 15 1.77778V9.55556Z"
                                stroke="black" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                        </g>
                        <defs>
                            <clipPath id="clip0_1877_52497">
                                <rect width="16" height="16" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <div class="tabs-con-icon-button phone" onclick="showTab('phone', this)">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="16" viewBox="0 0 14 16" fill="none">
                        <path
                            d="M3.71516 0.0823959L2.89299 0.292456C2.16093 0.479689 1.50716 0.840387 1.00864 1.33209C0.510127 1.8238 0.187606 2.42605 0.0790411 3.06796C-0.261523 5.07909 0.499872 7.43059 2.33571 10.1273C4.16695 12.8173 6.18282 14.5502 8.40164 15.3088C9.11456 15.5525 9.895 15.6174 10.6502 15.4959C11.4053 15.3743 12.1035 15.0714 12.6616 14.6232L13.2831 14.1233C13.6866 13.7994 13.9378 13.3622 13.9899 12.893C14.042 12.4239 13.8915 11.9546 13.5663 11.5725L12.0114 9.74416C11.8012 9.49734 11.5052 9.31249 11.1648 9.21552C10.8245 9.11856 10.4569 9.11433 10.1136 9.20345L7.76179 9.81321L7.70102 9.82294C7.44187 9.85503 6.8433 9.37948 6.09796 8.28444C5.31822 7.13884 5.15768 6.46879 5.37211 6.29568L6.5681 5.34944C7.00502 5.00344 7.30347 4.55025 7.42169 4.05328C7.53991 3.55632 7.472 3.04044 7.22744 2.57783L6.46834 1.14728C6.24008 0.716798 5.83502 0.371401 5.32869 0.175476C4.82235 -0.020449 4.24813 -0.0535314 3.71516 0.0823959ZM5.42486 1.54601L6.18167 2.97655C6.32854 3.25402 6.36948 3.56349 6.29875 3.86166C6.22802 4.15983 6.04917 4.4318 5.78721 4.63952L4.58778 5.58673C3.81951 6.2033 4.07407 7.25554 5.10608 8.77069C6.07617 10.1964 6.96141 10.9005 7.91316 10.7779L8.05534 10.7526L10.4496 10.1332C10.5641 10.1033 10.6866 10.1047 10.8002 10.1369C10.9137 10.1692 11.0124 10.2308 11.0826 10.3131L12.6375 12.1414C12.8003 12.3324 12.8757 12.5671 12.8498 12.8018C12.8239 13.0365 12.6983 13.2552 12.4964 13.4173L11.8738 13.9172C11.4751 14.2371 10.9766 14.4533 10.4373 14.54C9.89802 14.6267 9.34073 14.5803 8.83165 14.4063C6.88458 13.7411 5.04416 12.1589 3.32988 9.64108C1.61101 7.11745 0.914971 4.97114 1.21425 3.20606C1.29173 2.74746 1.52208 2.31718 1.8782 1.96588C2.23432 1.61458 2.70138 1.35688 3.22438 1.22314L4.04655 1.01308C4.31311 0.945146 4.5997 0.961758 4.85287 1.05981C5.10605 1.15787 5.30854 1.33067 5.42257 1.54601"
                            fill="black" />
                    </svg>
                </div>
                <div class="tabs-con-icon-button message" onclick="showTab('message', this)">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path
                            d="M10 6.33333L12.6559 5.00567C12.7448 4.96124 12.8436 4.94026 12.9429 4.94474C13.0422 4.94921 13.1387 4.97898 13.2233 5.03122C13.3078 5.08346 13.3776 5.15644 13.4261 5.24324C13.4745 5.33004 13.4999 5.42777 13.5 5.52717V9.47283C13.4999 9.57223 13.4745 9.66996 13.4261 9.75676C13.3776 9.84356 13.3078 9.91654 13.2233 9.96878C13.1387 10.021 13.0422 10.0508 12.9429 10.0553C12.8436 10.0597 12.7448 10.0388 12.6559 9.99433L10 8.66667V6.33333ZM3 5.16667C3 4.85725 3.12292 4.5605 3.34171 4.34171C3.5605 4.12292 3.85725 4 4.16667 4H8.83333C9.14275 4 9.4395 4.12292 9.65829 4.34171C9.87708 4.5605 10 4.85725 10 5.16667V9.83333C10 10.1428 9.87708 10.4395 9.65829 10.6583C9.4395 10.8771 9.14275 11 8.83333 11H4.16667C3.85725 11 3.5605 10.8771 3.34171 10.6583C3.12292 10.4395 3 10.1428 3 9.83333V5.16667Z"
                            stroke="black" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
        </div>

        <div class="tabs-con-list" id="video">
            <div class="tabs-con-item">
                <img src="https://res.cloudinary.com/dtjgawrwz/image/upload/v1733821900/profile2_yrtjte.jpg" alt="Avatar">
                <div class="tabs-con-details">
                    <h4>Kathryn Murphy</h4>
                    <p>Video Call</p>
                </div>
                <div class="tabs-con-time">12:35</div>
            </div>
            <div class="tabs-con-item">
                <img src="https://res.cloudinary.com/dtjgawrwz/image/upload/v1733821900/profile2_yrtjte.jpg" alt="Avatar">
                <div class="tabs-con-details">
                    <h4>Kathryn Murphy</h4>
                    <p>Video Call</p>
                </div>
                <div class="tabs-con-time">12:35</div>
            </div>
            <div class="tabs-con-item">
                <img src="https://res.cloudinary.com/dtjgawrwz/image/upload/v1733821900/profile2_yrtjte.jpg" alt="Avatar">
                <div class="tabs-con-details">
                    <h4>Kathryn Murphy</h4>
                    <p>Video Call</p>
                </div>
                <div class="tabs-con-time">12:35</div>
            </div>
            <!-- Additional call items for video tab -->
        </div>

        <div class="tabs-con-list tabs-con-hidden" id="phone">
            <div class="tabs-con-item">
                <img src="https://res.cloudinary.com/dtjgawrwz/image/upload/v1733821928/profile3_er2oif.jpg" alt="Avatar">
                <div class="tabs-con-details">
                    <h4>John Doe</h4>
                    <p>Phone Call</p>
                </div>
                <div class="tabs-con-time">11:00</div>
            </div>
            <div class="tabs-con-item">
                <img src="https://res.cloudinary.com/dtjgawrwz/image/upload/v1733821928/profile3_er2oif.jpg" alt="Avatar">
                <div class="tabs-con-details">
                    <h4>John Doe</h4>
                    <p>Phone Call</p>
                </div>
                <div class="tabs-con-time">11:00</div>
            </div>
            <div class="tabs-con-item">
                <img src="https://res.cloudinary.com/dtjgawrwz/image/upload/v1733821928/profile3_er2oif.jpg" alt="Avatar">
                <div class="tabs-con-details">
                    <h4>John Doe</h4>
                    <p>Phone Call</p>
                </div>
                <div class="tabs-con-time">11:00</div>
            </div>
            <!-- Additional call items for phone tab -->
        </div>

        <div class="tabs-con-list tabs-con-hidden" id="message">
            <div class="tabs-con-item">
                <img src="https://res.cloudinary.com/dtjgawrwz/image/upload/v1733821951/profile4_jbokp0.png" alt="Avatar">
                <div class="tabs-con-details">
                    <h4>John Doe</h4>
                    <p>Phone Call</p>
                </div>
                <div class="tabs-con-time">11:00</div>
            </div>
            <div class="tabs-con-item">
                <img src="https://res.cloudinary.com/dtjgawrwz/image/upload/v1733821951/profile4_jbokp0.png" alt="Avatar">
                <div class="tabs-con-details">
                    <h4>John Doe</h4>
                    <p>Phone Call</p>
                </div>
                <div class="tabs-con-time">11:00</div>
            </div>
            <div class="tabs-con-item">
                <img src="https://res.cloudinary.com/dtjgawrwz/image/upload/v1733821951/profile4_jbokp0.png" alt="Avatar">
                <div class="tabs-con-details">
                    <h4>John Doe</h4>
                    <p>Phone Call</p>
                </div>
                <div class="tabs-con-time">11:00</div>
            </div>
            <!-- Additional call items for message tab -->
        </div>
    </div>
    <div class="parent-card" id="parent-card-div">

        <!-- <a href="nextconsultant.php">
            <div class="card">
                <div class="ribbon">Top Choice</div>
                <div class="firstcardp">
                    <img src="https://res.cloudinary.com/dtjgawrwz/image/upload/v1733821953/consultingimg1_bk5jfv.png" alt="Consultant" class="profile-img">
                    <p class="flex-stars"><span class="stars">⭐️⭐️⭐️⭐️⭐️</span>
                    <p class="second-cls-pe">2796 orders</p>
                    </p>
                </div>
                <div>
                    <div class="flex-username">
                        <h5>Urvaskha</h5>
                        <div class="verification-ticks"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                viewBox="0 0 30 30" fill="none">
                                <mask id="mask0_1148_2283" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                    y="0" width="30" height="30">
                                    <rect width="30" height="30" fill="#D9D9D9" />
                                </mask>
                                <g mask="url(#mask0_1148_2283)">
                                    <path
                                        d="M10.75 28.125L8.375 24.125L3.875 23.125L4.3125 18.5L1.25 15L4.3125 11.5L3.875 6.875L8.375 5.875L10.75 1.875L15 3.6875L19.25 1.875L21.625 5.875L26.125 6.875L25.6875 11.5L28.75 15L25.6875 18.5L26.125 23.125L21.625 24.125L19.25 28.125L15 26.3125L10.75 28.125ZM11.8125 24.9375L15 23.5625L18.25 24.9375L20 21.9375L23.4375 21.125L23.125 17.625L25.4375 15L23.125 12.3125L23.4375 8.8125L20 8.0625L18.1875 5.0625L15 6.4375L11.75 5.0625L10 8.0625L6.5625 8.8125L6.875 12.3125L4.5625 15L6.875 17.625L6.5625 21.1875L10 21.9375L11.8125 24.9375ZM13.6875 19.4375L20.75 12.375L19 10.5625L13.6875 15.875L11 13.25L9.25 15L13.6875 19.4375Z"
                                        fill="#689A18" />
                                </g>
                            </svg></div>
                    </div>
                    <p>UK visa consultants<br>English, Hindi, Punjabi<br>Exp: 5 Years</p>
                    <p><span class="price">Free</span> <span class="old-price">₹20/min</span></p>

                    <button class="btn btn-outline-success online-btn">chat</button>
                    <button class="btn btn-outline-success online-btn">Call</button>
                    <button class="btn btn-outline-success online-btn">video call</button>
                </div>
            </div>
        </a>
        <a href="nextconsultant.php">
            <div class="card">
                <div class="ribbon">Top Choice</div>
                <div class="firstcardp">
                    <img src="https://res.cloudinary.com/dtjgawrwz/image/upload/v1733821953/consultingimg1_bk5jfv.png" alt="Consultant" class="profile-img">
                    <p class="flex-stars"><span class="stars">⭐️⭐️⭐️⭐️⭐️</span>
                    <p class="second-cls-pe">2796 orders</p>
                    </p>
                </div>
                <div>
                    <div class="flex-username">
                        <h5>Urvaskha</h5>
                        <div class="verification-ticks"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                viewBox="0 0 30 30" fill="none">
                                <mask id="mask0_1148_2283" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                    y="0" width="30" height="30">
                                    <rect width="30" height="30" fill="#D9D9D9" />
                                </mask>
                                <g mask="url(#mask0_1148_2283)">
                                    <path
                                        d="M10.75 28.125L8.375 24.125L3.875 23.125L4.3125 18.5L1.25 15L4.3125 11.5L3.875 6.875L8.375 5.875L10.75 1.875L15 3.6875L19.25 1.875L21.625 5.875L26.125 6.875L25.6875 11.5L28.75 15L25.6875 18.5L26.125 23.125L21.625 24.125L19.25 28.125L15 26.3125L10.75 28.125ZM11.8125 24.9375L15 23.5625L18.25 24.9375L20 21.9375L23.4375 21.125L23.125 17.625L25.4375 15L23.125 12.3125L23.4375 8.8125L20 8.0625L18.1875 5.0625L15 6.4375L11.75 5.0625L10 8.0625L6.5625 8.8125L6.875 12.3125L4.5625 15L6.875 17.625L6.5625 21.1875L10 21.9375L11.8125 24.9375ZM13.6875 19.4375L20.75 12.375L19 10.5625L13.6875 15.875L11 13.25L9.25 15L13.6875 19.4375Z"
                                        fill="#689A18" />
                                </g>
                            </svg></div>
                    </div>
                    <p>UK visa consultants<br>English, Hindi, Punjabi<br>Exp: 5 Years</p>
                    <p><span class="price">Free</span> <span class="old-price">₹20/min</span></p>

                    <button class="btn btn-outline-success online-btn">chat</button>
                    <button class="btn btn-outline-success online-btn">Call</button>
                    <button class="btn btn-outline-success online-btn">video call</button>
                </div>
            </div>
        </a>
        <a href="nextconsultant.php">
            <div class="card">
                <div class="ribbon">Top Choice</div>
                <div class="firstcardp">
                    <img src="https://res.cloudinary.com/dtjgawrwz/image/upload/v1733821953/consultingimg1_bk5jfv.png" alt="Consultant" class="profile-img">
                    <p class="flex-stars"><span class="stars">⭐️⭐️⭐️⭐️⭐️</span>
                    <p class="second-cls-pe">2796 orders</p>
                    </p>
                </div>
                <div>
                    <div class="flex-username">
                        <h5>Urvaskha</h5>
                        <div class="verification-ticks"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                viewBox="0 0 30 30" fill="none">
                                <mask id="mask0_1148_2283" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                    y="0" width="30" height="30">
                                    <rect width="30" height="30" fill="#D9D9D9" />
                                </mask>
                                <g mask="url(#mask0_1148_2283)">
                                    <path
                                        d="M10.75 28.125L8.375 24.125L3.875 23.125L4.3125 18.5L1.25 15L4.3125 11.5L3.875 6.875L8.375 5.875L10.75 1.875L15 3.6875L19.25 1.875L21.625 5.875L26.125 6.875L25.6875 11.5L28.75 15L25.6875 18.5L26.125 23.125L21.625 24.125L19.25 28.125L15 26.3125L10.75 28.125ZM11.8125 24.9375L15 23.5625L18.25 24.9375L20 21.9375L23.4375 21.125L23.125 17.625L25.4375 15L23.125 12.3125L23.4375 8.8125L20 8.0625L18.1875 5.0625L15 6.4375L11.75 5.0625L10 8.0625L6.5625 8.8125L6.875 12.3125L4.5625 15L6.875 17.625L6.5625 21.1875L10 21.9375L11.8125 24.9375ZM13.6875 19.4375L20.75 12.375L19 10.5625L13.6875 15.875L11 13.25L9.25 15L13.6875 19.4375Z"
                                        fill="#689A18" />
                                </g>
                            </svg></div>
                    </div>
                    <p>UK visa consultants<br>English, Hindi, Punjabi<br>Exp: 5 Years</p>
                    <p><span class="price">Free</span> <span class="old-price">₹20/min</span></p>

                    <button class="btn btn-outline-success online-btn">chat</button>
                    <button class="btn btn-outline-success online-btn">Call</button>
                    <button class="btn btn-outline-success online-btn">video call</button>
                </div>
            </div>
        </a>
        <a href="nextconsultant.php">
            <div class="card">
                <div class="ribbon">Top Choice</div>
                <div class="firstcardp">
                    <img src="https://res.cloudinary.com/dtjgawrwz/image/upload/v1733821953/consultingimg1_bk5jfv.png" alt="Consultant" class="profile-img">
                    <p class="flex-stars"><span class="stars">⭐️⭐️⭐️⭐️⭐️</span>
                    <p class="second-cls-pe">2796 orders</p>
                    </p>
                </div>
                <div>
                    <div class="flex-username">
                        <h5>Urvaskha</h5>
                        <div class="verification-ticks"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                viewBox="0 0 30 30" fill="none">
                                <mask id="mask0_1148_2283" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                    y="0" width="30" height="30">
                                    <rect width="30" height="30" fill="#D9D9D9" />
                                </mask>
                                <g mask="url(#mask0_1148_2283)">
                                    <path
                                        d="M10.75 28.125L8.375 24.125L3.875 23.125L4.3125 18.5L1.25 15L4.3125 11.5L3.875 6.875L8.375 5.875L10.75 1.875L15 3.6875L19.25 1.875L21.625 5.875L26.125 6.875L25.6875 11.5L28.75 15L25.6875 18.5L26.125 23.125L21.625 24.125L19.25 28.125L15 26.3125L10.75 28.125ZM11.8125 24.9375L15 23.5625L18.25 24.9375L20 21.9375L23.4375 21.125L23.125 17.625L25.4375 15L23.125 12.3125L23.4375 8.8125L20 8.0625L18.1875 5.0625L15 6.4375L11.75 5.0625L10 8.0625L6.5625 8.8125L6.875 12.3125L4.5625 15L6.875 17.625L6.5625 21.1875L10 21.9375L11.8125 24.9375ZM13.6875 19.4375L20.75 12.375L19 10.5625L13.6875 15.875L11 13.25L9.25 15L13.6875 19.4375Z"
                                        fill="#689A18" />
                                </g>
                            </svg></div>
                    </div>
                    <p>UK visa consultants<br>English, Hindi, Punjabi<br>Exp: 5 Years</p>
                    <p><span class="price">Free</span> <span class="old-price">₹20/min</span></p>

                    <button class="btn btn-outline-success online-btn">chat</button>
                    <button class="btn btn-outline-success online-btn">Call</button>
                    <button class="btn btn-outline-success online-btn">video call</button>
                </div>
            </div>
        </a>
        <a href="waitingconsultant.php">
            <div class="card">
                <div class="ribbon">Top Choice</div>
                <div class="firstcardp">
                    <img src="https://res.cloudinary.com/dtjgawrwz/image/upload/v1733821953/consultingimg1_bk5jfv.png" alt="Consultant" class="profile-img">
                    <p><span class="stars">⭐️⭐️⭐️⭐️⭐️</span><br>2796 orders</p>
                </div>
                <div>
                    <div class="flex-username">
                        <h5>Urvaskha</h5>
                        <div class="verification-ticks"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                viewBox="0 0 30 30" fill="none">
                                <mask id="mask0_1148_2283" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                    y="0" width="30" height="30">
                                    <rect width="30" height="30" fill="#D9D9D9" />
                                </mask>
                                <g mask="url(#mask0_1148_2283)">
                                    <path
                                        d="M10.75 28.125L8.375 24.125L3.875 23.125L4.3125 18.5L1.25 15L4.3125 11.5L3.875 6.875L8.375 5.875L10.75 1.875L15 3.6875L19.25 1.875L21.625 5.875L26.125 6.875L25.6875 11.5L28.75 15L25.6875 18.5L26.125 23.125L21.625 24.125L19.25 28.125L15 26.3125L10.75 28.125ZM11.8125 24.9375L15 23.5625L18.25 24.9375L20 21.9375L23.4375 21.125L23.125 17.625L25.4375 15L23.125 12.3125L23.4375 8.8125L20 8.0625L18.1875 5.0625L15 6.4375L11.75 5.0625L10 8.0625L6.5625 8.8125L6.875 12.3125L4.5625 15L6.875 17.625L6.5625 21.1875L10 21.9375L11.8125 24.9375ZM13.6875 19.4375L20.75 12.375L19 10.5625L13.6875 15.875L11 13.25L9.25 15L13.6875 19.4375Z"
                                        fill="#689A18" />
                                </g>
                            </svg></div>
                    </div>
                    <p>UK visa consultants<br>English, Hindi, Punjabi<br>Exp: 5 Years</p>
                    <p><span class="price">Free</span> <span class="old-price">₹20/min</span></p>
                    <div class="waiting-time"><span class="price">Wait -</span> <span class="old-prices">10 min</span>
                    </div>
                    <button class="btn red-btn btn-outline-success">chat</button>
                    <button class="btn red-btn btn-outline-success">Call</button>
                    <button class="btn red-btn btn-outline-success">video call</button>
                </div>
            </div>
        </a>
        <a href="nextconsultant.php">
            <div class="card">
                <div class="ribbon">Top Choice</div>
                <div class="firstcardp">
                    <img src="https://res.cloudinary.com/dtjgawrwz/image/upload/v1733821953/consultingimg1_bk5jfv.png" alt="Consultant" class="profile-img">
                    <p class="flex-stars"><span class="stars">⭐️⭐️⭐️⭐️⭐️</span>
                    <p class="second-cls-pe">2796 orders</p>
                    </p>
                </div>
                <div>
                    <div class="flex-username">
                        <h5>Urvaskha</h5>
                        <div class="verification-ticks"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                viewBox="0 0 30 30" fill="none">
                                <mask id="mask0_1148_2283" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                    y="0" width="30" height="30">
                                    <rect width="30" height="30" fill="#D9D9D9" />
                                </mask>
                                <g mask="url(#mask0_1148_2283)">
                                    <path
                                        d="M10.75 28.125L8.375 24.125L3.875 23.125L4.3125 18.5L1.25 15L4.3125 11.5L3.875 6.875L8.375 5.875L10.75 1.875L15 3.6875L19.25 1.875L21.625 5.875L26.125 6.875L25.6875 11.5L28.75 15L25.6875 18.5L26.125 23.125L21.625 24.125L19.25 28.125L15 26.3125L10.75 28.125ZM11.8125 24.9375L15 23.5625L18.25 24.9375L20 21.9375L23.4375 21.125L23.125 17.625L25.4375 15L23.125 12.3125L23.4375 8.8125L20 8.0625L18.1875 5.0625L15 6.4375L11.75 5.0625L10 8.0625L6.5625 8.8125L6.875 12.3125L4.5625 15L6.875 17.625L6.5625 21.1875L10 21.9375L11.8125 24.9375ZM13.6875 19.4375L20.75 12.375L19 10.5625L13.6875 15.875L11 13.25L9.25 15L13.6875 19.4375Z"
                                        fill="#689A18" />
                                </g>
                            </svg></div>
                    </div>
                    <p>UK visa consultants<br>English, Hindi, Punjabi<br>Exp: 5 Years</p>
                    <p><span class="price">Free</span> <span class="old-price">₹20/min</span></p>

                    <button class="btn btn-outline-success">chat</button>
                    <button class="btn btn-outline-success">Call</button>
                    <button class="btn btn-outline-success">video call</button>
                </div>
            </div>
        </a>
        <a href="nextconsultant.php">
            <div class="card">
                <div class="ribbon">Top Choice</div>
                <div class="firstcardp">
                    <img src="https://res.cloudinary.com/dtjgawrwz/image/upload/v1733821953/consultingimg1_bk5jfv.png" alt="Consultant" class="profile-img">
                    <p class="flex-stars"><span class="stars">⭐️⭐️⭐️⭐️⭐️</span>
                    <p class="second-cls-pe">2796 orders</p>
                    </p>
                </div>
                <div>
                    <div class="flex-username">
                        <h5>Urvaskha</h5>
                        <div class="verification-ticks"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                viewBox="0 0 30 30" fill="none">
                                <mask id="mask0_1148_2283" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                    y="0" width="30" height="30">
                                    <rect width="30" height="30" fill="#D9D9D9" />
                                </mask>
                                <g mask="url(#mask0_1148_2283)">
                                    <path
                                        d="M10.75 28.125L8.375 24.125L3.875 23.125L4.3125 18.5L1.25 15L4.3125 11.5L3.875 6.875L8.375 5.875L10.75 1.875L15 3.6875L19.25 1.875L21.625 5.875L26.125 6.875L25.6875 11.5L28.75 15L25.6875 18.5L26.125 23.125L21.625 24.125L19.25 28.125L15 26.3125L10.75 28.125ZM11.8125 24.9375L15 23.5625L18.25 24.9375L20 21.9375L23.4375 21.125L23.125 17.625L25.4375 15L23.125 12.3125L23.4375 8.8125L20 8.0625L18.1875 5.0625L15 6.4375L11.75 5.0625L10 8.0625L6.5625 8.8125L6.875 12.3125L4.5625 15L6.875 17.625L6.5625 21.1875L10 21.9375L11.8125 24.9375ZM13.6875 19.4375L20.75 12.375L19 10.5625L13.6875 15.875L11 13.25L9.25 15L13.6875 19.4375Z"
                                        fill="#689A18" />
                                </g>
                            </svg></div>
                    </div>
                    <p>UK visa consultants<br>English, Hindi, Punjabi<br>Exp: 5 Years</p>
                    <p><span class="price">Free</span> <span class="old-price">₹20/min</span></p>

                    <button class="btn btn-outline-success">chat</button>
                    <button class="btn btn-outline-success">Call</button>
                    <button class="btn btn-outline-success">video call</button>
                </div>
            </div>
        </a>
        <a href="nextconsultant.php">
            <div class="card">
                <div class="ribbon">Top Choice</div>
                <div class="firstcardp">
                    <img src="https://res.cloudinary.com/dtjgawrwz/image/upload/v1733821953/consultingimg1_bk5jfv.png" alt="Consultant" class="profile-img">
                    <p class="flex-stars"><span class="stars">⭐️⭐️⭐️⭐️⭐️</span>
                    <p class="second-cls-pe">2796 orders</p>
                    </p>
                </div>
                <div>
                    <div class="flex-username">
                        <h5>Urvaskha</h5>
                        <div class="verification-ticks"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                viewBox="0 0 30 30" fill="none">
                                <mask id="mask0_1148_2283" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                    y="0" width="30" height="30">
                                    <rect width="30" height="30" fill="#D9D9D9" />
                                </mask>
                                <g mask="url(#mask0_1148_2283)">
                                    <path
                                        d="M10.75 28.125L8.375 24.125L3.875 23.125L4.3125 18.5L1.25 15L4.3125 11.5L3.875 6.875L8.375 5.875L10.75 1.875L15 3.6875L19.25 1.875L21.625 5.875L26.125 6.875L25.6875 11.5L28.75 15L25.6875 18.5L26.125 23.125L21.625 24.125L19.25 28.125L15 26.3125L10.75 28.125ZM11.8125 24.9375L15 23.5625L18.25 24.9375L20 21.9375L23.4375 21.125L23.125 17.625L25.4375 15L23.125 12.3125L23.4375 8.8125L20 8.0625L18.1875 5.0625L15 6.4375L11.75 5.0625L10 8.0625L6.5625 8.8125L6.875 12.3125L4.5625 15L6.875 17.625L6.5625 21.1875L10 21.9375L11.8125 24.9375ZM13.6875 19.4375L20.75 12.375L19 10.5625L13.6875 15.875L11 13.25L9.25 15L13.6875 19.4375Z"
                                        fill="#689A18" />
                                </g>
                            </svg></div>
                    </div>
                    <p>UK visa consultants<br>English, Hindi, Punjabi<br>Exp: 5 Years</p>
                    <p><span class="price">Free</span> <span class="old-price">₹20/min</span></p>

                    <button class="btn btn-outline-success">chat</button>
                    <button class="btn btn-outline-success">Call</button>
                    <button class="btn btn-outline-success">video call</button>
                </div>
            </div>
        </a>
        <a href="waitingconsultant.php">
            <div class="card">
                <div class="ribbon">Top Choice</div>
                <div class="firstcardp">
                    <img src="https://res.cloudinary.com/dtjgawrwz/image/upload/v1733821953/consultingimg1_bk5jfv.png" alt="Consultant" class="profile-img">
                    <p><span class="stars">⭐️⭐️⭐️⭐️⭐️</span><br>2796 orders</p>
                </div>
                <div>
                    <div class="flex-username">
                        <h5>Urvaskha</h5>
                        <div class="verification-ticks"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                viewBox="0 0 30 30" fill="none">
                                <mask id="mask0_1148_2283" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                    y="0" width="30" height="30">
                                    <rect width="30" height="30" fill="#D9D9D9" />
                                </mask>
                                <g mask="url(#mask0_1148_2283)">
                                    <path
                                        d="M10.75 28.125L8.375 24.125L3.875 23.125L4.3125 18.5L1.25 15L4.3125 11.5L3.875 6.875L8.375 5.875L10.75 1.875L15 3.6875L19.25 1.875L21.625 5.875L26.125 6.875L25.6875 11.5L28.75 15L25.6875 18.5L26.125 23.125L21.625 24.125L19.25 28.125L15 26.3125L10.75 28.125ZM11.8125 24.9375L15 23.5625L18.25 24.9375L20 21.9375L23.4375 21.125L23.125 17.625L25.4375 15L23.125 12.3125L23.4375 8.8125L20 8.0625L18.1875 5.0625L15 6.4375L11.75 5.0625L10 8.0625L6.5625 8.8125L6.875 12.3125L4.5625 15L6.875 17.625L6.5625 21.1875L10 21.9375L11.8125 24.9375ZM13.6875 19.4375L20.75 12.375L19 10.5625L13.6875 15.875L11 13.25L9.25 15L13.6875 19.4375Z"
                                        fill="#689A18" />
                                </g>
                            </svg></div>
                    </div>
                    <p>UK visa consultants<br>English, Hindi, Punjabi<br>Exp: 5 Years</p>
                    <p><span class="price">Free</span> <span class="old-price">₹20/min</span></p>

                    <button class="btn red-btn btn-outline-success">chat</button>
                    <button class="btn red-btn btn-outline-success">Call</button>
                    <button class="btn red-btn btn-outline-success">video call</button>
                </div>
            </div>
        </a>
        <a href="offlineconsultant.php">
            <div class="card">
                <div class="ribbon">Top Choice</div>
                <div class="firstcardp">
                    <img src="https://res.cloudinary.com/dtjgawrwz/image/upload/v1733821953/consultingimg1_bk5jfv.png" alt="Consultant" class="profile-img">
                    <p class="flex-stars"><span class="stars">⭐️⭐️⭐️⭐️⭐️</span>
                    <p class="second-cls-pe">2796 orders</p>
                    <div class="offline-line">
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12" fill="none">
                            <circle cx="6.5" cy="6" r="6" fill="#808080" />
                        </svg>
                        <p>Offline</p>
                    </div>
                    </p>
                </div>
                <div>
                    <div class="flex-username">
                        <h5>Urvaskha</h5>
                        <div class="verification-ticks"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                viewBox="0 0 30 30" fill="none">
                                <mask id="mask0_1148_2283" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                    y="0" width="30" height="30">
                                    <rect width="30" height="30" fill="#D9D9D9" />
                                </mask>
                                <g mask="url(#mask0_1148_2283)">
                                    <path
                                        d="M10.75 28.125L8.375 24.125L3.875 23.125L4.3125 18.5L1.25 15L4.3125 11.5L3.875 6.875L8.375 5.875L10.75 1.875L15 3.6875L19.25 1.875L21.625 5.875L26.125 6.875L25.6875 11.5L28.75 15L25.6875 18.5L26.125 23.125L21.625 24.125L19.25 28.125L15 26.3125L10.75 28.125ZM11.8125 24.9375L15 23.5625L18.25 24.9375L20 21.9375L23.4375 21.125L23.125 17.625L25.4375 15L23.125 12.3125L23.4375 8.8125L20 8.0625L18.1875 5.0625L15 6.4375L11.75 5.0625L10 8.0625L6.5625 8.8125L6.875 12.3125L4.5625 15L6.875 17.625L6.5625 21.1875L10 21.9375L11.8125 24.9375ZM13.6875 19.4375L20.75 12.375L19 10.5625L13.6875 15.875L11 13.25L9.25 15L13.6875 19.4375Z"
                                        fill="#689A18" />
                                </g>
                            </svg></div>
                    </div>
                    <p>UK visa consultants<br>English, Hindi, Punjabi<br>Exp: 5 Years</p>
                    <p><span class="price grayprice">₹5 </span> <span class="old-price">₹20/min</span></p>

                    <button class="btn btn-outline-success offline-btn">chat</button>
                    <button class="btn btn-outline-success offline-btn">Call</button>
                    <button class="btn btn-outline-success offline-btn">video call</button>
                </div>
            </div>
        </a>
        <a href="offlineconsultant.php">
            <div class="card">
                <div class="ribbon">Top Choice</div>
                <div class="firstcardp">
                    <img src="https://res.cloudinary.com/dtjgawrwz/image/upload/v1733821953/consultingimg1_bk5jfv.png" alt="Consultant" class="profile-img">
                    <p class="flex-stars"><span class="stars">⭐️⭐️⭐️⭐️⭐️</span>
                    <p class="second-cls-pe">2796 orders</p>
                    <div class="offline-line">
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12" fill="none">
                            <circle cx="6.5" cy="6" r="6" fill="#808080" />
                        </svg>
                        <p>Offline</p>
                    </div>
                    </p>
                </div>
                <div>
                    <div class="flex-username">
                        <h5>Urvaskha</h5>
                        <div class="verification-ticks"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                viewBox="0 0 30 30" fill="none">
                                <mask id="mask0_1148_2283" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                    y="0" width="30" height="30">
                                    <rect width="30" height="30" fill="#D9D9D9" />
                                </mask>
                                <g mask="url(#mask0_1148_2283)">
                                    <path
                                        d="M10.75 28.125L8.375 24.125L3.875 23.125L4.3125 18.5L1.25 15L4.3125 11.5L3.875 6.875L8.375 5.875L10.75 1.875L15 3.6875L19.25 1.875L21.625 5.875L26.125 6.875L25.6875 11.5L28.75 15L25.6875 18.5L26.125 23.125L21.625 24.125L19.25 28.125L15 26.3125L10.75 28.125ZM11.8125 24.9375L15 23.5625L18.25 24.9375L20 21.9375L23.4375 21.125L23.125 17.625L25.4375 15L23.125 12.3125L23.4375 8.8125L20 8.0625L18.1875 5.0625L15 6.4375L11.75 5.0625L10 8.0625L6.5625 8.8125L6.875 12.3125L4.5625 15L6.875 17.625L6.5625 21.1875L10 21.9375L11.8125 24.9375ZM13.6875 19.4375L20.75 12.375L19 10.5625L13.6875 15.875L11 13.25L9.25 15L13.6875 19.4375Z"
                                        fill="#689A18" />
                                </g>
                            </svg></div>
                    </div>
                    <p>UK visa consultants<br>English, Hindi, Punjabi<br>Exp: 5 Years</p>
                    <p><span class="price grayprice">₹5</span> <span class="old-price">₹20/min</span></p>

                    <button class="btn btn-outline-success offline-btn">chat</button>
                    <button class="btn btn-outline-success offline-btn">Call</button>
                    <button class="btn btn-outline-success offline-btn">video call</button>
                </div>
            </div>
        </a>
        <a href="offlineconsultant.php">
            <div class="card">
                <div class="ribbon">Top Choice</div>
                <div class="firstcardp">
                    <img src="https://res.cloudinary.com/dtjgawrwz/image/upload/v1733821953/consultingimg1_bk5jfv.png" alt="Consultant" class="profile-img">
                    <p class="flex-stars"><span class="stars">⭐️⭐️⭐️⭐️⭐️</span>
                    <p class="second-cls-pe">2796 orders</p>
                    <div class="offline-line">
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12" fill="none">
                            <circle cx="6.5" cy="6" r="6" fill="#808080" />
                        </svg>
                        <p>Offline</p>
                    </div>
                    </p>
                </div>
                <div>
                    <div class="flex-username">
                        <h5>Urvaskha</h5>
                        <div class="verification-ticks"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                viewBox="0 0 30 30" fill="none">
                                <mask id="mask0_1148_2283" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                    y="0" width="30" height="30">
                                    <rect width="30" height="30" fill="#D9D9D9" />
                                </mask>
                                <g mask="url(#mask0_1148_2283)">
                                    <path
                                        d="M10.75 28.125L8.375 24.125L3.875 23.125L4.3125 18.5L1.25 15L4.3125 11.5L3.875 6.875L8.375 5.875L10.75 1.875L15 3.6875L19.25 1.875L21.625 5.875L26.125 6.875L25.6875 11.5L28.75 15L25.6875 18.5L26.125 23.125L21.625 24.125L19.25 28.125L15 26.3125L10.75 28.125ZM11.8125 24.9375L15 23.5625L18.25 24.9375L20 21.9375L23.4375 21.125L23.125 17.625L25.4375 15L23.125 12.3125L23.4375 8.8125L20 8.0625L18.1875 5.0625L15 6.4375L11.75 5.0625L10 8.0625L6.5625 8.8125L6.875 12.3125L4.5625 15L6.875 17.625L6.5625 21.1875L10 21.9375L11.8125 24.9375ZM13.6875 19.4375L20.75 12.375L19 10.5625L13.6875 15.875L11 13.25L9.25 15L13.6875 19.4375Z"
                                        fill="#689A18" />
                                </g>
                            </svg></div>
                    </div>
                    <p>UK visa consultants<br>English, Hindi, Punjabi<br>Exp: 5 Years</p>
                    <p><span class="price grayprice">₹5</span> <span class="old-price">₹20/min</span></p>

                    <button class="btn btn-outline-success offline-btn">chat</button>
                    <button class="btn btn-outline-success offline-btn">Call</button>
                    <button class="btn btn-outline-success offline-btn">video call</button>
                </div>
            </div>
        </a> -->


        <!-- //footer and phone section -->

    </div>
    <div class="peragraph-section">
        <h1>How Connecting with an A VISA EXPERT can help you?</h1>
        <p>Navigating the complexities of visa applications can be a daunting task. Connecting with a visa expert
            can
            significantly simplify this process, providing you with invaluable assistance tailored to your specific
            needs.
            A visa expert offers a wealth of knowledge regarding the various visa types and requirements for
            different
            countries. They stay updated on the latest immigration policies and procedures, ensuring that you
            receive
            accurate and timely information. Whether you need guidance for student visas, work permits, or tourist
            visas, their expertise can help you choose the right pathway.
            Communication with a visa expert can be conducted via chat, call, or video call, making it convenient
            for
            you to seek assistance. During these interactions, you can ask questions, clarify doubts, and receive
            personalized advice. The expert can review your application materials, highlight any potential issues,
            and
            suggest improvements to enhance your chances of approval.
            Additionally, a visa expert provides comprehensive services, including document preparation, application
            submission, and interview coaching. This support is especially beneficial if you are unfamiliar with the
            process or have language barriers. They can help you compile necessary documents, ensuring that
            everything
            is in order before submission.</p>
    </div>
    <div class="peragraph-section margin-up-p">
        <h1>How Connecting with an A VISA EXPERT can help you?</h1>
        <p>Navigating the complexities of visa applications can be a daunting task. Connecting with a visa expert
            can
            significantly simplify this process, providing you with invaluable assistance tailored to your specific
            needs.
            A visa expert offers a wealth of knowledge regarding the various visa types and requirements for
            different
            countries. They stay updated on the latest immigration policies and procedures, ensuring that you
            receive
            accurate and timely information. Whether you need guidance for student visas, work permits, or tourist
            visas, their expertise can help you choose the right pathway.
            Communication with a visa expert can be conducted via chat, call, or video call, making it convenient
            for
            you to seek assistance. During these interactions, you can ask questions, clarify doubts, and receive
            personalized advice. The expert can review your application materials, highlight any potential issues,
            and
            suggest improvements to enhance your chances of approval.
            Additionally, a visa expert provides comprehensive services, including document preparation, application
            submission, and interview coaching. This support is especially beneficial if you are unfamiliar with the
            process or have language barriers. They can help you compile necessary documents, ensuring that
            everything
            is in order before submission.</p>
    </div>
    <!-- //footer and phone section -->
    <?php require 'footer.php'; ?>
    <script src="js/jquery.min.js"></script>
    <script>
        function getAllAgents() {
            $('#parent-card-div').empty();
            fetch(
                    `getAllConsultant.php`
                )
                .then((response) => response.json())
                .then((data) => {

                    // Display each message
                    data.forEach((value) => {

                        // console.log(value);
                        if (value.user_login_status == 'Login') {

                            // Generate the HTML dynamically using jQuery
                            var cardHTML = `
                            <a href="nextconsultant.php?id=${value.id}">
                                <div class="card">
                                    <div class="ribbon">Top Choice</div>
                                    <div class="firstcardp">
                                        <img src="https://res.cloudinary.com/dtjgawrwz/image/upload/v1733821953/consultingimg1_bk5jfv.png" alt="Consultant" class="profile-img">
                                        <p class="flex-stars">
                                            <span class="stars">⭐️⭐️⭐️⭐️⭐️</span>
                                        </p>
                                        <p class="second-cls-pe">${value.total_order} orders</p>
                                    </div>
                                    <div>
                                        <div class="flex-username">
                                            <h5>${value.user_name}</h5>
                                            <div class="verification-ticks">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                                    <mask id="mask0_1148_2283" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="30" height="30">
                                                        <rect width="30" height="30" fill="#D9D9D9" />
                                                    </mask>
                                                    <g mask="url(#mask0_1148_2283)">
                                                        <path d="M10.75 28.125L8.375 24.125L3.875 23.125L4.3125 18.5L1.25 15L4.3125 11.5L3.875 6.875L8.375 5.875L10.75 1.875L15 3.6875L19.25 1.875L21.625 5.875L26.125 6.875L25.6875 11.5L28.75 15L25.6875 18.5L26.125 23.125L21.625 24.125L19.25 28.125L15 26.3125L10.75 28.125ZM11.8125 24.9375L15 23.5625L18.25 24.9375L20 21.9375L23.4375 21.125L23.125 17.625L25.4375 15L23.125 12.3125L23.4375 8.8125L20 8.0625L18.1875 5.0625L15 6.4375L11.75 5.0625L10 8.0625L6.5625 8.8125L6.875 12.3125L4.5625 15L6.875 17.625L6.5625 21.1875L10 21.9375L11.8125 24.9375ZM13.6875 19.4375L20.75 12.375L19 10.5625L13.6875 15.875L11 13.25L9.25 15L13.6875 19.4375Z" fill="#689A18" />
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                        <p>${value.expertise}<br>${value.language}<br>Exp: ${value.experience} Years</p>
                                        <p><span class="price grayprice">₹5 </span> <span class="old-price">₹20/min</span></p>
                                        <button class="btn btn-outline-success online-btn">chat</button>
                                        <button class="btn btn-outline-success online-btn">Call</button>
                                        <button class="btn btn-outline-success online-btn">video call</button>
                                    </div>
                                </div>
                            </a>`;

                            // Append the generated HTML to the #cards-container
                            $('#parent-card-div').prepend(cardHTML);
                        } else {
                            // Generate the HTML dynamically using jQuery
                            var cardHTML = `
                            <a href="offlineconsultant.php?id=${value.id}">
                                <div class="card">
                                    <div class="ribbon">Top Choice</div>
                                    <div class="firstcardp">
                                        <img src="https://res.cloudinary.com/dtjgawrwz/image/upload/v1733821953/consultingimg1_bk5jfv.png" alt="Consultant" class="profile-img">
                                        <p class="flex-stars">
                                            <span class="stars">⭐️⭐️⭐️⭐️⭐️</span>
                                        </p>
                                        <p class="second-cls-pe">${value.total_order} orders</p>
                                        <div class="offline-line">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12" fill="none">
                                                <circle cx="6.5" cy="6" r="6" fill="#808080" />
                                            </svg>
                                            <p>Offline</p>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex-username">
                                            <h5>${value.user_name}</h5>
                                            <div class="verification-ticks">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                                    <mask id="mask0_1148_2283" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="30" height="30">
                                                        <rect width="30" height="30" fill="#D9D9D9" />
                                                    </mask>
                                                    <g mask="url(#mask0_1148_2283)">
                                                        <path d="M10.75 28.125L8.375 24.125L3.875 23.125L4.3125 18.5L1.25 15L4.3125 11.5L3.875 6.875L8.375 5.875L10.75 1.875L15 3.6875L19.25 1.875L21.625 5.875L26.125 6.875L25.6875 11.5L28.75 15L25.6875 18.5L26.125 23.125L21.625 24.125L19.25 28.125L15 26.3125L10.75 28.125ZM11.8125 24.9375L15 23.5625L18.25 24.9375L20 21.9375L23.4375 21.125L23.125 17.625L25.4375 15L23.125 12.3125L23.4375 8.8125L20 8.0625L18.1875 5.0625L15 6.4375L11.75 5.0625L10 8.0625L6.5625 8.8125L6.875 12.3125L4.5625 15L6.875 17.625L6.5625 21.1875L10 21.9375L11.8125 24.9375ZM13.6875 19.4375L20.75 12.375L19 10.5625L13.6875 15.875L11 13.25L9.25 15L13.6875 19.4375Z" fill="#689A18" />
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                        <p>${value.expertise}<br>${value.language}<br>Exp: ${value.experience} Years</p>
                                        <p><span class="price grayprice">₹5 </span> <span class="old-price">₹20/min</span></p>
                                        <button class="btn btn-outline-success offline-btn">chat</button>
                                        <button class="btn btn-outline-success offline-btn">Call</button>
                                        <button class="btn btn-outline-success offline-btn">video call</button>
                                    </div>
                                </div>
                            </a>`;

                            // Append the generated HTML to the #cards-container
                            $('#parent-card-div').prepend(cardHTML);
                        }
                    });

                });

        };

        getAllAgents();
        setInterval(getAllAgents, 60000);
    </script>
    <script src="js/model.js"></script>