<?
	require_once "config/server.php";
	require_once "config/reg_action.php";
	require_once "header.php";
	require_once "menu.php";
	
	if(isset($_SESSION["session_username"])){
		//header("Location: hello_user.php");
	}

	if(isset($_POST["enter"])){
		if(!empty($_POST['user_name']) && !empty($_POST['user_pass'])) {
			$user_name=htmlspecialchars($_POST['user_name']);
			$user_pass=htmlspecialchars($_POST['user_pass']);
			$query =mysqli_query($connect_db, "SELECT * FROM user WHERE user_name='".$user_name."' AND user_pass='".$user_pass."'");
			$numrows=mysqli_num_rows($query);
			if($numrows!=0) {
				while($row=mysqli_fetch_assoc($query)) {
					$dbusername=$row['user_name'];
					$dbpassword=$row['user_pass'];
				}
			}
			if($user_name == $dbusername && $user_pass == $dbpassword) {
				$_SESSION['session_username']=$user_name;
				header("Location: /hello_user.php");
			} else {
				echo  "Invalid user_name or user_pass!";
			}
		} else {
			$message = "All fields are required!";
		}
	}
	
?>
<h1>Вход</h1>
<form action="#" id="loginform" method="post" name="loginform">
	<p><label for="user_name">Имя пользователя<br>
	<input class="input" id="user_name" name="user_name"size="20"
	type="text" value=""></label></p>
	<p><label for="user_pass">Пароль<br>
	<input class="input" id="user_pass" name="user_pass"size="20"
	type="password" value=""></label></p> 
	<p class="submit"><input class="button" name="enter" type="submit" value="Вход"></p>
	<p class="regtext">Еще не зарегистрированы? <a href="registr.php">Регистрация</a>!</p>
</form>

<? require_once "footer.php"; ?>