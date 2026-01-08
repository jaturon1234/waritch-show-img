<!DOCTYPE html>
<html lang="en">
<?php
require_once 'config.php';
// ตอนนี้ตัวแปร $conn สามารถนำไปใช้ในโค้ดส่วนนี้ได้แล้ว
?>

<head>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@400;700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- 
    - primary meta tags
  -->
    <title>โรงพยาบาลวาริชภูมิ - ดูแลด้วยความใส่ใจและให้บริการดุจญาติมิตร</title>
    <meta name="title" content="Wren - Perosonal Blog Website">
    <meta name="description" content="This is a blog html template made by codewithsadee">

    <!-- 
    - favicon
  -->
    <!-- <link rel="shortcut icon" href="./favicon-removebg-preview.png" type=""> -->
    <link rel="icon" href="./assets/images/favicon-removebg-preview.png" type="image/png">
    <!-- 
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100..900&display=swap" rel="stylesheet"> -->

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- 
    - custom css link
  -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/style2.css">

    <!-- 
    - preload images
  -->
    <link rel="preload" as="image" href="./assets/images/hero-banner.png">
    <link rel="preload" as="image" href="./assets/images/pattern-2.svg">
    <link rel="preload" as="image" href="./assets/images/pattern-3.svg">

</head>

<body id="top">

    <!-- 
    - #HEADER
  -->

    <header class="header" data-header>
        <div class="container">

            <a href="index.php" class="logo">
                <img src="./assets/images/logo-removebg-preview.png" width="70" height="37" alt="Wren logo">
            </a>

            <nav class="navbar" data-navbar>

                <div class="navbar-top">
                    <a href="index.php" class="logo">
                        <img src="./assets/images/logo-removebg-preview.png" width="90" height="37" alt="Wren logo">
                    </a>

                    <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
                        <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
                    </button>
                </div>

                <ul class="navbar-list">

                    <li>
                        <a href="index.php" class="navbar-link hover-1" data-nav-toggler>หน้าหลัก</a>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="navbar-link hover-">เกี่ยวกับโรงพยาบาล <i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-content">
                            <li><a class="navbar-link hover-1" style="text-align:left;" href="#">งานบุคลากร (HDR)</a>
                            </li>
                            <li><a class="navbar-link hover-1" style="text-align:left;" href="info_detail.php?id=19707">วิสัยทัศน์ พันธกิจ</a>
                            </li>
                            <li><a class="navbar-link hover-1" style="text-align:left;"
                                    href="info_detail.php?id=19693">นโยบาลของผู้อำนวยการ</a></li>
                            <li><a class="navbar-link hover-1" style="text-align:left;" href="info_detail.php?id=12921">โครงสร้างหน่วยงาน</a>
                            </li>
                            <li><a class="navbar-link hover-1" style="text-align:left;"
                                    href="info_detail.php?id=19701">อำนาจหน้าที่เเละกฎหมาย</a></li>
                            <li><a class="navbar-link hover-1" style="text-align:left;"
                                    href="info_detail.php?id=20352">ประวัติโรงพยาบาลวาริช</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="https://www.google.com/maps/place/%E0%B9%82%E0%B8%A3%E0%B8%87%E0%B8%9E%E0%B8%A2%E0%B8%B2%E0%B8%9A%E0%B8%B2%E0%B8%A5%E0%B8%A7%E0%B8%B2%E0%B8%A3%E0%B8%B4%E0%B8%8A%E0%B8%A0%E0%B8%B9%E0%B8%A1%E0%B8%B4/@17.265539,103.6352834,519m/data=!3m2!1e3!4b1!4m6!3m5!1s0x313cb420e7b500f3:0x915c65bee04b2136!8m2!3d17.265539!4d103.6352834!16s%2Fg%2F1td7wk9_?authuser=0&entry=ttu" class="navbar-link hover-1" data-nav-toggler>เเผนที่โรงพยายบาล</a>
                    </li>

                    <li>
                        <a href="#recent" class="navbar-link hover-1" data-nav-toggler>ขมรมจริยธรรม</a>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="navbar-link hover-1">ITA <i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-content">
                            <li><a class="navbar-link hover-1" style="text-align:left;" href="#">กฎหมาย ITA</a></li>
                            <li><a class="navbar-link hover-1" style="text-align:left;"
                                    href="info_detail.php?id=20287">ยุทธศาสตร์เเละเเผนระดับชาติ</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="navbar-link hover-1">ดาว์นโหลด <i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-content">
                            <li><a class="navbar-link hover-1" style="text-align:left;" href="#">เเบบฟอร์ม</a></li>
                        </ul>
                    </li>
                </ul>

                <br>
                <p class="copyright-text">
                    Copyright 2026 © Wren - Personal Blog Template.
                    Developed by codewithsadee
                </p>

            </nav>

            <a href="#" class="btn btn-primary">Subscribe</a>

            <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
                <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
            </button>

        </div>
    </header>





    <main>
        <article>



            <br />
            <br />

            <!-------------////--------------------////-------///--------////-----/////----------------2222----------------////-------///--------///--------------////----------------///------------------>

            <section class="section feature" aria-label="feature" id="featured">
                <div class="container">

                    <!-- <h2 class="headline headline-2 section-title">
                        <span class="span">ข่าวประชาสัมพันธ์</span>
                    </h2>

                    <p class="section-text">
                        News and Press release
                    </p> -->

                    <ul class="feature-list">
                        <?php
