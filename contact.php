<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    
    echo "İsim: " . $name . "<br>";
    echo "E-posta: " . $email . "<br>";
    echo "Mesaj: " . $message . "<br>";
} else {
    
    header("Location: contact.html");
    exit();
}
?>
