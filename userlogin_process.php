<?php 
    // echo '<script>alert("yes");</script>';
	$invalidEmail='';
    $invalidPassword='';

	// error variable.
	$error = array();

	$email = validate_input_email($_POST['email']);
	if (empty($email)){
	    $error[] = "You forgot to enter your Email";
	}

	$password = validate_input_text($_POST['password']);
	if (empty($password)){
	    $error[] = "You forgot to enter your password";
	}


	function validate_input_text($textValue)
	{
	    if (!empty($textValue))
	    {
	        $trim_text = trim($textValue);
	        // remove illegal character
	        $sanitize_str = filter_var($trim_text, FILTER_SANITIZE_STRING);
	        return $sanitize_str;
	    }
	    return '';
    }

	function validate_input_email($emailValue)
	{
	    if (!empty($emailValue)){
	        $trim_text = trim($emailValue);
	        // remove illegal character
	        $sanitize_str = filter_var($trim_text, FILTER_SANITIZE_EMAIL);
	        return $sanitize_str;
	    }
	    return '';
	}

	if(empty($error))
	{

	  try
	    {
	  		$sql="SELECT * FROM Members WHERE email LIKE '%".$email."%'";
			$result=mysqli_query($conn,$sql);
			$singleRow=mysqli_fetch_assoc($result);//fetches a single row as an array
	  	    echo $singleRow['email'];
			if(password_verify($password,$singleRow['password'] ?? '0') && $singleRow['email']==$email)
			{
				session_start();
                // echo "veified";
	            //$_SESSION['user_id']=$singleRow['user_id'];
	            setcookie('rand',$singleRow['rand'],time()+(86400*365*2));

	            header("location:index.php");
	        }
	        else
	        {
	        	$invalidPassword="invalid password";
	        }

	        throw new Exception();
        } 
	  	catch(Exception $e)
	  	{
	  		$invalidEmail="invalid email";
	  	}	
	}
	else
	{
	    echo 'not validated';
	}

?>