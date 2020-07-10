<!--
Into this file, we create a layout for welcome page.
-->

<?php
	session_start();
	if(!isset($_SESSION['LoginUser'])){
		header('location: ../home.php');
	}
?>
<div class="jumbotron">
	<center>
		<h1>Welcome <?php echo $_SESSION['LoginUser']; ?></h1>
	</center>
</div>