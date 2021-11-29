<?php
require_once "init.php";
$user = "user(surname,email,password)"
$sql = "UPDATE user SET  VALUES(:surname,:email,:password) WHERE surname = " ."'{$_SESSION['user']['surname']}'";
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
