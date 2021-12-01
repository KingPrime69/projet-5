<?php
require_once "init.php";
$sql = "INSERT INTO user(surname,email,password) VALUES(:surname,:email,:password)";
$verif = "SELECT * FROM user WHERE surname = '".$_POST['surname']."' AND email='".$_POST['email']."'";
$pre = $pdo->prepare($verif);
$pre->execute();
$data = $pre->fetchAll(PDO::FETCH_ASSOC);
$dataBinded=array(
  ':surname'=> $_POST['surname'],
  ':email'  => $_POST['email'],
  ':password'=> hash('sha1',$_POST['password']),
);
if (empty($data)){
  $pre = $pdo->prepare($sql);
  $pre->execute($dataBinded);
}
else{

}
header('Location:account.php');
?>
