
<?php


if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = "sahar001.os@gmail.com";
    $subject = "New Message from Contact Form";
    $body = "Name : $name$email: $email$message";
    mail($to,$subject,$body);
    echo "Thank you for your message!";
 }
// Redirect to
header("Location:ser.php");
?>

