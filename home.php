
<?php


@session_start();
ob_start();

if($_SESSION['user_name']){
 }else{ 
 	echo '<script language="javascript">window.location="index.php";</script>'; die();

 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Home Panel</title>
</head>
<body>
	<h1>Welcome to Users</h1>

   <a href="logout.php">Log Out</a>

</body>
</html>