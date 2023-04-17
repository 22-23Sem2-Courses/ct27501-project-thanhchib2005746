<?php
$dbhost = "localhost:3307";
$username = "root";
$password ="";
$dbname = "ct275_lab4";

$conn = new mysqli($dbhost,$username,$password,$dbname);

if($conn->connect_error){
    die("Ket noi khong thanh cong". $conn->connect_error);
}

echo "Dang nhap thanh cong";


?>