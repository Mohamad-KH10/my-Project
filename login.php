<?php
session_start();

$kullanci = 'b231210554@sakarya.edu.tr';
$sifre = 'b231210554';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = $_POST["email"];
    $password = $_POST["password"];

    
    if ($username === $kullanci && $password === $sifre) {
        
        $_SESSION['email'] = $username;
        echo 'Welcome Mohamad Khateeb !';
        
        exit;
    } else {
        echo 'Username or Password is incorrect! Please try again.';
        
        exit;
    }
}
?>