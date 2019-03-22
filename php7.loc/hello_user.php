<?
	require_once "config/server.php";
	require_once "config/reg_action.php";
	require_once "header.php";
	require_once "menu.php";
?>

<div id="welcome">
	<h2>Добро пожаловать, <span><?php echo $_SESSION['session_username'];?>! </span></h2>
</div>

<? require_once "footer.php"; ?>