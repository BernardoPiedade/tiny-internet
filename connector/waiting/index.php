<?php $loading = true; ?>
<link rel="stylesheet" href="style/style.css">
<?php if ($loading == true) : ?>
	<div class="radial centered">
		<div class="circle left rotate"><span></span></div>
		<div class="circle right rotate"><span></span></div>
	</div>
<?php endif ?>

<?php

session_start();

$_SESSION['user'] = rand();

header("location: ../TinyNet/index.php")

?>