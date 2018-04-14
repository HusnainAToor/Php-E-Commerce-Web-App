
 
		
		
		<?php
		
		
	session_start();



 $name=$_SESSION['name'];	
		
		
		
	echo'	<center><image src="images/logo.png" style="margin:auto; display: block; height:150px; width:800px;" ></image></center>
 
 <center><form  id="RegisterForm" style="align:center; " action="adminadd.php" method="post">
				
				<table style="text-align:left;">
				     <tr>
					     <td><h3 style="margin-left:50px;" > Name</h3></td>
					     <td><input type="text" name="Name" style="margin:auto;  display: block; height:50px; width:200px; margin-left:50px; required" ></td>
					 </tr>
					 <tr>
					     <td><h3 style="margin-left:50px;" >Quantity</h3></td>
					     <td><input type="text" name="Quantity"  style="margin:auto;  display: block; height:50px; width:200px; margin-left:50px; required"></td>
					 </tr>
					  <tr>
					     <td><h3 style="margin-left:50px;" >Price</h3></td>
					     <td><input type="text" name="Price"  style="margin:auto;  display: block; height:50px; width:300px; margin-left:50px; required"></td>
					 </tr>
					 <tr>
					     <td><h3 style="margin-left:50px;" >Discription</h3></td>
					     <td><input type="text" name="Dis"  style="margin:auto;  display: block; height:50px; width:300px; margin-left:50px; required" ></td>
					 </tr>
					  <tr>
					     <td><h3 style="margin-left:50px;" >Type</h3></td>
					     <td><input type="text" name="Type"  style="margin:auto;  display: block; height:50px; width:300px; margin-left:50px; required" ></td>
					 </tr>
			   </table><br>
			         
			        
					 <input type="submit" name="Submit" value="Add"  id="register"  style="margin:auto;  height:60px; width:300px; margin-left:200px; background-color:darkgrey; "  >
					 
					 <center><a href="logout.php"><input type="submit" value="LOG OUT" style="width:auto; height:50; width:500; margin-left:50; margin-top:50; background-color:lightblue; "></a></center><br>;   
			</form>
		</center>';
		
 if($_POST){
	 
     $Name = $_POST['Name'];
     $Quantity = $_POST['Quantity'];
	 $Price = $_POST['Price'];
     $Discription = $_POST['Dis'];
	 $Type = $_POST['Type'];
		
		 try {
      $host = '127.0.0.1';
        $dbname = 'webproject';
        $user = 'root';
        $pass = '';
        
        $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
		
		  
    $sql = "INSERT INTO `products`( `Name`, `Quantity`, `Price`, `Discription`, `Type`) VALUES (?,?,?,?,?)";
    $sth = $DBH->prepare($sql);
	
	$sth->bindParam(1, $Name, PDO::PARAM_INT);
	$sth->bindParam(2, $Quantity, PDO::PARAM_INT);
	$sth->bindParam(3, $Price, PDO::PARAM_INT);
	$sth->bindParam(4, $Discription, PDO::PARAM_INT);
	$sth->bindParam(5, $Type, PDO::PARAM_INT);
	$sth->execute();
     
           print("<script> 
		   alert('You have successfully Added!');
		   </script>");
		
		
} catch(PDOException $e) {echo $e;}  

		
		
		
		
		
		
		
		
 }
		
		
		
		
		?>
		
		
		
		