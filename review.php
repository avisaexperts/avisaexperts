<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dashboardcss/dashboard.css">
    <link rel="stylesheet" href="dashboardcss/chatdashboard.css">
    <link rel="stylesheet" href="dashboardcss/reviewdash.css">
    <!-- <link rel="stylesheet" href="clients.css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
</head>

<body>
    <main>
        <nav class="main-menu">
            <div class="dashlogo">
                <div class="newlogo">
                    <a href="index.php"><svg xmlns="http://www.w3.org/2000/svg" width="88" height="64"
                            viewBox="0 0 88 64" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M9.92293 46.2929L10.49 46.0081C10.475 45.3072 10.5224 44.507 10.262 44.1205C9.94633 44.2214 9.95893 44.4028 9.94153 44.9248C9.92653 45.3745 9.92593 45.8415 9.92293 46.2929ZM44.8653 43.8373L44.4267 43.8538L44.4165 44.4381L50.7379 44.4627L50.7385 43.8497L50.2645 43.8423C50.1127 42.8476 49.8523 41.7191 49.65 40.7162C49.5438 40.1893 49.4418 39.678 49.3416 39.1618C49.086 37.8445 49.1286 38.5372 49.2198 37.4736L45.9106 37.4711C45.994 38.4625 46.0516 37.8363 45.7912 39.1495C45.5326 40.4536 45.0327 42.7319 44.8653 43.8373ZM34.8248 20.5809C34.9706 20.7607 34.9274 20.8624 34.9262 21.18C34.8932 21.2137 34.8224 21.2621 34.7864 21.2892C34.8554 21.5551 34.9196 21.2539 34.8722 21.8571C34.787 22.9446 34.3591 24.4703 33.8851 25.3501C33.8377 25.4379 33.7939 25.4888 33.7615 25.5897C33.8773 25.8868 33.8725 25.5585 33.8701 26.2693C33.8689 26.4974 33.8935 26.8749 33.8623 27.0703C33.7987 27.1203 33.7249 27.1146 33.6601 27.0735C33.6523 26.966 33.6739 26.8175 33.6343 26.7338L33.6229 27.3427C33.6421 27.4453 33.6397 27.3903 33.7195 27.4576C33.6631 27.8335 33.3583 28.3891 33.231 28.6731C33.0606 29.0547 32.8032 29.4224 32.5644 29.6251C32.6652 29.8779 32.6892 29.6194 32.688 30.1463C32.6874 30.3679 32.6934 30.5977 32.688 30.8176C32.6256 30.8939 32.5368 30.9177 32.4438 30.9645C32.2926 31.04 32.334 31.0491 32.3274 31.2862C32.1252 31.2739 32.1672 31.3421 32.1822 31.6465L32.3118 31.6843C32.3604 32.0848 32.2866 35.6828 32.3232 36.089C32.346 36.341 32.3982 36.0029 32.3886 36.7973C32.3844 37.1469 32.3772 37.4957 32.373 37.8445C32.3514 39.8323 32.3328 41.9998 32.2818 43.9572L32.2374 47.5527C32.2362 47.8703 32.2152 47.7456 32.0412 47.8202L32.0358 52.8069C31.1399 52.8717 30.2722 52.9259 29.44 52.971C29.5036 51.7662 29.3734 50.0083 29.3542 48.8256C29.2864 44.5087 29.32 45.2301 24.8484 43.6904C24.483 43.5649 24.7368 43.4869 24.264 43.546C24.015 43.5772 23.7869 43.6371 23.5463 43.6043C23.3735 42.9543 23.1827 42.3256 22.9931 41.7289C22.7459 40.9517 22.8389 40.2443 22.7543 39.3062C22.5215 38.9615 22.444 39.2077 22.1566 38.6603C21.8608 38.0957 20.9937 36.3246 20.8605 35.7772H19.9965C19.7937 35.8929 16.8504 36.2753 15.4601 36.7752C13.9636 37.3135 12.8769 37.9701 11.6637 38.8425L11.6373 39.5861C11.4476 39.7396 11.264 39.9792 11.0636 40.1359C10.7654 40.369 10.7054 40.1474 10.3358 39.9776C10.0789 40.8163 9.5347 41.3391 9.4855 42.5062L9.09967 52.9825C5.85583 52.8225 0.881465 52.6009 0.318623 52.8233C0.27782 52.8397 0.190813 52.98 0.158411 52.9218C0.126008 52.8627 0.0480035 52.985 0 53.0309C1.26549 52.7141 10.6526 54.4138 12.7683 54.7273C17.0773 55.3658 21.418 55.8788 25.8121 56.2941C38.2318 57.4677 61.7361 59.0016 73.4832 50.2134C76.0448 48.2971 78.0657 45.8317 79.5394 42.8238C85.8093 25.7177 72.3107 19.4475 71.0728 16.7072C70.7992 16.1015 71.0404 16.6382 70.6606 15.93L70.7722 16.6185C70.804 16.8089 70.9276 17.1873 70.9792 17.3687C72.1295 21.3778 74.6503 26.6287 73.8084 30.866C72.7529 36.1777 69.6561 40.2221 65.4372 43.3022L65.2614 40.5463C65.9034 39.719 65.8476 39.5762 65.8074 38.0858C65.7078 34.4025 65.793 36.3902 65.9605 35.2577C66.0751 34.4829 65.5242 30.6592 65.5008 29.5217C66.2671 29.0211 66.5053 28.4934 66.5983 27.0538C66.6931 25.5864 67.2193 26.5253 67.8728 24.9019C67.943 24.7263 68.0606 24.4161 68.0996 24.2282C68.2286 23.6061 68.0972 23.8473 68.1014 23.4657C68.1068 22.9922 68.8461 22.1025 67.844 21.5937L66.1921 20.8624L65.6646 21.9614C65.4432 21.6987 65.052 21.4665 64.929 20.9191C64.8042 20.3626 64.8624 19.807 64.7412 19.2185C64.3793 17.463 62.8138 17.8529 63.049 16.3305C63.2212 15.2135 62.839 13.5056 63.2356 12.9992C63.4607 12.8794 63.7241 12.7768 63.9575 12.6791L64.5737 12.3426C64.5863 12.2967 64.62 12.3049 64.641 12.3024L62.9104 12.1325C62.8558 11.5884 63.3845 10.794 63.5423 10.1825C63.2668 10.3672 63.5195 10.1735 63.2914 10.4066L62.7862 10.9556C62.449 11.3726 62.5666 11.499 62.0284 11.3176L61.6425 8.7307C61.5723 9.45375 61.5861 10.6233 61.3389 11.1723C60.9021 11.6368 60.7923 11.2495 60.4388 10.849C60.185 10.5617 59.8616 10.2564 59.6756 10.0266C59.879 10.5609 60.5109 11.6524 60.4604 12.0931C60.1484 12.3 59.4818 12.222 59.0335 12.1736C58.9405 10.3803 58.5373 8.99005 58.4923 7.14263C58.4617 5.8812 58.7713 5.97148 58.1629 4.86434C57.9823 4.53524 57.9253 4.38423 58.0627 3.88606C58.2295 3.28202 58.1977 3.52084 58.7245 3.44698L58.7287 2.43669L58.0711 2.42027C58.0291 2.02387 58.5181 1.06282 57.8287 0.227335L57.6642 0.967617L57.3354 0L57.18 0.721404C57.1512 0.942175 57.105 1.11452 57.0798 1.31396C56.9634 2.243 57.2388 1.63239 57.1908 2.43422L56.556 2.43176C56.556 3.51181 56.4582 3.35013 57.108 3.46585C57.0516 4.18398 56.874 4.71497 56.9448 5.41668C56.9724 5.68669 57.4752 7.61454 57.465 9.10166C57.4494 11.4628 57.5196 10.5814 57.7008 11.9947C57.9331 13.8076 57.7008 13.7272 57.4608 14.5947C57.1656 15.6616 56.7342 17.4031 57.7993 17.5172C57.7158 18.3133 57.825 18.5439 58.1419 18.9329C58.0627 19.6519 57.8761 20.9814 58.2355 21.4771C58.6621 22.0664 58.3591 21.7151 58.5913 22.4768C58.8847 23.4419 58.3429 23.1185 57.9925 25.3944C57.696 27.3181 58.3597 26.948 58.6213 27.1318C57.7494 29.8393 58.3921 30.5296 58.4611 31.3412C58.5331 32.1849 58.6333 35.5055 58.5211 36.1785C57.7752 40.6382 58.8313 41.7199 58.2823 43.0954C58.0717 43.6231 57.9121 44.2001 57.7446 44.8214L57.0192 44.823L57.0438 47.7882C55.4495 48.4161 53.8005 48.9709 52.1234 49.46L50.7865 45.6774C50.7283 45.4033 50.8363 45.551 50.6989 45.4525H44.3907C44.3553 46.0237 43.547 48.0771 43.3106 48.7386L42.4537 51.1162C42.3469 51.355 42.1657 51.4995 42.0535 51.671C40.7082 51.8844 39.3785 52.0674 38.0764 52.225C38.0806 50.9086 38.0704 48.6139 38.0704 48.229C38.071 47.6438 38.0944 47.9023 37.8646 47.7792C37.8298 47.6651 37.6714 39.3637 37.6378 37.8421C37.6324 37.6049 37.618 37.3726 37.6108 37.1346C37.5916 36.4822 37.699 36.7046 37.738 36.5675C37.7986 36.3533 37.5934 32.0749 37.6672 31.6794L37.8238 31.6441C37.8274 31.5776 37.8292 31.5046 37.8292 31.4422C37.828 31.118 37.7212 31.4028 37.6552 31.2329C37.6288 31.1648 37.6702 31.1607 37.6294 31.0359C37.2459 31.0146 37.2273 31.1746 37.2669 30.303C37.3011 30.2645 37.2999 30.2727 37.3365 30.2374L37.4091 30.143C37.3443 30.0289 37.2861 29.9862 37.2189 29.8984C37.1433 29.7999 37.0971 29.7187 37.0287 29.621C36.6969 29.1491 36.3543 28.1881 36.2055 27.5397C36.2487 27.4937 36.2589 27.5093 36.3099 27.4831L36.2955 26.7912C36.2607 26.879 36.2775 26.9964 36.2667 27.1047C36.1929 27.1326 36.1299 27.1376 36.0609 27.0957L36.0549 26.0115C36.0615 25.8392 36.1011 25.8802 36.1521 25.7563C36.1353 25.6857 36.0159 25.4994 35.93 25.2943C35.8646 25.1375 35.7968 24.966 35.735 24.7977C35.4218 23.9434 35.1488 22.8543 35.063 21.8965C35.0066 21.2654 35.0942 21.5198 35.1566 21.2752L34.9988 21.1702C34.9976 20.8739 34.9556 20.7483 35.099 20.5776L35.057 20.5177C35.0354 20.4898 35.0336 20.4956 35.0138 20.4636C34.9784 20.4061 35.0084 20.4668 34.9838 20.3946C34.9814 20.3889 34.9796 20.3807 34.9778 20.3749L34.9514 20.2953C34.9082 20.4956 34.9802 20.356 34.8362 20.5629C34.8338 20.5661 34.829 20.5727 34.826 20.5785L34.8248 20.5809ZM28.7715 53.0047C28.3929 53.0235 28.0221 53.0408 27.6596 53.0564C27.7262 52.147 27.5582 51.8393 28.0911 51.1589C28.7667 51.1983 28.7853 52.1429 28.7709 53.0055L28.7715 53.0047ZM26.7278 53.0925C26.2513 53.1097 25.7917 53.1245 25.3507 53.1368C25.3381 52.1109 25.2805 50.7297 25.9741 50.632C26.7812 50.5179 26.7404 52.0543 26.7278 53.0925ZM24.27 53.1639L24.2322 53.1647C23.6789 53.177 23.1257 53.186 22.5725 53.1942C22.5755 51.9271 22.426 50.4244 23.3603 50.3341C23.8079 50.2906 24.1386 50.742 24.2298 51.2902C24.2982 51.6997 24.2778 52.5648 24.27 53.1639ZM21.6772 53.2049C21.0165 53.2115 20.3565 53.2148 19.697 53.2156C19.6718 51.8614 19.6184 50.4449 20.6559 50.4055C21.796 50.362 21.7084 52.0346 21.6772 53.2049ZM18.635 53.2156C18.0823 53.2139 17.5303 53.2107 16.9788 53.2057C16.9512 51.9886 16.83 50.3948 17.8045 50.4047C18.7706 50.4145 18.6668 51.9689 18.635 53.2156ZM16.0932 53.1967C15.6449 53.1918 15.1973 53.1852 14.7497 53.1778C14.7221 52.1528 14.6003 50.6599 15.4223 50.6624C16.2276 50.6648 16.1232 52.161 16.0932 53.1967ZM13.8328 53.1614C13.4896 53.1549 13.147 53.1475 12.8049 53.1401C12.7935 52.4532 12.7425 51.534 12.9262 51.0932C13.204 50.7412 13.6564 50.7625 13.7686 51.3985C13.915 52.2316 13.7146 52.8348 13.8328 53.1614ZM11.9649 53.1204L11.8341 53.1171C11.7303 53.1146 11.5064 53.104 11.1926 53.0892C11.1884 52.3859 11.1182 51.296 11.5761 51.0735C12.0849 51.0973 11.7777 52.6509 11.9649 53.1204ZM10.4552 53.0523L9.88393 53.0235C9.88453 52.3522 9.82152 51.5758 10.1918 51.355C10.5074 51.6103 10.4222 52.17 10.4552 53.0523ZM50.7751 49.8408C48.5268 50.4473 46.2412 50.943 43.979 51.3485C43.8782 51.1704 43.889 51.3953 44.3349 50.0247C44.7141 48.8576 45.1731 47.9762 46.0654 47.3861C47.5565 46.3996 49.08 46.984 50.1259 48.4522C50.3881 48.8207 50.5903 49.3213 50.7757 49.84L50.7751 49.8408ZM46.237 36.3697L48.8862 36.3755L48.5454 31.809C48.3287 28.6715 48.1829 25.4379 48.0959 22.2847C48.0599 20.9814 47.8775 18.5841 48.2075 17.5459L46.9288 17.5336C47.1677 18.4019 47.1209 18.6966 47.1023 19.7266C47.0585 22.1444 46.9787 24.636 46.8556 27.0399L46.4176 34.0627C46.36 34.8169 46.261 35.6319 46.237 36.3697ZM46.3156 43.8332L48.8052 43.8488L48.2615 39.3448L46.8658 39.3325L46.3156 43.8332ZM44.3763 45.1324L50.7715 45.1439L50.8669 44.7713L44.3055 44.7557L44.3769 45.1316L44.3763 45.1324ZM45.8644 37.1543L49.2426 37.1674L49.263 36.6709H45.8644V37.1543ZM47.4659 15.1839C47.1179 15.5959 46.978 15.7683 47.0002 16.6473L48.1379 16.6653C48.1565 15.7773 48.0197 15.5968 47.6717 15.1839C47.6657 14.932 47.6669 14.6792 47.6681 14.4272L47.6627 13.9053C47.6201 13.6804 47.6891 13.8536 47.5895 13.719C47.4257 13.7969 47.5085 13.5778 47.4641 13.9553L47.4653 15.1848L47.4659 15.1839ZM46.7992 17.248L48.3264 17.2538L48.3365 16.9558C48.1157 16.8754 47.0567 16.8992 46.792 16.9353L46.7992 17.248ZM59.7338 13.6115C59.699 14.8491 59.5988 14.8056 60.0026 15.1289C60.1538 15.2504 60.002 15.147 60.1838 15.2521C60.4989 14.3526 60.1502 14.1933 60.1472 13.078L59.1295 12.5347C59.2454 13.0419 59.4428 13.3365 59.7338 13.6115ZM34.7317 31.2748C33.7705 31.4208 32.964 32.6363 33.0972 34.1226C33.2142 35.4284 34.0837 36.5298 35.1794 36.3508C36.1365 36.1941 36.9465 34.9917 36.8085 33.4898C36.6885 32.1849 35.828 31.1073 34.7317 31.2748ZM34.7438 34.0011C34.9298 34.1078 34.916 34.0233 34.9994 33.9815C35.0936 33.9339 35.9252 33.9371 36.0362 33.8789C35.9996 33.8592 35.5856 33.8222 35.504 33.8116L35.0012 33.7328C34.8554 33.6458 34.964 31.9855 34.8878 31.7335L34.823 32.8948C34.8134 33.0893 34.8098 33.5777 34.754 33.7295C34.7131 33.8411 34.724 33.8805 34.7438 34.0011ZM9.91333 50.0485L10.4444 49.9163C10.4846 49.2507 10.5524 47.9819 10.1905 47.6233C9.93013 47.7702 9.91933 47.7234 9.90853 48.6114C9.90313 49.0882 9.88093 49.5749 9.91333 50.0485ZM11.1902 49.7169L11.8533 49.6168C11.8671 49.5536 12.0885 46.9642 11.5791 46.9667C11.0528 46.9692 11.2022 49.08 11.1902 49.7169ZM11.2112 45.5534L11.9493 45.244C11.9373 44.53 12.1431 42.5751 11.5136 42.6596C11.0228 42.7253 11.2214 44.3421 11.2112 45.5534ZM12.8325 44.8427C13.186 44.8714 13.5088 44.6745 13.8436 44.5661C13.861 44.0286 13.81 43.4812 13.798 42.9321C13.7842 42.2895 13.8016 41.8118 13.2658 41.8389C12.6003 41.8726 12.8211 43.1611 12.8325 44.8427ZM12.8361 49.4173L13.8382 49.3049C13.8784 48.7214 13.8106 48.142 13.7998 47.5642C13.7884 46.9519 13.8286 46.3438 13.342 46.3003C12.5973 46.233 12.8043 47.6618 12.8361 49.4173ZM27.6758 49.323L28.7457 49.4403C28.8231 48.4908 28.9299 46.2043 28.2537 46.1288C27.5216 46.0475 27.6356 48.4325 27.6758 49.323ZM14.7569 44.2641L16.0746 43.9498C16.131 42.8968 16.347 40.7326 15.3605 40.8713C14.4701 40.9969 14.7389 43.1004 14.7569 44.2641ZM25.3693 48.8995L26.7008 48.906C26.7812 47.8293 26.8724 45.5994 26.0371 45.5986C25.2001 45.5978 25.2919 47.812 25.3693 48.8995ZM14.7509 49.1301L16.0866 49.03C16.0848 47.8375 16.383 45.711 15.4175 45.6831C14.4209 45.6544 14.7581 47.9827 14.7509 49.1301ZM16.9776 43.7938L18.605 43.624C18.7262 42.3642 18.7964 40.5053 17.8045 40.4946C16.701 40.4823 16.9866 42.4717 16.9776 43.7938ZM16.9776 48.9307L18.6272 48.9586C18.6188 47.6233 18.9608 45.1833 17.8045 45.171C16.641 45.1587 16.9872 47.6323 16.9776 48.9307ZM19.7054 43.555L21.6706 43.3851C21.6628 41.9087 21.8926 40.035 20.6517 40.067C19.4684 40.0974 19.6472 42.1885 19.7054 43.555ZM22.5749 48.9684L24.2652 48.9635C24.2574 47.588 24.549 45.0036 23.4191 44.9847C22.2688 44.965 22.5749 47.606 22.5749 48.9684ZM19.691 48.9651L21.6706 48.966C21.6628 47.5461 21.997 45.0462 20.7297 44.9896C19.3562 44.9281 19.7006 47.4518 19.691 48.9651Z"
                                fill="#001E74" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M5.52344 55.1347C6.80206 54.9924 16.0943 57.4441 18.1913 57.9356C22.4634 58.9385 26.7734 59.8355 31.141 60.6538C43.4856 62.9657 66.7839 66.3798 78.9332 59.9952C81.5824 58.6026 83.8152 57.0453 85.4303 54.5944C88.7338 49.5809 87.8716 43.4296 85.8323 37.9842C84.8306 35.309 84.5326 35.0078 83.6596 33.0319C83.415 32.4791 83.4769 32.7712 83.4378 32.293L83.3633 32.9243C83.3862 33.0931 83.4913 33.4332 83.5346 33.5954C84.4917 37.1873 84.8883 41.0027 83.8452 44.5839C78.9356 61.4415 42.5837 58.8814 29.7122 57.7784C25.5614 57.4226 21.4245 56.9601 17.3351 56.4429C16.4404 56.3296 6.66987 54.7979 5.85211 54.9883C5.81065 54.9982 5.71691 55.1107 5.68747 55.0569C5.65743 55.0023 5.57391 55.1 5.52404 55.1347H5.52344Z"
                                fill="#F58634" />
                        </svg></a>
                    <h5>A VISA EXPERTS</h5>
                </div>
                <div class="menu">
                    <div class="line1"></div>
                    <div class="line1"></div>
                    <div class="line1"></div>
                </div>
            </div>

            <ul class="allmenutabs">
                <li class="nav-item " data-tab="home">
                    <b></b>
                    <b></b>
                    <a href="profiledash.php">
                        <i class="fa fa-house nav-icon"></i>
                        <span class="nav-text">Profile</span>
                    </a>
                </li>
                <li class="nav-item active" data-tab="profile">
                    <b></b>
                    <b></b>
                    <a href="dashboard.php">
                        <i class="fa fa-user nav-icon"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item" data-tab="schedule">
                    <b></b>
                    <b></b>
                    <a href="newclient.php">
                        <i class="fa fa-calendar-check nav-icon"></i>
                        <span class="nav-text">Clients</span>
                    </a>
                </li>
                <li class="nav-item" data-tab="activities">
                    <b></b>
                    <b></b>
                    <a href="calldashboard.php">
                        <i class="fa fa-person-running nav-icon"></i>
                        <span class="nav-text">Calls</span>
                    </a>
                </li>
                <li class="nav-item " data-tab="settings">
                    <b></b>
                    <b></b>
                    <a href="chatdashboard.php">
                        <i class="fa fa-sliders nav-icon"></i>
                        <span class="nav-text">Chats</span>
                    </a>
                </li>
                <li class="nav-item" data-tab="schedule">
                    <b></b>
                    <b></b>
                    <a href="#">
                        <i class="fa fa-calendar-check nav-icon"></i>
                        <span class="nav-text">Video Call</span>
                    </a>
                </li>
                <li class="nav-item" data-tab="schedule">
                    <b></b>
                    <b></b>
                    <a href="Attandancedash.php">
                        <i class="fa fa-calendar-check nav-icon"></i>
                        <span class="nav-text">Attendance</span>
                    </a>
                </li>
                <li class="nav-item" data-tab="schedule">
                    <b></b>
                    <b></b>
                    <a href="#">
                        <i class="fa fa-calendar-check nav-icon"></i>
                        <span class="nav-text">Calender</span>
                    </a>
                </li>
                <li class="nav-item logoutmenu" data-tab="schedule ">
                    <b></b>
                    <b></b>
                    <a href="#">
                        <i class="fa fa-calendar-check nav-icon"></i>
                        <span class="nav-text">Log Out</span>
                    </a>
                </li>
            </ul>
        </nav>

        <section class="content">
            <div class="dashboard-container">
                <div class="container">
                    <div class="dashboard-info">
                        <div class="dashboard-title">Hi, Good Morning!</div>
                        <div class="dashboard-subtitle">Anurag Kumar</div>
                    </div>
                    <div class="control-container">
                        <!-- Main Toggle Button -->
                        <div class="toggle-container">
                            <label class="toggle-button" id="toggleButton">
                                <input type="checkbox" id="toggleCheckbox">
                                <span class="slider"></span>
                            </label>
                            <div class="timer" id="timer"></div>
                            <div class="options" id="options">
                                <div class="option" data-time="5">☕</div>
                                <div class="option" data-time="10">🍔</div>
                                <div class="option" data-time="15">🍹</div>
                            </div>
                        </div>

                        <!-- Other controls -->
                        <div class="notification-icon">
                            <img src="https://res.cloudinary.com/dtjgawrwz/image/upload/v1733821946/notificationsvg_pmzzu9.svg" alt="">
                        </div>
                        <div class="form-button">
                            <div class="form-button-inner">
                                <div class="form-icon"><img src="https://res.cloudinary.com/dtjgawrwz/image/upload/v1733821926/docsvg_uzbojt.svg" alt=""></div>
                                <div class="form-text">Submitted form</div>
                            </div>
                        </div>
                        <!-- <div class="search-bar">
                            <div class="search-bar-content">
                                <div class="search-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28"
                                        fill="none">
                                        <path
                                            d="M21.0388 19.3852L26.0356 24.3809L24.3848 26.0317L19.3891 21.0349C17.5303 22.525 15.2183 23.3354 12.8359 23.332C7.03994 23.332 2.33594 18.628 2.33594 12.832C2.33594 7.03603 7.03994 2.33203 12.8359 2.33203C18.6319 2.33203 23.3359 7.03603 23.3359 12.832C23.3393 15.2144 22.5289 17.5264 21.0388 19.3852ZM18.6984 18.5195C20.1788 16.9967 21.0056 14.9558 21.0026 12.832C21.0026 8.32053 17.3474 4.66536 12.8359 4.66536C8.32444 4.66536 4.66927 8.32053 4.66927 12.832C4.66927 17.3435 8.32444 20.9987 12.8359 20.9987C14.9597 21.0017 17.0006 20.1748 18.5234 18.6945L18.6984 18.5195Z"
                                            fill="black" />
                                    </svg>
                                </div>
                                <div class="search-text">Search for Anything</div>
                            </div>
                        </div> -->
                        <img class="profile-img" id="profile" src="https://res.cloudinary.com/dtjgawrwz/image/upload/v1733821901/blogimg1_lxepf1.jpg" />
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
                        <div class="info-section-consultant">
                          
                            <a href="index.php"> <div style="text-align: center;">Logout</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="for-padding-left">
                <div class="review-rating-con">
                    <h1 class="section-title">Review and Rating</h1>
                    <div class="reviews-container">
                        <div class="review-card">
                            <div class="review-header">
                                <div class="review-user">
                                    <img src="https://res.cloudinary.com/dtjgawrwz/image/upload/v1733821945/reviewprofile_d8m2yf.png" alt="User Avatar" class="user-avatar">
                                    <div class="user-info">
                                        <p class="user-name">Rohan Sharma</p>
                                        <p class="review-date">14 Nov 2024</p>
                                    </div>
                                </div>
                                <div class="user-rating">
                                    ⭐⭐⭐⭐⭐
                                </div>
                            </div>
                            <p class="review-text">
                                I had an excellent experience with A Visa Experts! The team was incredibly professional,
                                knowledgeable, and supportive throughout the entire visa application process. They guided me step by
                                step, ensuring that all my documents were perfectly organized and submitted on time.
                            </p>
                        </div>
            
                        <!-- Repeat review-card for more reviews -->
                        <div class="review-card">
                            <div class="review-header">
                                <div class="review-user">
                                    <img src="https://res.cloudinary.com/dtjgawrwz/image/upload/v1733821945/reviewprofile_d8m2yf.png" alt="User Avatar" class="user-avatar">
                                    <div class="user-info">
                                        <p class="user-name">Dianne Russell</p>
                                        <p class="review-date">13 Nov 2024</p>
                                    </div>
                                </div>
                                <div class="user-rating">
                                    ⭐⭐⭐⭐
                                </div>
                            </div>
                            <p class="review-text">
                                The team guided me step by step, ensuring that all my documents were perfectly organized and
                                submitted on time. What impressed me the most was their prompt communication and ability to address
                                all my concerns patiently.
                            </p>
                        </div>
                        <div class="review-card">
                            <div class="review-header">
                                <div class="review-user">
                                    <img src="https://res.cloudinary.com/dtjgawrwz/image/upload/v1733821945/reviewprofile_d8m2yf.png" alt="User Avatar" class="user-avatar">
                                    <div class="user-info">
                                        <p class="user-name">Rohan Sharma</p>
                                        <p class="review-date">14 Nov 2024</p>
                                    </div>
                                </div>
                                <div class="user-rating">
                                    ⭐⭐⭐⭐⭐
                                </div>
                            </div>
                            <p class="review-text">
                                I had an excellent experience with A Visa Experts! The team was incredibly professional,
                                knowledgeable, and supportive throughout the entire visa application process. They guided me step by
                                step, ensuring that all my documents were perfectly organized and submitted on time.
                            </p>
                        </div>
                        <div class="review-card">
                            <div class="review-header">
                                <div class="review-user">
                                    <img src="https://res.cloudinary.com/dtjgawrwz/image/upload/v1733821945/reviewprofile_d8m2yf.png" alt="User Avatar" class="user-avatar">
                                    <div class="user-info">
                                        <p class="user-name">Rohan Sharma</p>
                                        <p class="review-date">14 Nov 2024</p>
                                    </div>
                                </div>
                                <div class="user-rating">
                                    ⭐⭐⭐⭐⭐
                                </div>
                            </div>
                            <p class="review-text">
                                I had an excellent experience with A Visa Experts! The team was incredibly professional,
                                knowledgeable, and supportive throughout the entire visa application process. They guided me step by
                                step, ensuring that all my documents were perfectly organized and submitted on time.
                            </p>
                        </div>
                        <div class="review-card">
                            <div class="review-header">
                                <div class="review-user">
                                    <img src="https://res.cloudinary.com/dtjgawrwz/image/upload/v1733821945/reviewprofile_d8m2yf.png" alt="User Avatar" class="user-avatar">
                                    <div class="user-info">
                                        <p class="user-name">Rohan Sharma</p>
                                        <p class="review-date">14 Nov 2024</p>
                                    </div>
                                </div>
                                <div class="user-rating">
                                    ⭐⭐⭐⭐⭐
                                </div>
                            </div>
                            <p class="review-text">
                                I had an excellent experience with A Visa Experts! The team was incredibly professional,
                                knowledgeable, and supportive throughout the entire visa application process. They guided me step by
                                step, ensuring that all my documents were perfectly organized and submitted on time.
                            </p>
                        </div>
                    </div>
            
                    <!-- Sidebar -->
                    <div class="review-sidebar">
                        <button class="btn btn-share">Share Review</button>
                        <button class="btn btn-respond">Respond</button>
                        <button class="btn btn-delete">Delete Review</button>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="dashboard.js"></script>
    <script src="js/consultant.js"></script>

</body>

</html>