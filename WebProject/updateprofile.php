
 
		
		
		<?php
		
		
	session_start();



 $name=$_SESSION['name'];	
		
		
		
	echo'	<center><image src="images/logo.png" style="margin:auto; display: block; height:150px; width:800px;" ></image></center>
 
 <center><form  id="RegisterForm" style="align:center; " action="updateprofile.php" method="post">
				
				<table style="text-align:left;">
				     <tr>
					     <td><h3 style="margin-left:50px;" >First Name</h3></td>
					     <td><input type="text" name="name1" style="margin:auto;  display: block; height:50px; width:200px; margin-left:50px;"></td>
					 </tr>
					 <tr>
					     <td><h3 style="margin-left:50px;" >Last Name</h3></td>
					     <td><input type="text" name="LastName"  style="margin:auto;  display: block; height:50px; width:200px; margin-left:50px;"></td>
					 </tr>
					  <tr>
					     <td><h3 style="margin-left:50px;" >Email</h3></td>
					     <td><input type="Email" name="username"  style="margin:auto;  display: block; height:50px; width:300px; margin-left:50px;"></td>
					 </tr>
					 <tr>
					     <td><h3 style="margin-left:50px;" >Password</h3></td>
					     <td><input type="password" name="password"  style="margin:auto;  display: block; height:50px; width:300px; margin-left:50px;" ></td>
					 </tr>
					 
			   </table><br>
			         
			        
					 <input type="submit" name="Submit" value="UPDATE"  id="register"  style="margin:auto;  height:60px; width:300px; margin-left:200px; background-color:darkgrey; "  >
			</form>
		</center>';
		
 if($_POST){
	 
     $Firstname = $_POST['name1'];
     $Lastname = $_POST['LastName'];
	 $Email = $_POST['username'];
     $Type = "Customer";
	 $Password = $_POST['password'];
		
		 try {
      $host = '127.0.0.1';
        $dbname = 'webproject';
        $user = 'root';
        $pass = '';
        
        $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
		
		if($Firstname!= ''){


		$sql = "UPDATE register SET Fname='$Firstname' where Fname='$name'";
		
       //  $sql = "select * from order1 ";
        $sth = $DBH->prepare($sql);
        
     

        $sth->execute();
		echo"You have successfully updated your name<br><br>";
		}
		if($Lastname!= ''){


		$sql = "UPDATE register SET Lname='$Lastname' where Fname='$name'";
		
       //  $sql = "select * from order1 ";
        $sth = $DBH->prepare($sql);

     

        $sth->execute();
		echo"You have successfully updated your LastName<br><br>";
		}
		if($Email!= ''){


		$sql = "UPDATE register SET Email='$Email' where Fname='$name'";
		
       //  $sql = "select * from order1 ";
        $sth = $DBH->prepare($sql);

     

        $sth->execute();
			echo"You have successfully updated your Email<br><br>";
		}
		if($Password!= ''){

            $Pas = md5($Password . 'pas');
		$sql = "UPDATE register SET Password='$Pas' where Fname='$name'";
		
       //  $sql = "select * from order1 ";
        $sth = $DBH->prepare($sql);

     

        $sth->execute();
			echo"You have successfully updated your Password<br><br>";
		}
		
		
} catch(PDOException $e) {echo $e;}  

		
		
		
		
		
		
		
		
 }
		
		
		 echo '<center><a href="logout.php"><input type="submit" value="LOG OUT" style="width:auto; height:50; width:500; margin-left:50; margin-top:50; background-color:lightblue; "></a></center><br>';  
		
		?>
		
		
		
		