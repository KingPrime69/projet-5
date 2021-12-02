<?php
require_once "init.php";
$surname = $_SESSION['user']['surname'];
$email = $_SESSION['user']['email'];
$subject = $_POST['object'];
$message = $_POST['textarea2'];
$headers = array('MIME-Version: 1.0','Content-type: text/html; charset=utf8');
$to = "qripot@gaming.tech";
echo $to;
if(mail($email,$subject,$message,$headers)){
}else{
    //on a une erreur quelque part
}
header('Location:index.php');
?>
