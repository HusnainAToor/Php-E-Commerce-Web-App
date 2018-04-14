


 <?php


session_start();

 echo $_SESSION['name'];
if( time()>($_SESSION['loggedin']+10)){



    session_destroy();
	echo'<script> window.location="index.php";</script>';
	
}
$_SESSION['loggedin']=time();

 echo $_SESSION['name'];
  echo $_SESSION['name'];
   echo $_SESSION['name'];
    echo $_SESSION['name'];
	echo 'product<br><br><br>';
echo "<a href='cart.php'>cart</a><br><br>";
echo "<a href='customerpage.php'>product</a><br><br>";	
	
	


?>