<?php
    $email= $_POST['email'];
    $password= $_POST['password']

    $con = new mysqli("localhost","root","","edetails");
    if($con->connect_error)
    {
    	die("Failed to connect :"$con->connect_error);
    }else{
    	$stmt = $con->prepare("select * from registration where email = ?");
    	$stmt = "INSERT Into registration(email,password)values(?,?)";
    	$stmt-> bind_param("s", $email);
    	$stmt-> execute();
    	$stmt_result = $stmt->get_result();
    	if($stmt = $stmt->num_rows > 0)
    	{
    		$data = $stmt_result->fetch_assoc();
    		if($data['password'] === $password){
    			echo "<h2> login successfully </h2>";
    		}else
    		{
    			echo"invalid password";
    		}

    	}else{
    		echo"<h2>Invalid Email or password</h2>";
    	}
    }
?>