<html>
    <head>
            <title>Hyper Star</title>
			
			

			

			
			
    </head>
	
	<body style="background-image:url(images/bg.png);">
	
	    
		
		
		
		
		
		
		
		
		
		
		<?php

 if($_POST){
	 
     $Firstname = $_POST['FirstName'];
     $Lastname = $_POST['LastName'];
	 $Email = $_POST['username'];
     $Type = "Customer";
	 $Password = md5($_POST['password'] . 'pas');
  
    
    try {
        $host = '127.0.0.1';
        $dbname = 'webproject';
        $user = 'root';
        $pass = '';
        
        $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
   
     
    $sql = "INSERT INTO `register`( `FName`, `LName`, `Email`, `Type`, `Password`) VALUES (?,?,?,?,?)";
    $sth = $DBH->prepare($sql);
	
	$sth->bindParam(1, $Firstname, PDO::PARAM_INT);
	$sth->bindParam(2, $Lastname, PDO::PARAM_INT);
	$sth->bindParam(3, $Email, PDO::PARAM_INT);
	$sth->bindParam(4, $Type, PDO::PARAM_INT);
	$sth->bindParam(5, $Password, PDO::PARAM_INT);
	$sth->execute();
     
           print("<script> 
		   alert('You have successfully registered!');
		   </script>");
		   
		   echo'<script> window.location="index.php";</script>';
		
		
            
              
      
	
    
     } catch(PDOException $e) {echo 'Error' . $e;} 

     
}
		
		?>
		
		
		
		
		
		
		

	   
		
		    <script>

                        function myFunction2() {
						
                        document.getElementById("RegisterForm").style.display = "block";
	                    document.getElementById("LoginForm").style.display = "none";
                         }
                        function myFunction1() {
                        document.getElementById("RegisterForm").style.display = "none";
	                    document.getElementById("LoginForm").style.display = "block";
                        }
						
            </script>
		
		<div style="height:auto; width:600px;margin:auto; border:solid; background-color:white; margin-top:50px; background-image:url(images/bg.png); ">
		
		     <image src="images/logo.png" style="margin:auto; display: block; height:150px; width:600px;" ></image>
		<br><br>
			 
			     <button type="button" onclick="myFunction1()" style="margin-left:200px; width:100; height:40;">Log In</button>
				  <button type="button" onclick="myFunction2()" style="margin-left:30px; width:100; height:40;">Register</button><br><br>


					 
			    <form id="LoginForm" style="align:center; display:none; "  action="login.php" method="post">
				
				     <table style="text-align:left;">
				    
					    <tr>
					        <td><h3 style="margin-left:50px;" >Email</h3></td>
					        <td><input type="Email" name="username" id="username" style="margin:auto;  display: block; height:50px; width:300px; margin-left:50px;" required></td>
					    </tr>
					    <tr>
					         <td><h3 style="margin-left:50px;" >Password</h3></td>
					         <td><input type="password" name="password" id="password" style="margin:auto;  display: block; height:50px; width:300px; margin-left:50px;" required></td>
					    </tr>
						 <tr>
					         <td></td>
					         <td><img src='captcha.php' style="margin:auto;  display: block; height:50px; width:200px; margin-left:50px;"></td>
					    </tr>
						
						
					      <tr>
					         <td><h3 style="margin-left:50px;" >Captcha</h3></td>
					         <td><input type='text' name='cap' style="margin:auto;  display: block; height:50px; width:300px; margin-left:50px;"></td>
					    </tr>	
			         </table><br>
			         
			       <input type="submit" name="Submit" value="Log In"  id="login"  style="margin:auto; display:block; height:60px; width:300px; margin-left:187px; background-color:darkgrey; "  >
					
			    </form>
				
				

		  <form  id="RegisterForm" style="align:center;  display:none;" action="index.php" method="post">
				
				<table style="text-align:left;">
				     <tr>
					     <td><h3 style="margin-left:50px;" >First Name</h3></td>
					     <td><input type="text" name="FirstName" style="margin:auto;  display: block; height:50px; width:200px; margin-left:50px;"required></td>
					 </tr>
					 <tr>
					     <td><h3 style="margin-left:50px;" >Last Name</h3></td>
					     <td><input type="text" name="LastName"  style="margin:auto;  display: block; height:50px; width:200px; margin-left:50px;"required></td>
					 </tr>
					  <tr>
					     <td><h3 style="margin-left:50px;" >Email</h3></td>
					     <td><input type="Email" name="username"  style="margin:auto;  display: block; height:50px; width:300px; margin-left:50px;"required></td>
					 </tr>
					 <tr>
					     <td><h3 style="margin-left:50px;" >Password</h3></td>
					     <td><input type="password" name="password"  style="margin:auto;  display: block; height:50px; width:300px; margin-left:50px;" required></td>
					 </tr>
					 
			   </table><br>
			         
			        
					 <input type="submit" name="Submit" value="Register"  id="register"  style="margin:auto;  height:60px; width:300px; margin-left:200px; background-color:darkgrey; "  >
			</form>
		
		
		</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<footer>
		
		
		
		
		
		</footer>
	
	
	
	
	</body>


</html>



</html>