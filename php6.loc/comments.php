<?
	require_once "config/server.php";
	require_once "header.php";
	require_once "menu.php";	
?>
<h1>Отзывы пользователей</h1>
<form method="POST" action="/comments.php" class="form_comments">
	<input name="name" type="text" placeholder="Имя">
	<textarea rows="10" cols="45" name="comment"placeholder="Ваш комментарий"></textarea>
	<input type="submit" value="Отправить">
 </form>

<?
	if(isset($_POST['name']) && isset($_POST['comment'])) {
		$name = addslashes($_POST['name']);
		$comment = addslashes($_POST['comment']);
		$sql= "INSERT INTO `comments` (`name`, `comment`) VALUES ('{$name}', '{$comment}')";
		$result = mysqli_query($connect_db, $sql);
	}
	
	$sql = mysqli_query($connect_db, 'SELECT `name`, `comment` FROM `comments`');
	while($result = mysqli_fetch_assoc($sql)) {
		echo 
		"<div class='comment'>
			<h4>{$result['name']}</h4>
			<p>{$result['comment']}</p>
		</div>";
	}
?>



<? require_once "footer.php"; ?>