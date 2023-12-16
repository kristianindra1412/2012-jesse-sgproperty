<div class="logo">
<?php echo img(array("src" => "/assets/images/gui/logo.png")); ?>
Welcome,
<?php if (isset($_SESSION['sgprop_username'])) { ?>
	<?php echo $_SESSION['sgprop_username']; ?>
<?php } else { ?>
	<?php echo "Guest"; ?>
<?php } ?>
</div>