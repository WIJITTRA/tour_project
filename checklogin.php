<?php
	session_start();
	inclued("connect.php");
	$username  =$_POST['username'];
	$password  =base64_encode($_POST['password']);

	$sql  =  "select *from member where username ='$username' and password='$password'";
	$query  =mysql_query($sql)or die("error=$sql");
	$num  = mysql_num_rows($query);

	if($num==0)
	{
		echo "<script>alert('!! LOG IN FAIL !!');history.back();;</script";
		exit();
	}
	else 
	{
		$_SESSION['username']=$username;
		echo "<script>alert(' @ @ WELCOME @ @ ');history.back();;</script";
		exit();
	}
?>