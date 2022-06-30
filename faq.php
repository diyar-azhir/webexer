<?PHP

	namespace Dar;

	include 'func/Dar.php';
	
	$user = new User();
	
	$user_ip = $user->getUserIP() . " - " . "faq_en";
	
	$user->appendToMem($user_ip);
	
	
	
	include 'func/form.php';

?>

<!doctype html>

<html lang="en">

<head>

	<?php include 'css/meta-css.php'; ?>

    <title>F&amp;Q</title>

</head>

<body>

	<?php $faq = true; ?>

	<?php $class_name = "menu-btn-selected"; ?>

    <?php include 'header.php'; ?>
	
	<br /><br /><br />

	<div class="w3-container">

	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="name">
      </div>
      <div class="w3-section">
        <label>E-Mail</label>
        <input class="w3-input w3-border" type="text" name="email">
      </div>
      <div class="w3-section">
        <label>Message&nbsp;<span style="color:red">*</span></label><span class="error" style="color:red"><?php echo $msgErr;?></span>
        <textarea class="w3-block w3-border" col="2" row="10" name="message" required></textarea>
      </div>
      <button type="submit" class="w3-button w3-black w3-margin-bottom"><i class="fa fa-paper-plane w3-margin-right"></i>Send</button>
    </form>
	
	</div><!-- w3-container -->
	
	<?php include 'footer.php'; ?>

</body>

</html>