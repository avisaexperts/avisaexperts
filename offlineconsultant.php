<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
include 'include/db.php'; // Database connection file

$agentId = $_GET['id'];
// printf( $_SESSION['id'] ."<br>");
// printf( $_SESSION['userName'] ."<br>");

?>

<?php require 'header.php'; ?>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/nextconsultant.css">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
<div class="final-call-con">
    <div class="profile-section">

        <?php
        $query = "SELECT * FROM users where id='$agentId'";

        if ($statement = $conn->prepare($query)) {
            $statement->execute();
            $result = $statement->get_result(); // Get the result set
            $agentData = $result->fetch_all(MYSQLI_ASSOC); // Fetch all results as an associative array


            foreach ($agentData as $key => $value) {

                // print_r($value);
        ?>
                <div class="outeriprofilesec">
                    <img src="https://res.cloudinary.com/dtjgawrwz/image/upload/v1733821943/constimg_djeflf.jpg" alt="Profile" class="profile-image">
                    <div class="rating">
                        <p> <?= $value['total_order']; ?> orders</p>
                        <p>⭐️⭐️⭐️⭐️⭐️</p>
                        <div class="offlinetitle">Offline</div>
                    </div>
                </div>
                <div class="profile-info">
                    <h2><?= $value['user_name']; ?> <span class="status-active"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                viewBox="0 0 13 13" fill="none">
                                <circle cx="6.43564" cy="6.5001" r="6.43564" fill="#3ED33E" />
                            </svg> Offline</span></h2>
                    <p class="job-title"><?= $value['expertise']; ?> visa consultants</p>
                    <p class="languages"><?= $value['language']; ?></p>
                    <p class="experience">Exp: <?= $value['experience']; ?> Years</p>
                    <div class="verified">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="27" viewBox="0 0 28 27" fill="none">
                            <path
                                d="M9.75 26.625L7.375 22.625L2.875 21.625L3.3125 17L0.25 13.5L3.3125 10L2.875 5.375L7.375 4.375L9.75 0.375L14 2.1875L18.25 0.375L20.625 4.375L25.125 5.375L24.6875 10L27.75 13.5L24.6875 17L25.125 21.625L20.625 22.625L18.25 26.625L14 24.8125L9.75 26.625ZM10.8125 23.4375L14 22.0625L17.25 23.4375L19 20.4375L22.4375 19.625L22.125 16.125L24.4375 13.5L22.125 10.8125L22.4375 7.3125L19 6.5625L17.1875 3.5625L14 4.9375L10.75 3.5625L9 6.5625L5.5625 7.3125L5.875 10.8125L3.5625 13.5L5.875 16.125L5.5625 19.6875L9 20.4375L10.8125 23.4375ZM12.6875 17.9375L19.75 10.875L18 9.0625L12.6875 14.375L10 11.75L8.25 13.5L12.6875 17.9375Z"
                                fill="#028C4C" />
                        </svg>
                        <span> Verified</span>
                    </div>
                    <div id="htmlModal" class="modal">
                        <span class="close">&times;</span>
                        <div class="modal-content">
                            <!-- Your HTML content here -->
                            <p class="popuptextoffline">Our consultant is offline, so chat, call, and video call options are not
                                available at the moment.
                            </p>
                            <div class="popupbtns">
                                <button class="cancelbtn"><a href="offlineconsultant.php">Cancel</a></button>
                            </div>
                        </div>
                    </div>
                    <div class="actions">
                        <div class="services-final-call-con">
                            <div class="service-option">
                                <div class="price-info">
                                    <div class="price-current offline-free">Free</div>
                                    <div class="price-original">₹20/min</div>
                                </div>
                                <div class="button offline-btn  chat" style="pointer-events:none;">
                                    <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                            viewBox="0 0 24 25" fill="none">
                                            <path
                                                d="M13.1252 12.5002C13.1252 12.7227 13.0593 12.9402 12.9356 13.1252C12.812 13.3102 12.6363 13.4544 12.4308 13.5395C12.2252 13.6247 11.999 13.6469 11.7808 13.6035C11.5625 13.5601 11.3621 13.453 11.2047 13.2956C11.0474 13.1383 10.9403 12.9379 10.8969 12.7196C10.8535 12.5014 10.8757 12.2752 10.9609 12.0696C11.046 11.8641 11.1902 11.6884 11.3752 11.5647C11.5602 11.4411 11.7777 11.3752 12.0002 11.3752C12.2986 11.3752 12.5848 11.4937 12.7957 11.7047C13.0067 11.9156 13.1252 12.2018 13.1252 12.5002ZM7.87524 11.3752C7.65274 11.3752 7.43523 11.4411 7.25023 11.5647C7.06522 11.6884 6.92103 11.8641 6.83588 12.0696C6.75073 12.2752 6.72845 12.5014 6.77186 12.7196C6.81527 12.9379 6.92241 13.1383 7.07975 13.2956C7.23708 13.453 7.43754 13.5601 7.65577 13.6035C7.874 13.6469 8.1002 13.6247 8.30576 13.5395C8.51133 13.4544 8.68703 13.3102 8.81065 13.1252C8.93426 12.9402 9.00024 12.7227 9.00024 12.5002C9.00024 12.2018 8.88172 11.9156 8.67074 11.7047C8.45976 11.4937 8.17361 11.3752 7.87524 11.3752ZM16.1252 11.3752C15.9027 11.3752 15.6852 11.4411 15.5002 11.5647C15.3152 11.6884 15.171 11.8641 15.0859 12.0696C15.0007 12.2752 14.9785 12.5014 15.0219 12.7196C15.0653 12.9379 15.1724 13.1383 15.3298 13.2956C15.4871 13.453 15.6875 13.5601 15.9058 13.6035C16.124 13.6469 16.3502 13.6247 16.5558 13.5395C16.7613 13.4544 16.937 13.3102 17.0606 13.1252C17.1843 12.9402 17.2502 12.7227 17.2502 12.5002C17.2502 12.2018 17.1317 11.9156 16.9207 11.7047C16.7098 11.4937 16.4236 11.3752 16.1252 11.3752ZM21.7502 12.5002C21.7506 14.1835 21.3152 15.8382 20.4863 17.3033C19.6574 18.7684 18.4633 19.9939 17.0203 20.8606C15.5772 21.7273 13.9344 22.2056 12.2516 22.249C10.5689 22.2924 8.90355 21.8994 7.41774 21.1083L4.22556 22.1723C3.96126 22.2605 3.67764 22.2733 3.40649 22.2093C3.13533 22.1453 2.88736 22.007 2.69035 21.81C2.49335 21.613 2.35511 21.3651 2.29112 21.0939C2.22713 20.8228 2.23992 20.5391 2.32806 20.2748L3.39212 17.0827C2.69663 15.7751 2.30818 14.3262 2.25624 12.8461C2.2043 11.3659 2.49025 9.8934 3.09237 8.54028C3.69449 7.18715 4.59697 5.98898 5.73129 5.03671C6.86561 4.08444 8.20197 3.4031 9.63893 3.04441C11.0759 2.68572 12.5757 2.65911 14.0245 2.96659C15.4732 3.27407 16.8329 3.90757 18.0003 4.819C19.1677 5.73043 20.1121 6.89583 20.7619 8.22674C21.4116 9.55765 21.7496 11.0191 21.7502 12.5002ZM20.2502 12.5002C20.2499 11.2346 19.9584 9.98618 19.3983 8.85135C18.8383 7.71652 18.0246 6.72575 17.0204 5.95568C16.0161 5.18562 14.8482 4.65691 13.6069 4.41045C12.3656 4.164 11.0843 4.20641 9.86203 4.5344C8.63976 4.86239 7.50933 5.46717 6.5582 6.30196C5.60707 7.13674 4.86073 8.17914 4.37693 9.34852C3.89312 10.5179 3.68482 11.7829 3.76814 13.0457C3.85147 14.3084 4.22417 15.5351 4.85743 16.6308C4.91058 16.7228 4.94358 16.825 4.95425 16.9307C4.96492 17.0364 4.95301 17.1432 4.91931 17.2439L3.75024 20.7502L7.25649 19.5811C7.33286 19.555 7.41299 19.5417 7.49368 19.5417C7.6254 19.5419 7.75474 19.5769 7.86868 19.643C9.12287 20.3686 10.5461 20.7511 11.995 20.752C13.444 20.753 14.8677 20.3722 16.1228 19.6482C17.3779 18.9241 18.4202 17.8823 19.1447 16.6275C19.8693 15.3726 20.2506 13.9491 20.2502 12.5002Z"
                                                fill="#808080" />
                                        </svg></div>
                                    <div class="label">chat</div>
                                </div>
                            </div>
                            <div class="service-option">
                                <div class="price-info">
                                    <div class="price-current offline-free">Free</div>
                                    <div class="price-original">₹40/min</div>
                                </div>
                                <div class="button offline-btn call" style="pointer-events:none;">
                                    <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                            viewBox="0 0 24 25" fill="none">
                                            <path
                                                d="M19.95 21.5C17.8667 21.5 15.8043 21.05 13.763 20.15C11.7217 19.25 9.86733 17.9667 8.2 16.3C6.53267 14.6333 5.24933 12.7833 4.35 10.75C3.45067 8.71667 3.00067 6.65 3 4.55V3.5H8.9L9.825 8.525L6.975 11.4C7.34167 12.05 7.75 12.6667 8.2 13.25C8.65 13.8333 9.13333 14.375 9.65 14.875C10.1333 15.3583 10.6627 15.821 11.238 16.263C11.8133 16.705 12.434 17.1173 13.1 17.5L16 14.6L21 15.625V21.5H19.95Z"
                                                fill="#808080" />
                                        </svg></div>
                                    <div class="label">Call</div>
                                </div>
                            </div>
                            <div class="service-option">
                                <div class="price-info">
                                    <div class="price-current offline-free">₹20/min</div>
                                    <div class="price-original">₹60/min</div>
                                </div>
                                <div class="button offline-btn video vediolabel" style="pointer-events:none;">
                                    <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                            viewBox="0 0 24 25" fill="none">
                                            <path
                                                d="M17 11V7.5C17 7.23478 16.8946 6.98043 16.7071 6.79289C16.5196 6.60536 16.2652 6.5 16 6.5H4C3.73478 6.5 3.48043 6.60536 3.29289 6.79289C3.10536 6.98043 3 7.23478 3 7.5V17.5C3 17.7652 3.10536 18.0196 3.29289 18.2071C3.48043 18.3946 3.73478 18.5 4 18.5H16C16.2652 18.5 16.5196 18.3946 16.7071 18.2071C16.8946 18.0196 17 17.7652 17 17.5V14L21 18V7L17 11ZM14 13.5H11V16.5H9V13.5H6V11.5H9V8.5H11V11.5H14V13.5Z"
                                                fill="#808080" />
                                        </svg></div>
                                    <div class="label">video call</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
        <?php
            }
        }
        ?>
    </div>

    <div class="info-section">
        <div class="about-me">
            <h3>About me</h3>
            <p>As a dedicated U.S. visa consultant, I specialize in navigating the complexities of U.S. immigration
                processes. With extensive knowledge of visa categories and requirements, I assist clients in
                preparing applications, gathering necessary documentation, and understanding legal procedures. My
                goal is to provide personalized guidance to ensure a smooth and successful visa application
                experience. Committed to client satisfaction, I stay updated on immigration policies to offer the
                best advice and support.</p>
        </div>

        <div class="user-reviews">
            <h3>User Reviews</h3>
            <div class="review">
                <p><img src="https://res.cloudinary.com/dtjgawrwz/image/upload/v1733821931/constface_wfj2hk.jpg" alt=""><strong>Rohit Singh ⭐⭐⭐⭐⭐</strong></p>
                <p>Maine recently Urvasikha ke saath apni U.K. visa application ke liye kaam kiya, aur main bilkul
                    khush hoon...</p>
            </div>
        </div>
    </div>
</div>
<script src="js/nextconsultant.js"></script>
<?php require 'footer.php'; ?>