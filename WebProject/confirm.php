<?php

session_start();




	 
     $Firstname= $_SESSION['name'];
	 $Lastname= $_SESSION['cart'];
     $Email= $_SESSION['total'];
 $date= date("Y/m/d");	
  $status="Ordered confirm"; 
	
     
    try {
        $host = '127.0.0.1';
        $dbname = 'webproject';
        $user = 'root';
		
		
        $pass = '';
        
        $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
   
     
    $sql = "INSERT INTO `order1`( `name`, `orderstring`, `total`, `date`, `status`) VALUES (?,?,?,?,?)";
    $sth = $DBH->prepare($sql);
	
	$sth->bindParam(1, $Firstname, PDO::PARAM_INT);
	$sth->bindParam(2, $Lastname, PDO::PARAM_INT);
	$sth->bindParam(3, $Email, PDO::PARAM_INT);
	$sth->bindParam(4, $date, PDO::PARAM_INT);
	$sth->bindParam(4, $date, PDO::PARAM_INT);
    $sth->bindParam(5, $status, PDO::PARAM_INT);
	$sth->execute();
     
           print("<script> 
		   alert('You have successfully ordered!');
		   </script>");
		   
		   echo'<center><image src="images/logo.png" style="margin:auto; display: block; height:150px; width:800px;" ></image></center>';
		   
		  echo"<center>Mrs ". $Firstname ." have successfully ordered!</center>";
		   
		   echo"<br>";
		    echo"<br>";
			 echo"<br>";
		    echo '<center><a href="order.php"><input type="submit" value="My ORDER RECIEPT " style="width:auto; height:30; margin-left:50; margin-top:50; background-color:red; "></a></center>'; 
		
             echo '<center><a href="vieworder.php"><input type="submit" value="My ORDER view " style="width:auto; height:30; margin-left:50; margin-top:50; background-color:red; "></a></center>'; 
		
              
      
	
    
     } catch(PDOException $e) {echo 'Error' . $e;} 

      echo '<center><a href="logout.php"><input type="submit" value="LOG OUT" style="width:auto; height:50; width:500; margin-left:50; margin-top:50; background-color:lightblue; "></a></center><br>';  
?>