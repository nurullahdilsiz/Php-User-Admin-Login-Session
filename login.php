

<?php

@session_start();
ob_start();

//print_r($user);


if (isset($_POST['submit'])) {
	
	$user_name= $_POST['user_name'];
	$user_pass= $_POST['user_pass'];

	if (!$user_name || !$user_pass) {
		$error ="sorry error password or user name";
	}else if($user_name != $user['user_name']){
		$error ="sorry error user name";

	}else if($user_pass != $user['user_pass']){

		$error ="sorry error user password";
	}else{

		$_SESSION['user_name'] = $user['user_name'];
		header("Location:home.php");
	}


}


?>
<?php if(isset($error)):  ?>

<?php echo $error;  ?>
<?php  endif; ?>

<!DOCTYPE html>

<head>
	<meta charset="UTF-8">
	<title>Admin Panel Login</title>
</head>
<body>
	

<form action="" method="post">

<input type="text" name="user_name" placeholder="user name">
<input type="password" name="user_pass" placeholder="password">
<input type="hidden" name="submit" value="1">
<input type="submit" value="submit">

</form>



</body>
</html>


