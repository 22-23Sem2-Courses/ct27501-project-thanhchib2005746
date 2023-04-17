<?php
require 'Connect.php';

if(isset($_POST['btn-reg'])){
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    if($fullname == "" || $username == "" || $password == "" || $repassword == ""){
        echo "Vui long dien day du thong tin";
    }
    else{
        if($password != $repassword) echo "Mat khau nhap lai khong dung";
        else {
            $sql = "SELECT * FROM `dangky` WHERE username = '$username'";
            $check = mysqli_query($conn, $sql);

            if(mysqli_num_rows($check) > 0) {
                echo "Ten tai khoan da ton tai";
            }
            else {
                $sql = "INSERT INTO `dangky` (`fullname`, `username`,`password`,`repassword`) 
                VALUES('$fullname','$username', '$password', '$repassword')";

                
                if($conn->query($sql)===TRUE){
                    header('location: Dangnhap.php');
            }
            
        }
        }
    }
}


/*
    if((!empty($username) && !empty($password) && !empty($fullname)) && ($password == $repassword)){
        $sql = "INSERT INTO `dangky` (`fullname`, `username`,`password`,`repassword`) 
        VALUES('$fullname','$username', md5('$password'), md5('$repassword'))";
    
    
        if($conn->query($sql)===TRUE){
            header('location: Dangnhap.php');
        }
}

    if(empty($username)){
    $err['fullname'] = "Vui lòng điền vào mục này.";
    }
    if(empty($fullname)){
        $err['username'] = 'Vui lòng điền vào mục này.';
    }
    if(empty($password)){
        $err['password'] = 'Vui lòng điền vào mục này.';
    }

    if($password != $repassword){
      $err['repassword'] = 'Mật khẩu nhập lại không đúng.';
    }

    //var_dump($err);
    //die();
    if(empty($err)){
        $sql = "INSERT INTO dangky (`fullname`, `username`,`password`,`repassword`) 
        VALUES('$fullname','$username', '$password', '$repassword')";
        $query = mysqli_query($conn, $sql);
        if($query){
            header('location: Dangnhap.php');
        }
    }
}

*/
?>