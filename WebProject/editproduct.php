
 
		
		
		<?php
		
		
	session_start();



 $name=$_SESSION['name'];	
		
		 $_SESSION['id']=$_GET['id'];
	
		
		
	echo'	<center><image src="images/logo.png" style="margin:auto; display: block; height:150px; width:800px;" ></image></center>
 
 <center><form   style="align:center; " action="final.php" method="post">
				
				<table style="text-align:left;">
				
				
				
				
				
				
				     <tr>
					     <td><h3 style="margin-left:50px;" > Name</h3></td>
					     <td><input type="text" name="Name" style="margin:auto;  display: block; height:50px; width:200px; margin-left:50px; " ></td>
					 </tr>
					 <tr>
					     <td><h3 style="margin-left:50px;" >Quantity</h3></td>
					     <td><input type="text" name="Quantity"  style="margin:auto;  display: block; height:50px; width:200px; margin-left:50px; "></td>
					 </tr>
					  <tr>
					     <td><h3 style="margin-left:50px;" >Price</h3></td>
					     <td><input type="text" name="Price"  style="margin:auto;  display: block; height:50px; width:300px; margin-left:50px; "></td>
					 </tr>
					  <tr>
					     <td><h3 style="margin-left:50px;" >Discription</h3></td>
					     <td><input type="text" name="Dis"  style="margin:auto;  display: block; height:50px; width:300px; margin-left:50px; "></td>
					 </tr>
					
					  <tr>
					     <td><h3 style="margin-left:50px;" >Type</h3></td>
					     <td><input type="text" name="Type"  style="margin:auto;  display: block; height:50px; width:300px; margin-left:50px; " ></td>
					 </tr>
			   </table><br>
			         
			        
					 <input type="submit" name="Submit" value="Update"  id="register"  style="margin:auto;  height:60px; width:300px; margin-left:200px; background-color:darkgrey; "  >
					 
					 <center><a href="logout.php"><input type="submit" value="LOG OUT" style="width:auto; height:50; width:500; margin-left:50; margin-top:50; background-color:lightblue; "></a></center><br>;   
			</form>
		</center>';
		
 
 
		
		
		
		
		?>
		
		
		
		