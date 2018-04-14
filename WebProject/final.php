<?php
session_start();
$id1= $_SESSION['id'];


if($_POST){
	 
 
	
	 	
     $Name = $_POST['Name'];
     $Quantity = $_POST['Quantity'];
	 $Price = $_POST['Price'];
     $Dis = $_POST['Dis'];
	 $Type = $_POST['Type'];
		
		 
		
		 try {
      $host = '127.0.0.1';
        $dbname = 'webproject';
        $user = 'root';
        $pass = '';
        
        $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
		
		if($Name!= ''){


		$sql = "UPDATE products SET Name='$Name' where id='$id1'";
		
       //  $sql = "select * from order1 ";
        $sth = $DBH->prepare($sql);
        
     

        $sth->execute();
		echo"You have successfully updated your name<br><br>";
		}
		if($Quantity!= ''){


		$sql = "UPDATE products SET Quantity='$Quantity' where id='$id1'";
		
       //  $sql = "select * from order1 ";
        $sth = $DBH->prepare($sql);

     

        $sth->execute();
		echo"You have successfully updated your Quantity<br><br>";
		}
		if($Price!= ''){


		$sql = "UPDATE products SET Price='$Price' where id='$id1'";
		
       //  $sql = "select * from order1 ";
        $sth = $DBH->prepare($sql);

     

        $sth->execute();
			echo"You have successfully updated your Price<br><br>";
		}
		if($Dis!= ''){

           
		$sql = "UPDATE products SET Discription='$Dis' where id='$id1'";
		
       //  $sql = "select * from order1 ";
        $sth = $DBH->prepare($sql);

     

        $sth->execute();
			echo"You have successfully updated your Discription<br><br>";
		}
		if($Type!= ''){

           
		$sql = "UPDATE products SET Type='$Type' where id='$id1'";
		
       //  $sql = "select * from order1 ";
        $sth = $DBH->prepare($sql);

     

        $sth->execute();
			echo"You have successfully updated your Type<br><br>";
		}
		
		
} catch(PDOException $e) {echo $e;}  

		
		
}else{
echo'invalid';}		
		
		
	
}		
 
		
		
		 echo '<center><a href="logout.php"><input type="submit" value="LOG OUT" style="width:auto; height:50; width:500; margin-left:50; margin-top:50; background-color:lightblue; "></a></center><br>';  
		
		?>







