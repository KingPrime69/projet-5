<?php
require_once "init.php";
$sql = "INSERT INTO user(surname,email,password) VALUES(:surname,:email,:password)";
$dataBinded=array(
  ':surname'=> $_POST['surname'],
    ':email'   => $_POST['email'],
    ':password'=> $_POST['password'],
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
header('Location:index.php');
?>