include 'config.php';

$id = isset($_GET['id']) ? mysqli_real_escape_string($conn, $_GET['id']) : '';

if ($id) {
    $sql = "SELECT post_title, post_content, post_date FROM $tablename WHERE ID = '$id' LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $title = $row['post_title'];
        $content = $row['post_content'];
        $date = $row['post_date'];

        // --- ใช้ preg_match_all เพื่อหาไฟล์ PDF ทั้งหมดที่มีในเนื้อหา ---
        $pdf_list = [];
        $pattern_pdf = '/https?:\/\/[^"\']+\.pdf/i';
        if (preg_match_all($pattern_pdf, $content, $matches)) {
            // ใช้ array_unique เพื่อป้องกันกรณีลิงก์ซ้ำกัน
            $pdf_list = array_unique($matches[0]);
        }
    } else {
        die("ไม่พบข้อมูล");
    }
} else {
    die("ID ไม่ถูกต้อง");
}
?>

                        <!DOCTYPE html>
                        <html lang="th">

                        <head>
                            <meta charset="UTF-8">
                            <title><?php echo $title; ?></title>
                            <style>
                            .container2 {
                                max-width: 1000px;
                                margin: 0 auto;
                                padding: 20px;
                                font-family: 'Sarabun', sans-serif;
                            }

                            .content-area {
                                margin-bottom: 40px;
                                line-height: 1.8;
                            }

                            .content-area img {
                                display: block;      /* บรรทัดที่เพิ่ม: เปลี่ยนรูปให้เป็น Block */
                                margin: 0 auto;      /* บรรทัดที่เพิ่ม: จัดกึ่งกลาง ซ้าย-ขวา */
                                max-width: 100%;
                                height: auto;
                                border-radius: 5px;
                            }

                            /* สไตล์สำหรับกล่อง PDF แต่ละไฟล์ */
                            .pdf-wrapper {
                                margin-bottom: 50px;
                                /* เว้นระยะห่างระหว่างแต่ละไฟล์ */
                                border: 1px solid #ddd;
                                border-radius: 8px;
                                overflow: hidden;
                                background: #f9f9f9;
                            }

                            .pdf-title {
                                background: #333;
                                color: #fff;
                                padding: 10px 15px;
                                font-size: 16px;
                                margin: 0;
                            }

                            .pdf-viewer-container {
                                width: 100%;
                                height: 800px;
                                /* ความสูงของหน้าต่างมอง PDF */
                            }

                            iframe {
                                width: 100%;
                                height: 100%;
                                border: none;
                            }

                            .no-pdf {
                                padding: 20px;
                                background: #fff3cd;
                                border: 1px solid #ffeeba;
                                border-radius: 5px;
                            }
                            </style>
                        </head>

                        <body>
                            <article class="container2">
                                <header>
                                    <h1><?php echo $title; ?></h1>
                                    <p style="color: #666;">
                                        วันที่เผยแพร่: <?php echo date("d/m/Y", strtotime($date)); ?>
                                    </p>
                                </header>
                                <hr>

                                <div class="content-area">
                                    <?php echo $content; ?>
                                </div>

                                <?php if (!empty($pdf_list)): ?>
                                <h2 style="margin-top: 50px; color: #d9534f;">เอกสารแนบทั้งหมด
                                    (<?php echo count($pdf_list); ?> ไฟล์)</h2>

                                <?php foreach ($pdf_list as $index => $pdf_url): ?>
                                <div class="pdf-wrapper">
                                    <div class="pdf-title">
                                        ไฟล์ที่ <?php echo ($index + 1); ?>: <?php echo basename($pdf_url); ?>
                                    </div>
                                    <div class="pdf-viewer-container">
                                        <iframe src="<?php echo $pdf_url; ?>#toolbar=0&navpanes=0&scrollbar=1">
                                            <p>เบราว์เซอร์ของคุณไม่รองรับการแสดงผล PDF
                                                <a href="<?php echo $pdf_url; ?>"
                                                    target="_blank">คลิกที่นี่เพื่อดาวน์โหลด</a>
                                            </p>
                                        </iframe>
                                    </div>
                                </div>
                                <?php endforeach; ?>

                                <?php else: ?>
                                <div class="no-pdf">
                                    ไม่มีไฟล์เอกสาร PDF แนบมากับข่าวนี้
                                </div>
                                <?php endif; ?>

                                <div style="text-align: center; margin-top: 50px;">
                                    <a href="javascript:history.back()"
                                        style="text-decoration: none; color: #007bff; font-weight: bold;">
                                        ← ย้อนกลับไปหน้าหลัก
                                    </a>
                                </div>
                            </article>

                            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js">
                            </script>
                        </body>

                        </html>

                    </ul>

                    <a href="#" class="btn btn-secondary">
                        <span class="span">Show More Posts</span>
                        <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                    </a>

                </div>
                <img src="./assets/images/shadow-3.svg" width="500" height="1500" loading="lazy" alt=""
                    class="feature-bg">
            </section>


            <!---------------------////////---------------------------////---------------------test----------------------------//////////-------------------------/////-------------------------->



            <!-- 
        - #RECENT POST
      -->

            <section class="section recent-post" id="recent" aria-labelledby="recent-label">
                <div class="container">

                    <div class="post-main">

                        <h2 class="headline headline-2 section-title">
                            <span class="span">ประกาศโรงพยาบาลวาริชภูมิ</span>
                        </h2>

                        <p class="section-text">
                            Announcement from Waritchaphum Hospital
                        </p>

                        <ul class="grid-list">

                            <?php
            

