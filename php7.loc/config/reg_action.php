<?
	require_once "server.php";
	if(isset($_POST["register"])){
		if(!empty($_POST['user_name']) && !empty($_POST['user_pass']) && !empty($_POST['user_email'])) {
			$user_name=htmlspecialchars($_POST['user_name']);
			$user_pass=htmlspecialchars($_POST['user_pass']);
			$user_email=htmlspecialchars($_POST['user_email']);
			$sql = "SELECT * FROM user WHERE user_name='".$user_name."'";
			$query=mysqli_query($connect_db, $sql);
			$numrows=mysqli_num_rows($query);
			if($numrows==0) {
				$sql="INSERT INTO `user` (`user_name`, `user_pass`, `user_email`) VALUES ('$user_name', '$user_pass', '$user_email')";
				$result=mysqli_query($connect_db, $sql);
				if($result){
					header('Location: http://php7.loc');
				} else {
					$message = "Failed to insert data information!";
				}
			} else {
				$message = "That user_name already exists! Please try another one!";
			}
		} else {
			$message = "All fields are required!";
		}
	}
	
	if (!empty($message)) {
		echo "<p class='error'>MESSAGE: ". $message . "</p>";
	} 
?>