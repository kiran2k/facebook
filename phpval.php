<?php

	$name=$_POST['fname'];
	$lname=$_POST['lname']; 
	$phone=$_POST['mobile'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$day=$_POST['day'];
	$month=$_POST['month'];
	$year=$_POST['year'];
	$gender=$_POST['gender'];
    $regname="/^[a-zA-Z ]*$/";
    $regemail="/^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/";
	$regpswd="/^(?=.*[A-Za-z])(?=.*\d)(?=.*[$@$!%*#?&])[A-Za-z\d$@$!%*#?&]{8,}$/";
	$regphone="/[2-9]{2}\d{8}/";
    $currentyear=Date("y");
    $age=$currentyear-$year;
	if($name=="")
	{
		$msg['namemsg']="enter name";
	}
	else if(strlen($name)<6)
	{
		$msg['namemsg']="minimum 6 letters";
	}
	else if(!preg_match($regname, $name))
	{
		$msg['namemsg']='invalid';
	}
	if($lname=="")
	{
		$msg['lnamemsg']="enter last name";
	}
	
	if($phone=="")
	{
		$msg['phonemsg']="enter phone";
	}
	else if((!preg_match($regphone,$mobile))||(strlen($mobile)<10))
	{
		$msg['phonemsg']="invalid mobile";
	}
	
	if($email=="")
	{
		$msg['emailmsg']="enter email";
	}
	else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
	{
		$msg['emailmsg']="invalid email!";
	}
	if($password=="")
	{
		$msg['passwordmsg']="enter password";
	}
	else if(!preg_match($regpswd,$password))
	{
		$msg['passwordmsg']="invalid password";
	}
	if(($day="day")||($month="month")||($year="year"))
	{
		$msg['dobmsg']="enter birthdate";
	}
	if($age<13)
	{
		$msg['dobmsg']="under age";
	}
	header("location:facephp.php?".http_build_query($msg));
?>