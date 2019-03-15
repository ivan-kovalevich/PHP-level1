<?
	include "config/config.php";
	
	if (mysqli_connect_error()) {
		printf("Не удалось подключиться: \n", mysqli_connect_error());
		exit();
	}
	
	function seen ($f_name,$connect_db) {
		mysqli_query($connect_db,"UPDATE image SET seen = seen + 1  WHERE name_photo = '".$f_name."';");
		$sql = "SELECT * FROM `image` WHERE `name_photo` = '".$f_name."';";
		$res = mysqli_query($connect_db,$sql);
		while($data_img = mysqli_fetch_assoc($res)) {
			echo "Просмотров: ".$data_img['seen'];
		}
	}
	
	function check_file_db ($f_name, $connect_db) {
		$sql = "SELECT * FROM image WHERE name_photo IN ('".$f_name."')";
		$res = mysqli_query($connect_db,$sql);
		$data = mysqli_fetch_assoc($res);
		if (($data[name]) != $f_name) {
			return true;
		}
	}
	
	function update_dir($folder) {
		if (!file_exists($folder)) {
			mkdir ($folder, 0755);
		}
	}
	
	
	if((isset($_POST['upload'])) && ($_FILES[user_file][name][0]) != "") {
		$uploads_dir = gallery_dir;
		foreach ($_FILES[user_file][name] as $key => $f_name) {
			$file_name = $_FILES[user_file][name][$key];
			$file_size = $_FILES[user_file][size][$key];
			$file_tmp = $_FILES[user_file][tmp_name][$key];
			move_uploaded_file($file_tmp , $uploads_dir.$file_name);
			if (move_uploaded_file($file_tmp , $uploads_dir.$file_name) === true) {
				mysqli_query($connect_db,"INSERT INTO `image`(`name_photo`, `size`) VALUES ('".$file_name."', '".$file_size."');");
			} else {
				echo "Файл уже существует";				
			}			
		}
	}
	
	
	$sql = "SELECT * FROM image ORDER BY seen DESC";
	$res = mysqli_query($connect_db,$sql);
	while($data_img[] = mysqli_fetch_assoc($res)){}
?>