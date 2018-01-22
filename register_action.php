<?php require_once 'connection.php'; ?>
<?php require_once 'library.php'; ?>
<?php
    
    if(chkLogin()){
        header("Location: home.php");
    }
?>
<?php

   if(isset($_POST['reg'])){
       
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $temp  = $_POST['pass'];
        $options = array('cost' => 10);
        $pass = password_hash($temp, PASSWORD_BCRYPT, $options);
    
        $arrays = array(
            
            "fname"     => $fname,
            "lname"     => $lname,
            "email" 	=> $email,
            "Password"  => $pass
        
        );
		register($arrays);
        $response["success_msg"] = 1;  
			$response["message"] = "Product successfully Insert.";  
			echo json_encode($response);
			 
			 
        //$query = chkemail($email);
        /*if($query){
			
            
			
            header("Location: login.php");
			
            }
       else{
        //echo "Email already registered!";
		$response["success_msg"] = 0;  
         $response["message"] = "Email already registered!.";  
         echo json_encode($response);
           echo"<br>";
        echo "Please <a href='register.php'>Register</a> with another email ID";
       }*/
}
			 $_POST = array();
			 //header("Location: register_action.php");
?>