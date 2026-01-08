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

            <a href="#" class="logo">
                <img src="./assets/images/logo-removebg-preview.png" width="70" height="37" alt="Wren logo">
            </a>

            <nav class="navbar" data-navbar>

                <div class="navbar-top">
                    <a href="#" class="logo">
                        <img src="./assets/images/logo-removebg-preview.png" width="70" height="37" alt="Wren logo">
                    </a>

                    <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
                        <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
                    </button>
                </div>

                <ul class="navbar-list">

                    <li>
                        <a href="#home" class="navbar-link hover-1" data-nav-toggler>หน้าหลัก</a>
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

            <!-- 
        - #HERO
      -->

            <section class="hero" id="home" aria-label="home">
                <div class="container">

                    <div class="hero-content">

                        <!-- <p class="hero-subtitle">สวัดดี</p> -->

                        <h1 class="headline headline-1 section-title">
                            <span class="span">โรงพยาบาลวาริชภูมิ</span>ยินดีให้บริการ
                        </h1>

                        <p class="hero-text">
                            ดูแลด้วยความใส่ใจและให้บริการดุจญาติมิตร
                        </p>

                        <div class="input-wrapper">

                            <input type="email" name="email_address" placeholder="กรอกที่อยู่ email" required
                                class="input-field" autocomplete="off">

                            <button class="btn btn-primary">
                                <span class="span">Subscribe</span>

                                <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                            </button>

                        </div>

                    </div>

                    <div class="hero-banner">

                        <img src="./assets/images/hero-banner.png" width="327" height="490" alt="Wren Clark"
                            class="w-100">

                        <img src="./assets/images/pattern-2.svg" width="27" height="26" alt="shape"
                            class="shape shape-1">

                        <img src="./assets/images/pattern-3.svg" width="27" height="26" alt="shape"
                            class="shape shape-2">

                    </div>

                    <img src="./assets/images/shadow-1.svg" width="500" height="800" alt="" class="hero-bg hero-bg-1">

                    <img src="./assets/images/shadow-2.svg" width="500" height="500" alt="" class="hero-bg hero-bg-2">

                </div>
            </section>





            <!-- 
        - #TOPICS
      -->

            <section class="topics" id="topics" aria-labelledby="topic-label">
                <div class="container">

                    <div class="card topic-card">

                        <div class="card-content">

                            <h2 class="headline headline-2 section-title card-title" id="topic-label">
                                ล่าสุด
                            </h2>

                            <p class="card-text">
                                อย่าพลาดข่าวสารล่าสุดเกี่ยวกับโรงพยาบาลวาริชภูมิ...
                            </p>

                            <div class="btn-group">
                                <button class="btn-icon" aria-label="previous" data-slider-prev>
                                    <ion-icon name="arrow-back" aria-hidden="true"></ion-icon>
                                </button>

                                <button class="btn-icon" aria-label="next" data-slider-next>
                                    <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                                </button>
                            </div>

                        </div>

                        <div class="slider" data-slider>
                            <ul class="slider-list" data-slider-container>

                                <li class="slider-item">
                                    <a href="#" class="slider-card">

                                        <figure class="slider-banner img-holder" style="--width: 507; --height: 618;">
                                            <img src="./assets/images/topic-1.png" width="507" height="618"
                                                loading="lazy" alt="Sport" class="img-cover">
                                        </figure>

                                        <div class="slider-content">
                                            <span class="slider-title">Sport</span>

                                            <p class="slider-subtitle">38 Articles</p>
                                        </div>

                                    </a>
                                </li>

                                <li class="slider-item">
                                    <a href="#" class="slider-card">

                                        <figure class="slider-banner img-holder" style="--width: 507; --height: 618;">
                                            <img src="./assets/images/topic-2.png" width="507" height="618"
                                                loading="lazy" alt="Travel" class="img-cover">
                                        </figure>

                                        <div class="slider-content">
                                            <span class="slider-title">Travel</span>

                                            <p class="slider-subtitle">63 Articles</p>
                                        </div>

                                    </a>
                                </li>

                                <li class="slider-item">
                                    <a href="#" class="slider-card">

                                        <figure class="slider-banner img-holder" style="--width: 507; --height: 618;">
                                            <img src="./assets/images/topic-3.png" width="507" height="618"
                                                loading="lazy" alt="Design" class="img-cover">
                                        </figure>

                                        <div class="slider-content">
                                            <span class="slider-title">Design</span>

                                            <p class="slider-subtitle">78 Articles</p>
                                        </div>

                                    </a>
                                </li>

                                <li class="slider-item">
                                    <a href="#" class="slider-card">

                                        <figure class="slider-banner img-holder" style="--width: 507; --height: 618;">
                                            <img src="./assets/images/topic-4.png" width="507" height="618"
                                                loading="lazy" alt="Movie" class="img-cover">
                                        </figure>

                                        <div class="slider-content">
                                            <span class="slider-title">Movie</span>

                                            <p class="slider-subtitle">125 Articles</p>
                                        </div>

                                    </a>
                                </li>

                                <li class="slider-item">
                                    <a href="#" class="slider-card">

                                        <figure class="slider-banner img-holder" style="--width: 507; --height: 618;">
                                            <img src="./assets/images/topic-5.png" width="507" height="618"
                                                loading="lazy" alt="Lifestyle" class="img-cover">
                                        </figure>

                                        <div class="slider-content">
                                            <span class="slider-title">Lifestyle</span>

                                            <p class="slider-subtitle">78 Articles</p>
                                        </div>

                                    </a>
                                </li>

                            </ul>
                        </div>

                    </div>

                </div>
            </section>


            <section class="section feature" aria-label="feature" id="featured">
                <div class="container">

                    <h2 class="headline headline-2 section-title">
                        <span class="span">ข่าวประชาสัมพันธ์</span>
                    </h2>

                    <p class="section-text">
                        News and Press release
                    </p>

                    <ul class="feature-list">
                        <?php
    // 5. ปรับ SQL ให้กรองเฉพาะเนื้อหาที่มีแท็ก <img> (เบื้องต้น)
    $sql = "
    SELECT
        ID, 
        guid,
        post_title,
        post_author,
        post_date,
        post_content
    FROM $tablename
    WHERE post_content LIKE '%<img %' 
      AND post_content IS NOT NULL
      AND post_content != ''
    GROUP BY post_title
    ORDER BY post_date DESC
    LIMIT 10
    ";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $count = 0; // ตัวนับเพื่อคุม LIMIT ที่แสดงผลจริง
        
        while($row = $result->fetch_assoc()) {
            // หยุดถ้าแสดงครบ 5 รายการที่มีรูปภาพแล้ว (กรณี SQL ดึงมาเผื่อ)
            if ($count >= 5) break;

            $post_content = $row["post_content"];
            
            // --- ตรวจสอบและดึง URL รูปภาพ ---
            // Pattern ค้นหาไฟล์ภาพ .jpg, .jpeg, .png, .webp, .gif
            if (preg_match('/<img.+?src=["\']([^"\']+\.(?i:jpg|jpeg|png|webp|gif))["\'].*?>/i', $post_content,
                        $img_matches)) {

                        $img_src = $img_matches[1]; // ได้ URL รูปภาพ
                        $count++; // นับจำนวนที่พบรูปภาพจริง

                        $post_title = htmlspecialchars($row["post_title"]);
                        $date = htmlspecialchars($row["post_date"]);
                        $author_name = "waritchhosp";
                        //$post_url = "#";
                        $post_id = $row["ID"]; // หรือคอลัมน์ Primary Key ของคุณ
                        $post_url = "info_detail.php?id=" . $post_id;
                        // --- ดึง URL PDF (ถ้ามี) ---
                        // $pattern_pdf = '/"url":"(https?:\/\/[^"]+\.pdf)"/i';
                        // if (preg_match($pattern_pdf, $post_content, $pdf_matches)) {
                        // $post_url = htmlspecialchars($pdf_matches[1]);
                        // }

                        // --- แสดงผล HTML ---
echo '<li style="display: flex;">'; // ทำให้ li ยืดตามความสูงของแถว
    echo ' <div class="card feature-card" style="display: flex; flex-direction: column; width: 100%; height: 100%; background: #fff; border-radius: 12px; overflow: hidden;">';

        echo ' <figure class="card-banner img-holder"
            style="--width: 200; --height: 200; overflow: hidden; margin: 0; flex-shrink: 0;">';
            echo ' <img src="' . $img_src . '" width="200" height="200" loading="lazy"
                alt="' . $post_title . '" class="img-cover"
                style="object-fit: cover; width: 100%; height: 100%;">';
        echo ' </figure>';

        // ใช้ flex-grow: 1 เพื่อให้ content ยืดเต็มพื้นที่ที่เหลือ
        echo ' <div class="card-content" style="display: flex; flex-direction: column; flex-grow: 1; padding: 20px;">';
            
            // ส่วนบน: วันที่ และ หัวข้อ (ยืดพื้นที่เพื่อดันส่วนท้ายลงล่าง)
            echo ' <div style="flex-grow: 1;">'; 
                echo ' <div class="card-wrapper" style="display: flex; align-items: center; gap: 5px; margin-bottom: 10px;">';
                    echo ' <div class="card-tag"></div>';
                    echo ' <div class="wrapper" style="display: flex; align-items: center; gap: 5px; color: #666; font-size: 14px;">';
                        echo ' <ion-icon name="time-outline" aria-hidden="true"></ion-icon>';
                        echo ' <span class="span">' . date("d M Y", strtotime($date)) . '</span>';
                    echo ' </div>';
                echo ' </div>';

                echo ' <h3 class="headline headline-3" style="margin-bottom: 15px;">';
                    echo ' <a href="' . $post_url . '" class="card-title hover-2" 
                           style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; text-decoration: none; color: inherit;">'
                        . $post_title . '</a>';
                echo ' </h3>';
            echo ' </div>';

            // ส่วนท้าย: ชื่อผู้เขียน และ ปุ่ม (จะอยู่ล่างสุดเสมอ)
            echo ' <div class="card-wrapper" style="margin-top: auto; padding-top: 15px; border-top: 1px solid #eee; display: flex; justify-content: space-between; align-items: center;">';
                echo ' <div class="profile-card" style="display: flex; align-items: center; gap: 10px;">';
                    echo ' <img src="./assets/images/author-1.png" width="48" height="48"
                        loading="lazy" alt="' . $author_name . '" class="profile-banner" style="border-radius: 50%;">';
                    echo ' <div>';
                        echo ' <p class="card-title" style="margin: 0; font-weight: bold; font-size: 14px;">' . $author_name . '</p>';
                        echo ' <p class="card-subtitle" style="margin: 0; font-size: 12px; color: #888;">' . date("d M Y", strtotime($date)) . '</p>';
                    echo ' </div>';
                echo ' </div>';
                // echo ' <a href="' . $post_url . '" class="card-btn" style="padding: 8px 15px; background: #cfeeebff; color: #1f1d1dff; border-radius: 5px; text-decoration: none; font-size: 14px;">รายละเอียด</a>';
                echo ' <a href="' . $post_url . '" style="padding: 8px 15px; background: #f0f0f0; border-radius: 8px; font-size: 12px; color: #444; text-decoration: none;">รายละเอียด</a>';
            echo ' </div>';

        echo ' </div>';
    echo ' </div>';
echo '</li>';

                        } else {
                        // ถ้าใน post_content ไม่มีรูปภาพเลย ให้ข้าม loop นี้ไป (ไม่แสดงผล)
                        continue;
                        }
                        }

                        if ($count == 0) {
                        echo '<li>
                            <p>ไม่พบรายการที่มีรูปภาพประกอบ</p>
                        </li>';
                        }

                        } else {
                        echo '<li>
                            <p>ไม่พบรายการข่าว/บทความ</p>
                        </li>';
                        }
                        ?>
                    </ul>

                    <a href="info_showmore.php" class="btn btn-secondary">
                        <span class="span">เเสดงเพิ่มเติม</span>
                        <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                    </a>

                </div>
                <img src="./assets/images/shadow-3.svg" width="500" height="1500" loading="lazy" alt=""
                    class="feature-bg">
            </section>



            <!-------------////--------------------////-------///--------////-----/////----------------2222----------------////-------///--------///--------------////----------------///------------------>

            <section class="section feature" aria-label="feature" id="featured">
                <div class="container">

                    <h2 class="headline headline-2 section-title">
                        <span class="span">โพสต์ทั้งหมด</span>
                    </h2>

                    <p class="section-text">
                        Latest (All Post)
                    </p>

                    <ul class="feature-list">
                        <?php
    // 5. คำสั่ง SQL สำหรับดึงข้อมูล (SQL query)
    // **คุณอาจต้องเปลี่ยนชื่อคอลัมน์ให้ตรงกับชื่อในตารางของคุณ**
    $sql = "
    SELECT 
        ID,
        guid,
        post_title,
        post_author,
        post_date,
        post_content
    FROM $tablename
    WHERE post_content IS NOT NULL
      AND post_content != ''
    GROUP BY post_title
    ORDER BY post_date DESC
    LIMIT 8
    ";



