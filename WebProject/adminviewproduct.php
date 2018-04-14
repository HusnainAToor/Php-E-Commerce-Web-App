
		<html>
    <head>
            <title>Hyper Star</title>
    </head>
	
	<body style="background-image:url(images/bg.png);">
	
	    <div style="height:auto; width:800px;margin:auto; border:solid; background-color:white; margin-top:50px;  ">
		
		     <image src="images/logo.png" style="margin:auto; display: block; height:150px; width:800px;" ></image>
		






		
		
		
		
		
	
<?php




session_start();
  
echo session_id();
		
		
		
	
    
    
    
    // DB
    try {
      $host = '127.0.0.1';
        $dbname = 'webproject';
        $user = 'root';
        $pass = '';
        
        $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
   
         $sql = "select * from products";
        $sth = $DBH->prepare($sql);

     

        $sth->execute();
        
     echo '<table style=" border: 5px solid black;">';
	 
	     echo '<tr style=" border: 5px solid black;">';
         
       
         echo '<td style="width:100px; height:100px; margin-bottum:20px; text-align: center;">ID</td>';       

         echo '<td style="width:100px; height:100px; margin-bottum:20px; text-align: center;">NAME</td>';   

         echo '<td style="width:100px; height:100px; margin-bottum:20px; text-align: center;">QUANTITY</td>';   
 
 
         echo '<td style="width:100px; height:100px; margin-bottum:20px; text-align: center;">PRICE</td>';   
		 
		 
		 
         echo '<td style="width:100px; height:100px; margin-bottum:20px; text-align: center;">DISCRIPTION</td>';   


		
		 
		 
		 
		 echo '<td style="width:100px; height:150px; margin-bottum:50px;">IMAGE</td>';
		 
	
		 
		 
		 
         echo '<td style="width:100px; height:100px; margin-bottum:20px; text-align: center;">TYPE</td>';  

		 
         
		 
		
		 
		 
           

           



              
         echo '</tr style=" border: 5px solid black;"> '; 
	 
	 
	 
	 
	 
	 
         
      while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
         echo '<tr>';
         
         $id = $row['id'];
         echo '<td style="width:100px; height:100px; margin-bottum:20px; text-align: center;">' . $id . '</td>';       

           $name = $row['Name'];
         echo '<td style="width:100px; height:100px; margin-bottum:20px; text-align: center;">' . $name . '</td>';   

          $Qname = $row['Quantity'];
         echo '<td style="width:100px; height:100px; margin-bottum:20px; text-align: center;">' . $Qname . '</td>';   
 
 
         $pname = $row['Price'];
         echo '<td style="width:100px; height:100px; margin-bottum:20px; text-align: center;">' . $pname . '</td>';   
		 
		 
		  $dname = $row['Discription'];
         echo '<td style="width:100px; height:100px; margin-bottum:20px; text-align: center;">' . $dname . '</td>';   


		 $iname = $row['Image'];
		 
		 
		 
		 echo '<td style="width:100px; height:150px; margin-bottum:50px;"><img id="imagecss" src="'. $iname .'"  style="width:80px; height:80px;"/></td>';
		 
	
		 
		 
		 
              $tname = $row['Type'];
         echo '<td style="width:100px; height:100px; margin-bottum:20px; text-align: center;">' . $tname . '</td>';  

		 
         
		 
		
		 
		 
         

        echo '<td style="width:100px; height:100px; margin-bottum:20px;"><a href="editproduct.php?id='.$id.'"> <input type="button"  value="Edit Product Details" ></a></td>'; 



              
         echo '</tr>';     
         
        }
        
        echo '</table>';

    } catch(PDOException $e) {echo $e;}  

 echo '<center><a href="logout.php"><input type="submit" value="LOG OUT" style="width:auto; height:50; width:500; margin-left:50; margin-top:50; background-color:lightblue; "></a></center><br>';  
           
			

?>
		
		
	
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
			
		</div>
		
		
		
		       
		
		
		
		
		<footer>
		
		
		
		
		
		</footer>
	
	
	
	
	</body>


</html>



</html>
		

		
		
		