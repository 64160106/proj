<?php
$servername = "localhost"; // หรือ localhost
$username = "root";
$password = "1234"; // ใส่รหัสผ่านของ MySQL ที่ตั้งไว้ตอนติดตั้ง
$dbname = "mydb"; // ใส่ชื่อฐานข้อมูลของคุณ

// สร้างการเชื่อมต่อ
$conn = mysqli_connect($servername, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
