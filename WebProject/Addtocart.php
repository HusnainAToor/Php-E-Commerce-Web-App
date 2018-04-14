<?php

session_start();

echo session_id();

$id=$_GET['id'];
$_SESSION['cart']=$_SESSION['cart'].' '.$id;

 echo $_SESSION['name'];
echo $_SESSION['cart'];


 echo "<script>history.go(-1)</script>";
?>