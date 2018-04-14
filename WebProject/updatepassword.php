<?php


session_start();



 $name=$_SESSION['name'];;
 

	 
	   try {
      $host = '127.0.0.1';
        $dbname = 'webproject';
        $user = 'root';
        $pass = '';
        
        $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);


		$sql = "select * from register";
		
       //  $sql = "select * from register ";
        $sth = $DBH->prepare($sql);

     

        $sth->execute();


      
    echo'<center><image src="images/logo.png" style="margin:auto; display: block; height:150px; width:800px;" ></image></center>';


   echo'<center>';

	echo '<table style=" border: 5px solid black;">';
	 
	  
	 
	  
	 
	 
	 
	 
	 
	 
         
      while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
		
         echo '<tr>';
         
         $id = $row['id'];
         echo '<td style="width:100px; height:100px; margin-bottum:20px; text-align: center;">' . $id . '</td>';       

           $name = $row['FName'];
         echo '<td style="width:100px; height:100px; margin-bottum:20px; text-align: center;">' . $name . '</td>';   

          $Qname = $row['LName'];
         echo '<td style="width:100px; height:100px; margin-bottum:20px; text-align: center;">' . $Qname . '</td>';   
 
 
         $pname = $row['Email'];
         echo '<td style="width:100px; height:100px; margin-bottum:20px; text-align: center;">' . $pname . '</td>';   
		 
		 
		  $dname = $row['Type'];
         echo '<td style="width:100px; height:100px; margin-bottum:20px; text-align: center;">' . $dname . '</td>';   


		 $password = $row['Password'];
         echo '<td style="width:100px; height:100px; margin-bottum:20px; text-align: center;">' . $password . '</td>';   
		 
	
		 
		 
		 

		 
         
		  echo '<td style="width:100px; height:100px; margin-bottum:20px;"><a href="updatetodefault.php?id='.$id.'"> <input type="button"  value="Update password to Default" ></a></td>'; 
		
		 
		 
         

          



              
         echo '</tr>';     
         
        }
        
        echo '</table>';

	
   echo'</center>';
	

 } catch(PDOException $e) {echo $e;}  

 

 	 echo '<center><a href="logout.php"><input type="submit" value="LOG OUT" style="width:auto; height:50; width:500; margin-left:50; margin-top:50; background-color:lightblue; "></a></center><br>';  

 
?>