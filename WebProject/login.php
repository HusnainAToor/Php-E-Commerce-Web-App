



<?php
// This will only run if a post happens!!!
if($_POST){
    session_start();
	$_SESSION['cart']='';
	
	
$code =$_SESSION['cap_code'];

$user= $_POST['cap'];
if($code === $user)
{
	echo 'valid';
	
	
	
	
	  
	
   
     $Email = $_POST['username'];
     
	 $Password =md5($_POST['password'] . 'pas');
    
    
    
    // DB
    try {
      $host = '127.0.0.1';
        $dbname = 'webproject';
        $user = 'root';
        $pass = '';
        
        $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
   
        $sql = "select * from register where Email = ? and Password = ?";
        $sth = $DBH->prepare($sql);
		
		

       $sth->bindParam(1,$Email, PDO::PARAM_INT);
       $sth->bindParam(2,$Password, PDO::PARAM_INT);


        $sth->execute();
        
        if ($sth->rowCount() > 0){
            
            echo 'Code ran.....<br>';
            // Getting row from the db
            $rec = $sth->fetch(PDO::FETCH_ASSOC);
            
            // getting values from the row            
            $id = $rec['id'];
            $type = $rec['Type'];
             $_SESSION['name'] = $rec['FName'];
			 
			 
			 
            if($type == 'Customer'){
				
				
                
               echo '<script>window.location="customerselect.php" </script>';
               die;
           }
			   else if($type == 'deliveryboy'){
				
				
                
               echo '<script>window.location="vieworder1.php" </script>';
               die;
           }
		    else if($type == 'staff'){
				
				
                
               echo '<script>window.location="addminselect.php" </script>';
               die;
           }
		    else if($type == 'admin'){
				
				
                
               echo '<script>window.location="updatepassword.php" </script>';
               die;
           }
			   
		   }
		   
		   
			   
			   
		   
		   
		   else{
			   
			   
			   echo' <script> 
		  alert("Data not found u need registeration!");
		 
		   
			    window.location="index.php" </script>';
		   die;
		   
		   }
         

    } catch(PDOException $e) {echo $e;}  

}



   
   }

?>

