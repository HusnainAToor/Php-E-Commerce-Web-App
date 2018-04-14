<?php

session_start();



$id=$_GET['id'];


	   try {
      $host = '127.0.0.1';
        $dbname = 'webproject';
        $user = 'root';
        $pass = '';
        
        $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);


		$sql = "UPDATE register SET Password='040affe703e4b4474fce8af4f8fe9d85' where id='$id'";
		
       //  $sql = "select * from order1 ";
        $sth = $DBH->prepare($sql);

     

        $sth->execute();
} catch(PDOException $e) {echo $e;}  

      echo "Password Updated to Default";
 echo '<center><a href="logout.php"><input type="submit" value="LOG OUT" style="width:auto; height:50; width:500; margin-left:50; margin-top:50; background-color:lightblue; "></a></center><br>';  

?>