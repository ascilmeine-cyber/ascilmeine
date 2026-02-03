<?php

$host = "localhost";
$user = "aaa";
$pass = "123456";
$db   = "agar";

// الاتصال بقاعدة البيانات
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}
?>