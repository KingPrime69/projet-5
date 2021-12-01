<?php
require_once "init.php";
$tab = "SELECT * FROM user";
$pre = $pdo->prepare($tab);
$pre->execute();
$data = $pre->fetchAll(PDO::FETCH_ASSOC);
foreach($data as $user){
  if(!empty($_POST['surname'])){
    echo $_POST['surname'];
    break;
  }
  else {
    $_POST['surname'] = $user['user']['surname'];
  }
  if(!empty($_POST['email'])){
    break;
  }
  else {
    $_POST['email'] = $user['user']['email'];
  }
}
$verif = "SELECT * FROM user WHERE surname = '".$_POST['surname']."' AND email='".$_POST['email']."'";
$pre = $pdo->prepare($verif);
$pre->execute();
$data = $pre->fetchAll(PDO::FETCH_ASSOC);
if (empty($data)){
  echo $user['id'];
  $sql = "UPDATE user SET surname = '".$_POST['surname']."',email = '".$_POST['email']."' WHERE id = '".$user['id']."'";
  $pre = $pdo->prepare($sql);
  $pre->execute();
}
?>
