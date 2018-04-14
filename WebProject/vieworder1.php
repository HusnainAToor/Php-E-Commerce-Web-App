<?php


session_start();



 $name=$_SESSION['name'];;
 

	 
	   try {
      $host = '127.0.0.1';
        $dbname = 'webproject';
        $user = 'root';
        $pass = '';
        
        $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);


		$sql = "select * from order1";
		
       //  $sql = "select * from order1 ";
        $sth = $DBH->prepare($sql);

     

        $sth->execute();


      
    echo'<center><image src="images/logo.png" style="margin:auto; display: block; height:150px; width:800px;" ></image></center>';


   echo'<center>';

	echo '<table style=" border: 5px solid black;">';
	 
	  
	 
	  
	 
	 
	 
	 
	 
	 
         
      while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
		
         echo '<tr>';
         
         $id = $row['id'];
         echo '<td style="width:100px; height:100px; margin-bottum:20px; text-align: center;">' . $id . '</td>';       

           $name = $row['name'];
         echo '<td style="width:100px; height:100px; margin-bottum:20px; text-align: center;">' . $name . '</td>';   

          $Qname = $row['orderstring'];
         echo '<td style="width:100px; height:100px; margin-bottum:20px; text-align: center;">' . $Qname . '</td>';   
 
 
         $pname = $row['total'];
         echo '<td style="width:100px; height:100px; margin-bottum:20px; text-align: center;">' . $pname . '</td>';   
		 
		 
		  $dname = $row['date'];
         echo '<td style="width:100px; height:100px; margin-bottum:20px; text-align: center;">' . $dname . '</td>';   


		 
		 
	
		 
		 
		 
              $tname = $row['status'];
         echo '<td style="width:100px; height:100px; margin-bottum:20px; text-align: center;">' . $tname . '</td>';  

		 
         
		  echo '<td style="width:100px; height:100px; margin-bottum:20px;"><a href="update.php?id='.$id.'"> <input type="button"  value="Update status to be shipped" ></a></td>'; 
		
		 
		 
         

          



              
         echo '</tr>';     
         
        }
        
        echo '</table>';

	
   echo'</center>';
	

 } catch(PDOException $e) {echo $e;}  

 

 	 echo '<center><a href="logout.php"><input type="submit" value="LOG OUT" style="width:auto; height:50; width:500; margin-left:50; margin-top:50; background-color:lightblue; "></a></center><br>';  

 
?>