<?php
require_once "init.php";
if(empty($_POST['surname'])){
  $_POST['surname'] = $_SESSION['user']['surname'];
}
if(empty($_POST['email'])){
  $_POST['email'] = $_SESSION['user']['email'];
}
if(empty($_POST['password'])){
  $_POST['password'] = $_SESSION['user']['password'];
}
$sql = "UPDATE user SET surname = '".$_POST['surname']."',email = '".$_POST['email']."', password = '".$_POST['password']."' WHERE id = '".$_SESSION['user']['id']."'";
$verif = "SELECT * FROM user WHERE surname = '".$_POST['surname']."' AND email='".$_POST['email']."'";
$pre = $pdo->prepare($verif);
$pre->execute();
$data = $pre->fetchAll(PDO::FETCH_ASSOC);
if (empty($data)){
  $pre = $pdo->prepare($sql);
  $pre->execute();
  $user = current($pre->fetchAll(PDO::FETCH_ASSOC));
  $_SESSION['user'] = $user;
}
header('Location:account.php');
?>