// คำสั่ง SQL ที่คุณใช้ควรเลือกคอลัมน์เหล่านี้: post_title, post_date, guid, post_content
    // ตัวอย่าง: $sql = "SELECT post_title, post_date, guid, post_content FROM $tablename ORDER BY post_date DESC LIMIT 5";
    
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        
        // 1. กำหนดค่าพื้นฐาน
        $post_title = htmlspecialchars($row["post_title"]);
        $date = htmlspecialchars($row["post_date"]);
        $post_content = $row["post_content"]; 
        $author_name = "waritchhosp";
        
        // บังคับให้ลิงก์ไปที่ info_detail.php เสมอ โดยใช้ post_id
        $post_id = $row["ID"]; 
        $post_url = "info_detail.php?id=" . $post_id;

        // 2. ส่วนการดึง URL รูปภาพสำหรับแสดงเป็น Thumbnail หน้าแรก
        $img_src = "assets/images/pdf_logo.png"; // รูปสำรอง
        if (preg_match('/<img.+?src=["\']([^"\']+)["\'].*?>/i', $post_content, $img_matches)) {
            $img_src = $img_matches[1];
        }

        // ----------------------------------------------------
        // 3. ส่วนการแสดงผล HTML (ปรับเป้าหมายลิงก์)
        // ----------------------------------------------------
        echo '<li>';
                    // Card แนวนอน (ใช้ flex)
                    echo ' <div class="card feature-card" style="display: flex; gap: 15px; align-items: center; padding: 20px; background: #fff; border-radius: 16px; box-shadow: 0 2px 15px rgba(0,0,0,0.05); height: 100%;"> ';
                        
                        // รูปภาพ PDF หรือรูปปก (ลดขนาดลงเหลือ 100px)
                        echo ' <figure class="card-banner" style="width: 100px; height: 100px; flex-shrink: 0; border-radius: 10px; overflow: hidden; margin: 0;">';
                            echo ' <img src="' . $img_src . '" width="100" height="100" loading="lazy"
                                alt="' . $post_title . '" class="img-cover"
                                style="object-fit: contain; width: 100%; height: 100%;">';
                        echo ' </figure>';

                        // ส่วนเนื้อหาด้านขวา
                        echo ' <div class="card-content" style="flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">';
                            
                            // วันที่
                            echo ' <div class="wrapper" style="display: flex; align-items: center; gap: 5px; font-size: 13px; color: #666; margin-bottom: 8px;">';
                                echo ' <ion-icon name="time-outline"></ion-icon>';
                                echo ' <span>' . date("d M Y", strtotime($date)) . '</span>';
                            echo ' </div>';

                            // หัวข้อข่าว
                            echo ' <h3 style="margin: 0 0 15px 0; font-size: 1rem; line-height: 1.4;">';
                                echo ' <a href="' . $post_url . '" class="card-title hover-2" style="color: #333; text-decoration: none; font-weight: 600; font-size: 1.5rem;">' . $post_title . '</a>';
                            echo ' </h3>';

                            // ส่วนท้าย: ชื่อคนเขียน และ ปุ่มรายละเอียด
                            echo ' <div style="display: flex; justify-content: space-between; align-items: center;">';
                                echo ' <div style="display: flex; align-items: center; gap: 8px;">';
                                    echo ' <img src="./assets/images/author-1.png" width="28" height="28" style="border-radius: 50%;">';
                                    echo ' <p style="font-size: 13px; margin: 0; color: #555;">' . $author_name . '</p>';
                                echo ' </div>';
                                
                                echo ' <a href="' . $post_url . '" class="card-btn" style="padding: 6px 12px; background: #f0f0f0; border-radius: 8px; font-size: 12px; color: #444; text-decoration: none;">รายละเอียด</a>';
                            echo ' </div>';

                        echo ' </div>'; // ปิด card-content
                    echo ' </div>'; // ปิด feature-card
                echo '</li>';
            } 
            
            echo '</ul>'; // ปิดรายการหลัก (ul)

        } else {
            echo '<p style="text-align: center; padding: 20px;">ไม่พบรายการข่าว/บทความ</p>';
        }                     // ... ส่วนต่อของโค้ด PHP (การปิดการเชื่อมต่อ)


                        // 6. ปิดการเชื่อมต่อ (Close connection)
                        //$conn->close();
                        ?>
                    </ul>

                    <a href="info_showmore_all.php" class="btn btn-secondary">
                        <span class="span">เเสดงเพิ่มเติม</span>
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
            
            // *******************************************************************
            // ** สำคัญ: ตรวจสอบว่าตัวแปร $conn (การเชื่อมต่อฐานข้อมูล) และ $tablename **
            // ** ได้รับการตั้งค่าอย่างถูกต้องก่อนถึงส่วนโค้ดนี้ **
            // *******************************************************************
            


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
                                            <a href="http://172.18.11.251:8080/tpacslite/">
                                                <img src="./assets/images/Tpac.png" width="400" height="400" loading="lazy" alt="เมนู" class="img-cover">
                                            </a> </figure>
                                        </figure>

                                        <figure class="card-banner img-holder">
                                            <a href="http://192.168.1.240/">
                                                <img src="./assets/images/smart-refe-logor.png" width="400" height="400"
                                                    loading="lazy" alt="เมนู" class="img-cover">
                                            </a>
                                        </figure>

                                        <figure class="card-banner img-holder">
                                            <a href="https://r8anywhere.moph.go.th/v2/login">
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
                                            <a href="http://happinometer.moph.go.th/">
                                            <img src="./assets/images/happynometer.png" width="400" height="400"
                                                loading="lazy" alt="เมนู" class="img-cover">
                                            </a>
                                        </figure>

                                        <figure class="card-banner img-holder">
                                            <a href="http://203.157.180.130/risk_anc">
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
                                            <a href="http://203.157.177.121/eh/frontend/web/index.php">
                                                <img src="./assets/images/EH.png" width="400" height="400"
                                                    loading="lazy" alt="เมนู" class="img-cover">
                                            </a>
                                        </figure>
                                        <figure class="card-banner img-holder">
                                            <a href="http://203.157.177.121/hdc/main/index.php">
                                                <img src="./assets/images/hdc.png" width="400" height="400"
                                                    loading="lazy" alt="เมนู" class="img-cover">
                                            </a>
                                        </figure>
                                        <figure class="card-banner img-holder">
                                            <a href="http://ovsk.moph.go.th/ovsk/main/">
                                                <img src="./assets/images/ovsk.png" width="400" height="400"
                                                    loading="lazy" alt="เมนู" class="img-cover">
                                            </a>
                                        </figure>
                                        <figure class="card-banner img-holder">
                                            <a href="https://moph.go.th/">
                                                <img src="./assets/images/moph.png" width="400" height="400"
                                                    loading="lazy" alt="เมนู" class="img-cover">
                                            </a>
                                        </figure>
                                        <figure class="card-banner img-holder">
                                            <a href="https://www.nhso.go.th/th/FrontEnd/Index.aspx">
                                                <img src="./assets/images/nhso.png" width="400" height="400"
                                                    loading="lazy" alt="เมนู" class="img-cover">
                                            </a>
                                        </figure>

                                        <figure class="card-banner img-holder">
                                            <a href="http://203.157.177.7/payslip/index.php">
                                                <img src="./assets/images/epay.png" width="400" height="400"
                                                    loading="lazy" alt="เมนู" class="img-cover">
                                            </a>
                                        </figure>

                                        <figure class="card-banner img-holder">
                                            <a href="http://203.157.180.130:8089/">
                                                <img src="./assets/images/gisstroke.png" width="400" height="400"
                                                    loading="lazy" alt="เมนู" class="img-cover">
                                            </a>
                                        </figure>

                                        <figure class="card-banner img-holder">
                                            <a href="https://www.phsncoop.com/">
                                                <img src="./assets/images/sahakon.png" width="400" height="400"
                                                    loading="lazy" alt="เมนู" class="img-cover">
                                            </a>
                                        </figure>

                                        <figure class="card-banner img-holder">
                                            <a href="https://164.115.22.135/geriatrics/index.php">
                                                <img src="./assets/images/thdata.png" width="400" height="400"
                                                    loading="lazy" alt="เมนู" class="img-cover">
                                            </a>
                                        </figure>

                                        <figure class="card-banner img-holder">
                                            <a href="https://ict.nkphospital.go.th/ltc/legacy">
                                                <img src="./assets/images/ltc.png" width="400" height="400"
                                                    loading="lazy" alt="เมนู" class="img-cover">
                                            </a>
                                        </figure>

                                        <figure class="card-banner img-holder">
                                            <a href="http://172.18.11.250/webaccount60/">
                                                <img src="./assets/images/MAP.png" width="400" height="400"
                                                    loading="lazy" alt="เมนู" class="img-cover">
                                            </a>
                                        </figure>

                                        <figure class="card-banner img-holder">
                                            <a href="https://www.happymoney.moph.go.th/">
                                                <img src="./assets/images/happymoney.png" width="400" height="400"
                                                    loading="lazy" alt="เมนู" class="img-cover">
                                            </a>
                                        </figure>

                                        <figure class="card-banner img-holder">
                                            <a href="http://203.157.180.130/2017/?page_id=765">
                                                <img src="./assets/images/Complaints.png" width="400" height="400"
                                                    loading="lazy" alt="เมนู" class="img-cover">
                                            </a>
                                        </figure>

                                        <figure class="card-banner img-holder">
                                            <a href="https://waritch-hosp.moph.go.th/wp-content/uploads/2017/05/damrongtama.png">
                                                <img src="./assets/images/damrongtama.png" width="400" height="400"
                                                    loading="lazy" alt="เมนู" class="img-cover">
                                            </a>
                                        </figure>

                                    </div>
                                </li>


                                <!-- <li>
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
                                </li> -->

                            </ul>

                        </div>

                        <div class="card aside-card insta-card">

                            <a href="#" class="logo">
                                <img src="./assets/images/logo-removebg-preview.png" width="70" height="37"
                                    loading="lazy" alt="Wren logo">
                            </a>

                            <h3 class="headline headline-2 aside-title">
                                <span class="span">Meta</span>
                            </h3>
                            <p class="card-text">
                                <a href="https://waritch-hosp.moph.go.th/wp-login.php" style="text-decoration: none; color: inherit;">
                                    Log in
                                </a>
                            </p>
                            <p class="card-text">
                                <a href="https://waritch-hosp.moph.go.th/?feed=rss2" style="text-decoration: none; color: inherit;">
                                    Entries feed
                                </a>
                            </p>
                            <p class="card-text">
                                <a href="https://waritch-hosp.moph.go.th/?feed=comments-rss2" style="text-decoration: none; color: inherit;">
                                    Comments feed
                                </a>
                            </p>
                            <p class="card-text">
                                <a href="https://wordpress.org/" style="text-decoration: none; color: inherit;">
                                     WordPress.org
                                </a>
                            </p>
                        </div> 


                        <!-- <div class="card aside-card insta-card">

                            <a href="#" class="logo">
                                <img src="./assets/images/logo-removebg-preview.png" width="70" height="37"
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

                        </div> -->

                    </div>

                </div>
            </section>



            <!-- 
        - #POPULAR TAGS
      -->

            <!-- <section class="tags" aria-labelledby="tag-label">
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
            </section> -->



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

                        <a href="#" class="logo" style="display: flex; justify-content: center; align-items: center; width: 100%;">
                            <img src="./assets/images/logo-removebg-preview.png" width="70" height="37" loading="lazy" alt="Wren logo">
                        </a>

                        <p class="footer-text">
                            Copyright © 2025 โรงพยาบาลวาริชภูมิ. All rights reserved.
                            Theme: ColorMag by ThemeGrill. Powered by WordPress.
                        </p>

                        <p class="footer-list-title">Address</p>

                        <address class="footer-text address">
                            โรงพยาบาลวาริชภูมิ เลขที่ 83 ม.13 ต.วาริชภูมิ อ.วาริชภูมิ จ.สกลนคร 47150<br>
                            โทร 042-973-751 ถึง 5 , 042-090-451 โทรสาร ต่อ 333<br>
                            email : h_waritchaphum@hotmail.com
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

                        <p class="footer-list-title">จดหมายข่าว</p>

                        <p class="footer-text">
                            ลงทะเบียนเพื่อรับข้อมูล กรณีศึกษา และข่าวสารในโรงพยาบาลก่อนใคร
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
                        &copy; Developed by <a href="#" class="copyright-link">โรงพยาบาลวาริชภูมิ</a>
                    </p>

                    <ul class="social-list">

                        <li>
                            <a href="https://www.facebook.com/waritchhosp/" class="social-link">
                                <ion-icon name="logo-facebook"></ion-icon>

                                <span class="span">Facebook</span>
                            </a>
                        </li>

                        <li>
                            <a href="https://line.me/R/ti/p/%40050efbwv" class="social-link">
                                <ion-icon name="mail"></ion-icon>

                                <span class="span">Line</span>
                            </a>
                        </li>

                        <li>
                            <a href="h_waritchaphum@hotmail.com" class="social-link">
                                <ion-icon name="logo-google"></ion-icon>

                                <span class="span">Gmail</span>
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