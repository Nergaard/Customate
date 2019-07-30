
<?php
//Including the neccessary pages; DB-connection and head.
	include_once('include/pdo_con_inc.php');
	include_once('modules/head.php');
?>

<!--This is the main wrapper. This has a reference to the file include. Include dictates the content that will be shown inside
the wrapper.--> 
<main class="main_wrapper">
		<?php include('include/include.php'); ?>
</main>

<?php include_once('modules/footer.php'); ?>
