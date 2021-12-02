<?php
require_once "init.php";
$surname = $_SESSION['user']['surname'];
$email = $_SESSION['user']['email'];
$objets = $_POST['object'];
$content = $_POST['textarea2'];
$headers = array('MIME-Version: 1.0','Content-type: text/html; charset=utf8');
if(mail($surname,$email,$objet,$content,$headers)){
}else{
    //on a une erreur quelque part
}
header('Location:index.php');
?>
