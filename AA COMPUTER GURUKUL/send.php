<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    mail("yourgmail@gmail.com","New Inquiry from Website",
    "Name: $name\nPhone: $phone\nEmail: $email\nMessage: $message");

    echo "Message Sent Successfully!";
}
?>
