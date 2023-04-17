<?php

require 'Connect.php';
if (isset($_POST['btn-re'])) {
    echo "<pre>";
    // print_r($_POST);
    $username = $_POST['username'];
    $password = $_POST['password'];
}

$sql = "SELECT * FROM `dangky` WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

// Kiểm tra kết quả trả về
if (mysqli_num_rows($result) > 0) {
    // Người dùng đăng nhập thành công
    session_start();
    $_SESSION['username'] = $username;
    header('Location: Trangchu.php');
} else {
    // Người dùng đăng nhập không thành công
    echo "Sai tên đăng nhập hoặc mật khẩu";
}


$conn->close();
?>