<?php

	namespace Dar;

	include '../func/Dar.php';
	
	$user = new User();
	
	$user_ip = $user->getUserIP() . " - " . "idx_fa";
	
	$user->appendToMem($user_ip);

?>

<!doctype html>

<html lang="fa">

<head>

	<?php include 'css/meta-css.php'; ?>

    <title>Dexloper</title>
	
	<?php /* <meta name="description" content="" /> */ ?>
	
	<?php /* <meta name="keywords" content="" /> */ ?>

    <?php /* <meta name="google-site-verification" content="" /> */ ?>

</head>

<body>

	<?php $faq = false; ?>

	<?php $class_name = "menu-btn-selected"; ?>

    <?php include 'header.php'; ?>

	<?php include 'footer.php'; ?>

</body>

</html>