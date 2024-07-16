<?php
session_start();
include('condb.php'); // เรียกใช้งานไฟล์ condb.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['mem_username'];
    $password = $_POST['mem_password'];

    // ตรวจสอบ username และ password จากฐานข้อมูล
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // เมื่อเข้าสู่ระบบสำเร็จ
        $_SESSION['username'] = $username;

        // Redirect ไปยังหน้า Dashboard หรือหน้าที่ต้องการ
        header("Location: admin/index.php");
        exit();
    } else {
        $_SESSION['error_msg'] = "Invalid username or password";
        header("Location: index.php"); // หรือไปยังหน้า Login ใหม่
        exit();
    }
}
?>