// เช็คการเชื่อมต่อฐานข้อมูล
if (!isset($conn) || (isset($conn) && $conn->connect_error)): 
    ?>
    <li>
        <div class="recent-post-card">
            <p>ข้อผิดพลาด: ไม่พบการเชื่อมต่อฐานข้อมูล หรือการเชื่อมต่อล้มเหลว</p>
        </div>
    </li>
    <?php 
else:
    /**
     * แก้ไข SQL: 
     * 1. ใช้ GROUP BY post_title เพื่อไม่ให้หัวข้อซ้ำกัน
     * 2. ใช้ MAX(ID) เพื่อดึงตัวล่าสุดของหัวข้อนั้นๆ (กรณีที่มีชื่อซ้ำ)
     * 3. ตรวจสอบ post_content ไม่ให้เป็นค่าว่าง
     */
    $sql = "SELECT ID, post_title, post_content, post_date
            FROM $tablename 
            WHERE ID IN (
                SELECT MAX(ID) 
                FROM $tablename 
                WHERE post_title LIKE 'ประกาศ%' AND post_content != ''
                GROUP BY post_title
            )
            ORDER BY post_date DESC 
            LIMIT 5";
    
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0): 
        
        while($row = $result->fetch_assoc()):
            
            $post_id = $row["ID"]; 
            $img_src = "assets/images/images-removebg-preview.png";
            $post_title = htmlspecialchars($row["post_title"]); 
            $post_content_raw = $row["post_content"]; 
            $read_time = htmlspecialchars($row["post_date"]); 

            // ลิงก์ไปหน้ารายละเอียดในหน้าเดิม (ไม่มี target="_blank")
            $post_url = "info_detail.php?id=" . $post_id; 

            $card_badge = !empty($tag1) ? $tag1 : 'ประกาศ';
            
            // ล้าง Tag HTML และตัดคำภาษาไทย
            $post_text_clean = strip_tags($post_content_raw);
            $short_text = mb_strlen($post_text_clean) > 150 ? mb_substr($post_text_clean, 0, 150) . '...' : $post_text_clean;
            ?>

            <li>
                <div class="recent-post-card">

                    <figure class="card-banner img-holder" style="--width: 271; --height: 258;">
                        <img src="<?= $img_src ?>" width="271" height="258" loading="lazy"
                            alt="<?= $post_title ?>" class="img-cover">
                    </figure>

                    <div class="card-content">
                        <a href="<?= $post_url ?>" class="card-badge"><?= $card_badge ?></a>

                        <h3 class="headline headline-3 card-title">
                            <a href="<?= $post_url ?>" class="link hover-2"><?= $post_title ?></a>
                        </h3>

                        <p class="card-text">
                            <?= $short_text ?>
                        </p>

                        <div class="card-wrapper">
                            <div class="card-tag">
                                <?php if (!empty($tag1)): ?>
                                    <a href="#" class="span hover-2">#<?= $tag1 ?></a>
                                <?php endif; ?>
                            </div>

                            <div class="wrapper">
                                <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
                                <span class="span"><?= $read_time ?></span>
                            </div>
                        </div>
                    </div>

                </div>
            </li>

            <?php endwhile; ?>
        <?php else: ?>
            <li>
                <div class="recent-post-card">
                    <p>ไม่พบรายการที่ต้องการ</p>
                </div>
            </li>
        <?php endif; 

    $conn->close();
