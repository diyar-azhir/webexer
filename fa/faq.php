<?PHP

	namespace Dar;

	include '../func/Dar.php';
	
	$user = new User();
	
	$user_ip = $user->getUserIP() . " - " . "faq_fa";
	
	$user->appendToMem($user_ip);
	
	
	
	include '../func/form.php';

?>

<html lang="fa">

<head>

	<?php include 'css/meta-css.php'; ?>

    <title>پرسش و پاسخ</title>

</head>

<body>

	<?php $faq = true; ?>

	<?php $class_name = "menu-btn-selected"; ?>

    <?php include 'header.php'; ?>
	
	<br /><br /><br />

	<div class="w3-container">

	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" target="_blank" method="post">
      <div class="w3-section">
        <label style="float:right">نام</label>
        <input class="w3-input w3-border" type="text" name="name" required>
      </div>
      <div class="w3-section">
        <label style="float:right">ایمیل</label>
        <input class="w3-input w3-border" type="text" name="email" required>
      </div>
      <div class="w3-section">
        <label style="float:right;direction:rtl">متن پیام&nbsp;<span style="color:red">*</span></label><span class="error"><?php echo $msgErr;?></span>
        <input class="w3-input w3-border" type="text" name="message" required>
      </div>
      <button type="submit" class="w3-button w3-black w3-margin-bottom">ارسال<i class="fa fa-paper-plane w3-margin-left"></i></button>
    </form>
	
	</div><!-- w3-container -->
	
	<?php include 'footer.php'; ?>

</body>

</html>