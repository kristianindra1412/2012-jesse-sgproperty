<?php if ($message_data == "success") { ?>
	<div align="center">
	Congratulation! You've posted new advertisment.
	<?php if ($_SESSION['sgprop_type'] == "AGENT") { ?>
		3 Points already deducted from your account.
		
		You can bump your advertisment with 1 Point only.
	<?php } ?>
	<?php if ($_SESSION['sgprop_type'] == "OWNER") { ?>
		You can post another advertisment after this advertisment is expired.
	<?php } ?>
	</div>
<?php } ?>