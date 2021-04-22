<?php

	session_start();
	
	require_once '../includes/sql.php';
	
	$connection = @new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);
	
	if ($connection->connect_errno!=0)
	{
		echo "Error: ".$connection->connect_errno;
	}
	else
	{
	// $username = $_POST['accountNamePHP'];
	// echo "connection works";
	$username = $connection->real_escape_string($_POST['accountNamePHP']);
	$password = sha1($connection->real_escape_string($_POST['accountPasswordPHP']));
	
	$sql = "SELECT * FROM accounts WHERE name='$username' AND password='$password'";
	// echo $username;
	// echo '<br>';
	// echo $password;
	if ($result = @$connection->query($sql))
	{
		if ($result->num_rows > 0)
		{
			$row = $result->fetch_assoc();
			$_SESSION['user'] = $row['name'];
			$_SESSION['logged_in'] = true;
			
			$result->close();
			exit($_SESSION['user']);
		}
		else
		{
			exit('failed');
		}
	}
	$connection->close();
	exit('connectionError');
	}
	
?>