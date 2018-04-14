<?php


session_start();

echo session_id();

$_SESSION['total']=0;



echo '<center>';

 echo '<table style=" border: 5px solid black;">';
	
 echo '<tr>';
   echo '<td style="width:110px;">'; 
   

   echo '</td>';

  echo '<td style="width:160px;">'; 
   echo '<h2>';
 echo " NAME  ";
 echo '</h2>'; 
   echo '</td>';
   
   
   
  echo '<td style="width:160px;">'; 
   
 echo"=";
   echo '</td>';
   
    echo '<td style="width:160px;">'; 
   
   
   
      echo '<h1>';
 echo  $_SESSION['name'] ;
 echo '</h1>';
	
   echo '</td>';
                         


 echo '</tr>'; 
   echo '</table>';  




















$item = $_SESSION['cart'];





      


$tok = explode(" ",$item);



foreach($tok as $oneitem){
	
	
	getItemInfo($oneitem);
	
	
}

 
  
 
 function getItemInfo($id){
	 $total=0;
	 $pname=0;
	 
	 // db call
	 
	 //select * from products where id = $id
	 
	   try {  $host = '127.0.0.1';
        $dbname = 'webproject';
        $user = 'root';
        $pass = '';
        
        $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
   
        $sql = "select * from products where id = $id ";
        $sth = $DBH->prepare($sql);
		
		

      


        $sth->execute();
        
               $sth = $DBH->prepare($sql);

     

        $sth->execute();
        
     echo '<table style=" border: 5px solid black;">';
	 
	  
	 
	 
	 
	 
	 
         
      while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
         echo '<tr>';
         
         $id = $row['id'];
         echo '<td style="width:100px; height:50px; margin-bottum:20px; text-align: center;">' . $id . '</td>';       

           $name = $row['Name'];
         echo '<td style="width:100px; height:50px; margin-bottum:20px; text-align: center;">' . $name . '</td>';   

            
 
 
         $pname = $row['Price'];
         echo '<td style="width:100px; height:50px; margin-bottum:20px; text-align: center;">' . $pname . '</td>';   
		 
		
		 
		 
		  $dname = $row['Discription'];
         echo '<td style="width:100px; height:50px; margin-bottum:20px; text-align: center;">' . $dname . '</td>';   


		 $iname = $row['Image'];
		 
		 
		 
		 echo '<td style="width:50px; height:50px; margin-bottum:50px;"><img id="imagecss" src="'. $iname .'"  style="width:80px; height:80px;"/></td>';
		 
	
		 
		 
		 
              $tname = $row['Type'];
         echo '<td style="width:100px; height:50px; margin-bottum:20px; text-align: center;">' . $tname . '</td>';  

		 
         
		 
	
		 
         

          



              
         echo '</tr>';  

		   
	
	
	  	 
         
        }
        
        echo '</table>';
		
			
   $_SESSION['total']=$_SESSION['total']+$pname;
	
 
	

 } catch(PDOException $e) {echo $e;}  

 

 	
 
 } 
 echo '<br>';
 echo '<br>';
 echo '<table style=" border: 5px solid black;">';
	
 echo '<tr>';
   echo '<td style="width:110px;">'; 
   

   echo '</td>';

  echo '<td style="width:160px;">'; 
   echo '<B>';
 echo " Total Price   ";
 echo '</B>'; 
   echo '</td>';
   
   
   
  echo '<td style="width:160px;">'; 
   
 echo"=";
   echo '</td>';
   
    echo '<td style="width:160px;">'; 
   
 echo   $_SESSION['total'];	
   echo '</td>';
                         


 echo '</tr>'; 
   echo '</table>';  
   
    echo '<center><a href="confirm.php"><input type="submit" value="CHECK OUT " style="width:auto; height:30; margin-left:50; margin-top:50; background-color:red; "></a></center>';  
   
   echo '</center>';
   
    echo '<center><a href="logout.php"><input type="submit" value="LOG OUT" style="width:auto; height:50; width:500; margin-left:50; margin-top:50; background-color:lightblue; "></a></center><br>';  
?>