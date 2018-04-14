<?php

session_start();

$name =$_SESSION['name'];



echo'<center><image src="images/logo.png" style="margin:auto; display: block; height:150px; width:800px;" ></image></center><br>';




 echo '<center><input type="submit" value="MR Welcome! " style="width:auto; height:50; width:500; margin-left:50; margin-top:50; background-color:lightblue; "></center><br>';  
   
   



     echo '<center><a href="Myproducts.php"><input type="submit" value="View Product" style="width:auto; height:50; width:500; margin-left:50; margin-top:50; background-color:lightblue; "></a></center>';  

 echo '<center><a href="vieworder.php"><input type="submit" value="View Previous Order" style="width:auto; height:50; width:500; margin-left:50; margin-top:50; background-color:lightblue; "></a></center>';  
  


 echo '<center><a href="updateprofile.php"><input type="submit" value="Update Profile" style="width:auto; height:50; width:500; margin-left:50; margin-top:50; background-color:lightblue; "></a></center><br>';  



 echo '<center><a href="logout.php"><input type="submit" value="LOG OUT" style="width:auto; height:50; width:500; margin-left:50; margin-top:50; background-color:lightblue; "></a></center><br>';  


?>