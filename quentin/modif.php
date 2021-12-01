<?php
require_once "init.php";
$verif = "SELECT * FROM user WHERE surname = '".$_POST['surname']."' AND email='".$_POST['email']."'";
$pre = $pdo->prepare($verif);
$pre->execute();
$data = $pre->fetchAll(PDO::FETCH_ASSOC);
if (empty($data)){
  $sql = "UPDATE user SET surname = '".$_POST['surname']."',email = '".$_POST['email']."' WHERE id = '".$_POST['id']."'";
  $pre = $pdo->prepare($sql);
  $pre->execute();
}
header('Location:Pannel_admin.php');
?>
