<?php
require_once "init.php";
$sql = "UPDATE user SET user(surname,email,password) WHERE surname = VALUES(:surname,:email,:password) ";
$verif = "SELECT * FROM user WHERE surname = '".$_POST['surname']."' AND email='".$_POST['email']."'";
$pre = $pdo->prepare($verif);
$pre->execute();
$data = $pre->fetchAll(PDO::FETCH_ASSOC);
$dataBinded=array(
  ':surname'=> $_POST['surname'],
  ':email'  => $_POST['email'],
  ':password'=> $_POST['password'],
);
if (empty($data)){
  echo "ok";
  $pre = $pdo->prepare($sql);
  $pre->execute($dataBinded);
}
else{
  echo "bite";
}
?>
