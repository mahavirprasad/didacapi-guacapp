<?php
if(isset($_POST["email"]) && isset($_POST["code"])){
    $to=$_POST["email"];
    $subject="Verify Code";
    $message="Your Verify Code Is: " . $_POST["code"];
    mail($to,$subject,$message);
    echo "Send Successfully";
}
?>