<?php
	include_once('db-config.php');
	$error  = array();
	$res    = array();
	$success = "";

		if(empty($_POST['first_name']))
		{
			$error[] = "First Name field is required";	
		}
		if(empty($_POST['last_name']))
		{
			$error[] = "Last Name field is required";	
		}
		if(empty($_POST['email']))
		{
			$error[] = "Email field is required";	
		}
	
		if(empty($_POST['password']))
		{
			$error[] = "Password field is required";	
		}
		
		if(empty($_POST['aggree']))
		{
			$error[] = "Agree with our terms and conditions";	
		}
		
		
		if($_POST['password'] != $_POST['cpassword'] )
		{
			$error[] = "Password field and confrim password field is not matched";	
		}
		
		if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false && $_POST['email']!= "" ) {
     
        } else {
          $error[] = "Enter Valid Email address";
         }


		if(count($error)>0)
		{
			$resp['msg']    = $error;
			$resp['status'] = false;	
			echo json_encode($resp);
			exit;
		}
		$pass = md5($_POST['password']);

		  $sqlQuery = "INSERT INTO 	users(first_name,last_name , email , password )
		  VALUES(:first_name,:last_name,:email,:password)";		   
		  $run = $db_con->prepare($sqlQuery);
		  $run->bindParam(':first_name', $_POST['first_name'], PDO::PARAM_STR);  
		  $run->bindParam(':last_name', $_POST['last_name'], PDO::PARAM_STR); 
		  $run->bindParam(':email', $_POST['email'], PDO::PARAM_STR); 
		  $run->bindParam(':password',$pass, PDO::PARAM_STR); 
		  $run->execute(); 	
		  
		  $resp['msg']    = "Account created successfully";
		  $resp['status'] = true;	
		  echo json_encode($resp);
			exit;	 


?>