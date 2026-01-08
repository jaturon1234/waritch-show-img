<?php
// 1. กำหนดค่าการเชื่อมต่อฐานข้อมูล (Database Credentials)
$servername = "192.168.1.254"; // Hostname ที่คุณระบุ
$username = "waritch";         // ชื่อผู้ใช้ฐานข้อมูล (Username)
$password = "waritchaphum11093";         // รหัสผ่านฐานข้อมูล (Password)
$dbname = "waritchhosp_db"; // **กรุณาใส่ชื่อฐานข้อมูลจริงของคุณ**
$tablename = "wp_posts";       // **กรุณาใส่ชื่อตารางข่าว/บทความจริงของคุณ**
$port = 3306;                  // พอร์ตฐานข้อมูล (ปกติคือ 3306 หากมีการกำหนดค่าอื่นให้ระบุ)

// 2. สร้างการเชื่อมต่อ (Create connection)
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// 3. ตรวจสอบการเชื่อมต่อ (Check connection)
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 4. ตั้งค่าให้รองรับภาษาไทย (Set character set to support Thai)
$conn->set_charset("utf8mb4"); 
?>