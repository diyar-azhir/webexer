<?PHP

	namespace Dar;

	include '../func/Dar.php';
	
	$user = new User();
	
	$user_ip = $user->getUserIP() . " - " . "403   ";
	
	$user->appendToMem($user_ip);

?>

<!doctype html>

<html>

<head>

	<?php include '../css/meta-css.php'; ?>

    <title>Access Denied!</title>

</head>

<body>

	<?php $class_name = ""; ?>

    <?php include '../header.php'; ?>

    <br /><br /><br />
    <center><h2>Access Denied!</ht></center>

</body>

</html>