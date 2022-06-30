<?PHP

	namespace Dar;

	include '../func/Dar.php';
	
	$user = new User();
	
	$user_ip = $user->getUserIP() . " - " . "404   ";
	
	$user->appendToMem($user_ip);

?>

<!doctype html>

<html>

<head>

	<?php include '../css/meta-css.php'; ?>

    <title>Page not Found</title>

</head>

<body>

	<?php $class_name = ""; ?>

    <?php include '../header.php'; ?>

    <br /><br /><br />
    <center><h2>Page not found</h2></center>

</body>

</html>