<?php

$sql = "UPDATE user SET surname = '".$_POST['surname']."',email = '".$_POST['email']."', password = '".$_POST['password']."' WHERE id = '".$_SESSION['user']['id']."'";
?>
