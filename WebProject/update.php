<?php

session_start();



$id=$_GET['id'];


	   try {
      $host = '127.0.0.1';
        $dbname = 'webproject';
        $user = 'root';
        $pass = '';
        
        $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);


		$sql = "UPDATE order1 SET status='Shipped' where id='$id'";
		
       //  $sql = "select * from order1 ";
        $sth = $DBH->prepare($sql);

     

        $sth->execute();
} catch(PDOException $e) {echo $e;}  

      echo "Updated";
 echo '<center><a href="logout.php"><input type="submit" value="LOG OUT" style="width:auto; height:50; width:500; margin-left:50; margin-top:50; background-color:lightblue; "></a></center><br>';  

?>