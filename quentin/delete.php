<?php
require_once "init.php";
$sql = "DELETE FROM user WHERE id = '".$_POST['id']."'";
$pre = $pdo->prepare($sql);
$pre->execute();
header('Location:Pannel_admin.php');
?>