endif; 
?>




                        </ul>

                        <nav aria-label="pagination" class="pagination">

                            <a href="#" class="pagination-btn" aria-label="previous page">
                                <ion-icon name="arrow-back" aria-hidden="true"></ion-icon>
                            </a>

                            <a href="#" class="pagination-btn">1</a>
                            <a href="#" class="pagination-btn">2</a>
                            <a href="#" class="pagination-btn">3</a>
                            <a href="#" class="pagination-btn" aria-label="more page">...</a>

                            <a href="#" class="pagination-btn" aria-label="next page">
                                <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                            </a>

                        </nav>

                    </div>

                    <div class="post-aside grid-list">

                        <div class="card aside-card">

                            <h3 class="headline headline-2 aside-title">
                                <span class="span">ผู้อำนวยการ</span>
                            </h3>

                            <ul class="popular-list">

                                <li>
                                    <div class="card feature-card">

                                        <figure class="card-banner img-holder" style="--width: 900; --height: 903;">
                                            <img src="./assets/images/ceo.png" width="900" height="903" loading="lazy"
                                                alt="เมนู" class="img-cover">
                                        </figure>

                                        <div class="card-content">


                                            <h3 class="headline headline-3">
                                                <br>
                                                <a href="#" class="card-title hover-2 " style="font-size: 18px;">
                                                    นายแพทย์วรชัย อาชวานันทกุล
                                                </a>
                                                <a class="card-title hover-2" style="font-size: 16px;">
                                                    ผู้อำนวยการโรงพยาบาลวาริชภูมิ
                                                </a>
                                            </h3>
                                        </div>

                                    </div>
                                </li>
                            </ul>
                        </div>


                        <div class="card aside-card">

                            <h3 class="headline headline-2 aside-title">
                                <span class="span">Line Official Account</span>
                            </h3>

                            <ul class="popular-list">

                                <li>
                                    <div class="card feature-card">

                                        <a href="#" style="font-size: 18px;">
                                            Line โรงพยาบาล วาริชภูมิ
                                        </a>

                                        <figure class="card-banner img-holder" style="--width: 900; --height: 903;">
                                            <img src="./assets/images/line_qr.png" width="900" height="903"
                                                loading="lazy" alt="เมนู" class="img-cover">
                                        </figure>

                                        <figure class="card-banner img-holder">
                                            <a href="https://line.me/R/ti/p/%40050efbwv">
                                                <img src="./assets/images/line_add_friend.png" width="200" height="400"
                                                    loading="lazy" alt="เมนู" class="img-cover">
                                            </a>
                                        </figure>

                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="card aside-card">

                            <h3 class="headline headline-2 aside-title">
                                <span class="span">Link ที่เกี่ยวข้อง</span>
                            </h3>

                            <ul class="comment-list">

                                <li>
                                    <div class="card feature-card">

                                        <figure class="card-banner img-holder">
                                            <a href="http://172.18.11.251:8080/tpacslite/"></a>
                                            <img src="./assets/images/Tpac.png" width="400" height="400" loading="lazy"
                                                alt="เมนู" class="img-cover">
                                            </a>
                                        </figure>

                                        <figure class="card-banner img-holder">
                                            <a href="http://192.168.1.240/">
                                                <img src="./assets/images/smart-refe-logor.png" width="400" height="400"
                                                    loading="lazy" alt="เมนู" class="img-cover">
                                            </a>
                                        </figure>

                                        <figure class="card-banner img-holder">
                                            <a href="https://r8anywhere.moph.go.th/v2/login"></a>
                                            <img src="./assets/images/r8-anywhere.png" width="400" height="400"
                                                loading="lazy" alt="เมนู" class="img-cover">
                                            </a>
                                        </figure>

                                        <figure class="card-banner img-holder">
                                            <a href="http://dhdc.swdcph.go.th/covid/">
                                                <img src="./assets/images/covid.png" width="400" height="400"
                                                    loading="lazy" alt="เมนู" class="img-cover">
                                            </a>
                                        </figure>

                                        <figure class="card-banner img-holder">
                                            <a href="http://happinometer.moph.go.th/"></a>
                                            <img src="./assets/images/happynometer.png" width="400" height="400"
                                                loading="lazy" alt="เมนู" class="img-cover">
                                            </a>
                                        </figure>

                                        <figure class="card-banner img-holder">
                                            <a href="http://happinometer.moph.go.th/"></a>
                                            <img src="./assets/images/anc_risk_ico.png" width="400" height="400"
                                                loading="lazy" alt="เมนู" class="img-cover">
                                            </a>
                                        </figure>

                                        <figure class="card-banner img-holder">
                                            <a href="https://warit.thai-nrls.org/">
                                                <img src="./assets/images/HRMS.png" width="400" height="400"
                                                    loading="lazy" alt="เมนู" class="img-cover">
                                            </a>
                                        </figure>

                                        <!--/////////////////////////////////////////////////////////////////////////////////////////////////-->
                                        <figure class="card-banner img-holder">
                                            <a href="https://ae.moph.go.th/isonline/">
                                                <img src="./assets/images/IS.png" width="400" height="400"
                                                    loading="lazy" alt="เมนู" class="img-cover">
                                            </a>
                                        </figure>
                                        <figure class="card-banner img-holder">
                                            <a href="http://172.18.11.250/iclaim/main/index.php">
                                                <img src="./assets/images/iclaim.png" width="400" height="400"
                                                    loading="lazy" alt="เมนู" class="img-cover">
                                            </a>
                                        </figure>
                                        <figure class="card-banner img-holder">
                                            <a href="https://warit.thai-nrls.org/">
                                                <img src="./assets/images/EH.png" width="400" height="400"
                                                    loading="lazy" alt="เมนู" class="img-cover">
                                            </a>
                                        </figure>
                                        <figure class="card-banner img-holder">
                                            <a href="https://warit.thai-nrls.org/">
                                                <img src="./assets/images/hdc.png" width="400" height="400"
                                                    loading="lazy" alt="เมนู" class="img-cover">
                                            </a>
                                        </figure>
                                        <figure class="card-banner img-holder">
                                            <a href="https://warit.thai-nrls.org/">
                                                <img src="./assets/images/ovsk.png" width="400" height="400"
                                                    loading="lazy" alt="เมนู" class="img-cover">
                                            </a>
                                        </figure>
                                        <figure class="card-banner img-holder">
                                            <a href="https://warit.thai-nrls.org/">
                                                <img src="./assets/images/moph.png" width="400" height="400"
                                                    loading="lazy" alt="เมนู" class="img-cover">
                                            </a>
                                        </figure>
                                        <figure class="card-banner img-holder">
                                            <a href="https://warit.thai-nrls.org/">
                                                <img src="./assets/images/nhso.png" width="400" height="400"
                                                    loading="lazy" alt="เมนู" class="img-cover">
                                            </a>
                                        </figure>

                                        <figure class="card-banner img-holder">
                                            <a href="https://warit.thai-nrls.org/">
                                                <img src="./assets/images/epay.png" width="400" height="400"
                                                    loading="lazy" alt="เมนู" class="img-cover">
                                            </a>
                                        </figure>

                                        <figure class="card-banner img-holder">
                                            <a href="https://warit.thai-nrls.org/">
                                                <img src="./assets/images/gisstroke.png" width="400" height="400"
                                                    loading="lazy" alt="เมนู" class="img-cover">
                                            </a>
                                        </figure>

                                        <figure class="card-banner img-holder">
                                            <a href="https://warit.thai-nrls.org/">
                                                <img src="./assets/images/sahakon.png" width="400" height="400"
                                                    loading="lazy" alt="เมนู" class="img-cover">
                                            </a>
                                        </figure>

                                        <figure class="card-banner img-holder">
                                            <a href="https://warit.thai-nrls.org/">
                                                <img src="./assets/images/thdata.png" width="400" height="400"
                                                    loading="lazy" alt="เมนู" class="img-cover">
                                            </a>
                                        </figure>

                                        <figure class="card-banner img-holder">
                                            <a href="https://warit.thai-nrls.org/">
                                                <img src="./assets/images/ltc.png" width="400" height="400"
                                                    loading="lazy" alt="เมนู" class="img-cover">
                                            </a>
                                        </figure>

                                        <figure class="card-banner img-holder">
                                            <a href="https://warit.thai-nrls.org/">
                                                <img src="./assets/images/MAP.png" width="400" height="400"
                                                    loading="lazy" alt="เมนู" class="img-cover">
                                            </a>
                                        </figure>

                                        <figure class="card-banner img-holder">
                                            <a href="https://warit.thai-nrls.org/">
                                                <img src="./assets/images/happymoney.png" width="400" height="400"
                                                    loading="lazy" alt="เมนู" class="img-cover">
                                            </a>
                                        </figure>

                                        <figure class="card-banner img-holder">
                                            <a href="https://warit.thai-nrls.org/">
                                                <img src="./assets/images/Complaints.png" width="400" height="400"
                                                    loading="lazy" alt="เมนู" class="img-cover">
                                            </a>
                                        </figure>

                                        <figure class="card-banner img-holder">
                                            <a href="https://warit.thai-nrls.org/">
                                                <img src="./assets/images/damrongtama.png" width="400" height="400"
                                                    loading="lazy" alt="เมนู" class="img-cover">
                                            </a>
                                        </figure>

                                    </div>
                                </li>


                                <li>
                                    <div class="comment-card">

                                        <blockquote class="card-text">
                                            “ Gosh jaguar ostrich quail one excited dear hello and bound and the and
                                            bland moral misheard
                                            roadrunner “
                                        </blockquote>

                                        <div class="profile-card">
                                            <figure class="profile-banner img-holder">
                                                <img src="./assets/images/author-8.png" width="32" height="32"
                                                    loading="lazy" alt="Barbara Cartland">
                                            </figure>

                                            <div>
                                                <p class="card-title">Barbara Cartland</p>

                                                <time class="card-date" datetime="2022-04-15">15 April 2022</time>
                                            </div>
                                        </div>

                                    </div>
                                </li>

                            </ul>

                        </div>

                        <div class="card aside-card insta-card">

                            <a href="#" class="logo">
                                <img src="./assets/images/logo-removebg-preview.png" width="90" height="37"
                                    loading="lazy" alt="Wren logo">
                            </a>

                            <p class="card-text">
                                Follow us on instagram
                            </p>

                            <ul class="insta-list">

                                <li>
                                    <a href="#" class="insta-post img-holder" style="--width: 276; --height: 277;">
                                        <img src="./assets/images/insta-post-1.png" width="276" height="277"
                                            loading="lazy" alt="insta post" class="img-cover">
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class="insta-post img-holder" style="--width: 276; --height: 277;">
                                        <img src="./assets/images/insta-post-2.png" width="276" height="277"
                                            loading="lazy" alt="insta post" class="img-cover">
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class="insta-post img-holder" style="--width: 276; --height: 277;">
                                        <img src="./assets/images/insta-post-3.png" width="276" height="277"
                                            loading="lazy" alt="insta post" class="img-cover">
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class="insta-post img-holder" style="--width: 276; --height: 277;">
                                        <img src="./assets/images/insta-post-4.png" width="276" height="277"
                                            loading="lazy" alt="insta post" class="img-cover">
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class="insta-post img-holder" style="--width: 276; --height: 277;">
                                        <img src="./assets/images/insta-post-5.png" width="276" height="277"
                                            loading="lazy" alt="insta post" class="img-cover">
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class="insta-post img-holder" style="--width: 276; --height: 277;">
                                        <img src="./assets/images/insta-post-6.png" width="276" height="277"
                                            loading="lazy" alt="insta post" class="img-cover">
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class="insta-post img-holder" style="--width: 276; --height: 277;">
                                        <img src="./assets/images/insta-post-7.png" width="276" height="277"
                                            loading="lazy" alt="insta post" class="img-cover">
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class="insta-post img-holder" style="--width: 276; --height: 277;">
                                        <img src="./assets/images/insta-post-8.png" width="276" height="277"
                                            loading="lazy" alt="insta post" class="img-cover">
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class="insta-post img-holder" style="--width: 276; --height: 277;">
                                        <img src="./assets/images/insta-post-9.png" width="276" height="277"
                                            loading="lazy" alt="insta post" class="img-cover">
                                    </a>
                                </li>

                            </ul>

                        </div>

                    </div>

                </div>
            </section>



            <!-- 
        - #POPULAR TAGS
      -->

            <section class="tags" aria-labelledby="tag-label">
                <div class="container">

                    <h2 class="headline headline-2 section-title" id="tag-label">
                        <span class="span">Popular Tags</span>
                    </h2>

                    <p class="section-text">
                        Most searched keywords
                    </p>

                    <ul class="grid-list">

                        <li>
                            <button class="card tag-btn">
                                <img src="./assets/images/tag1.png" width="32" height="32" loading="lazy" alt="Travel">

                                <p class="btn-text">Travel</p>
                            </button>
                        </li>

                        <li>
                            <button class="card tag-btn">
                                <img src="./assets/images/tag2.png" width="32" height="32" loading="lazy" alt="Culture">

                                <p class="btn-text">Culture</p>
                            </button>
                        </li>

                        <li>
                            <button class="card tag-btn">
                                <img src="./assets/images/tag3.png" width="32" height="32" loading="lazy"
                                    alt="Lifestyle">

                                <p class="btn-text">Lifestyle</p>
                            </button>
                        </li>

                        <li>
                            <button class="card tag-btn">
                                <img src="./assets/images/tag4.png" width="32" height="32" loading="lazy" alt="Fashion">

                                <p class="btn-text">Fashion</p>
                            </button>
                        </li>

                        <li>
                            <button class="card tag-btn">
                                <img src="./assets/images/tag5.png" width="32" height="32" loading="lazy" alt="Food">

                                <p class="btn-text">Food</p>
                            </button>
                        </li>

                        <li>
                            <button class="card tag-btn">
                                <img src="./assets/images/tag6.png" width="32" height="32" loading="lazy" alt="Space">

                                <p class="btn-text">Space</p>
                            </button>
                        </li>

                        <li>
                            <button class="card tag-btn">
                                <img src="./assets/images/tag7.png" width="32" height="32" loading="lazy" alt="Animal">

                                <p class="btn-text">Animal</p>
                            </button>
                        </li>

                        <li>
                            <button class="card tag-btn">
                                <img src="./assets/images/tag8.png" width="32" height="32" loading="lazy" alt="Minimal">

                                <p class="btn-text">Minimal</p>
                            </button>
                        </li>

                        <li>
                            <button class="card tag-btn">
                                <img src="./assets/images/tag9.png" width="32" height="32" loading="lazy"
                                    alt="Interior">

                                <p class="btn-text">Interior</p>
                            </button>
                        </li>

                        <li>
                            <button class="card tag-btn">
                                <img src="./assets/images/tag10.png" width="32" height="32" loading="lazy" alt="Plant">

                                <p class="btn-text">Plant</p>
                            </button>
                        </li>

                        <li>
                            <button class="card tag-btn">
                                <img src="./assets/images/tag11.png" width="32" height="32" loading="lazy" alt="Nature">

                                <p class="btn-text">Nature</p>
                            </button>
                        </li>

                        <li>
                            <button class="card tag-btn">
                                <img src="./assets/images/tag12.png" width="32" height="32" loading="lazy"
                                    alt="Business">

                                <p class="btn-text">Business</p>
                            </button>
                        </li>

                    </ul>

                </div>
            </section>



        </article>
    </main>





    <!-- 
    - #FOOTER
  -->

    <footer>
        <div class="container">

            <div class="card footer">

                <div class="section footer-top">

                    <div class="footer-brand">

                        <a href="#" class="logo">
                            <img src="./assets/images/logo-removebg-preview.png" width="90" height="37" loading="lazy"
                                alt="Wren logo">
                        </a>

                        <p class="footer-text">
                            When an unknown prnoto sans took a galley and scrambled it to make specimen book not only
                            five When an
                            unknown prnoto sans took a galley and scrambled it to five centurie.
                        </p>

                        <p class="footer-list-title">Address</p>

                        <address class="footer-text address">
                            123 Main Street <br>
                            New York, NY 10001
                        </address>

                    </div>

                    <div class="footer-list">

                        <p class="footer-list-title">เมนู</p>

                        <ul>

                            <li>
                                <a href="#" class="footer-link hover-2">หน้าหลัก</a>
                            </li>

                            <li>
                                <a href="#" class="footer-link hover-2">เกี่ยวกับโรงพยาบาล</a>
                            </li>

                            <li>
                                <a href="#" class="footer-link hover-2">เเผนที่โรงพยายบาล</a>
                            </li>

                            <li>
                                <a href="#" class="footer-link hover-2">ชมรมจริยธรรม</a>
                            </li>

                            <li>
                                <a href="#" class="footer-link hover-2">ITA</a>
                            </li>

                            <li>
                                <a href="#" class="footer-link hover-2">ดาว์นโหลด</a>
                            </li>
                        </ul>

                    </div>

                    <div class="footer-list">

                        <p class="footer-list-title">Newsletter</p>

                        <p class="footer-text">
                            Sign up to be first to receive the latest stories inspiring us, case studies, and industry
                            news.
                        </p>

                        <div class="input-wrapper">
                            <input type="text" name="name" placeholder="Your name" required class="input-field"
                                autocomplete="off">

                            <ion-icon name="person-outline" aria-hidden="true"></ion-icon>
                        </div>

                        <div class="input-wrapper">
                            <input type="email" name="email_address" placeholder="Emaill address" required
                                class="input-field" autocomplete="off">

                            <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
                        </div>

                        <a href="#" class="btn btn-primary">
                            <span class="span">Subscribe</span>

                            <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                        </a>

                    </div>

                </div>

                <div class="footer-bottom">

                    <p class="copyright">
                        &copy; Developed by <a href="#" class="copyright-link">codewithsadee.</a>
                    </p>

                    <ul class="social-list">

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-twitter"></ion-icon>

                                <span class="span">Twitter</span>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-linkedin"></ion-icon>

                                <span class="span">LinkedIn</span>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-instagram"></ion-icon>

                                <span class="span">Instagram</span>
                            </a>
                        </li>

                    </ul>

                </div>

            </div>

        </div>
    </footer>





    <!-- 
    - #BACK TO TOP
  -->

    <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
        <ion-icon name="arrow-up-outline" aria-hidden="true"></ion-icon>
    </a>





    <!-- 
    - custom js link
  -->
    <script src="./assets/js/script.js"></script>

    <!-- 
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

<style>
body {
    text-align: center;
    font-family: 'Sarabun', sans-serif;
}
</style>


</html>


