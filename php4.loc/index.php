<?
	$title = "Lesson 4";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="css/main.css" type="text/css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<title><? echo $title ?></title>
</head>
<body>
	<div id="content">
		<h1><? echo $title ?></h1>
		<?
			$arr_menu = ['#first_task' => 'Первое задание', 'Задания со звёздочкой' => ['#second_task' => 'Второе задание', '#third_task' => 'Третье задание']];
			echo '<ul id="menu">';
			foreach ($arr_menu as $link => $title) {
				if ($title == end($arr_menu)) {
					echo '<li>'.$link.'<ul class="submenu">';
					foreach ($title as $sub_link => $sub_title) {
						if ($sub_title == end($title)) {
							echo '<li><a href="'.$sub_link.'">'.$sub_title.'</a></li></ul></li>';
						} else {
							echo '<li><a href="'.$sub_link.'">'.$sub_title.'</a></li>';
						}
					}
				} else {
					echo '<li><a href="'.$link.'">'.$title.'</a></li>';
				}
			}
			echo '</ul>';
		?>
	
		<div class="post">
			<div class="details">
				<h2><a href="#">Nunc commodo euismod massa quis vestibulum</a></h2>
				<p class="info">posted 3 hours ago in <a href="#">general</a></p>			
			</div>
			<div class="body">
				<p>Nunc eget nunc libero. Nunc commodo euismod massa quis vestibulum. Proin mi nibh, dignissim a pellentesque at, ultricies sit amet sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel lorem eu libero laoreet facilisis. Aenean placerat, ligula quis placerat iaculis, mi magna luctus nibh, adipiscing pretium erat neque vitae augue. Quisque consectetur odio ut sem semper commodo. Maecenas iaculis leo a ligula euismod condimentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut enim risus, rhoncus sit amet ultricies vel, aliquet ut dolor. Duis iaculis urna vel massa ultricies suscipit. Phasellus diam sapien, fermentum a eleifend non, luctus non augue. Quisque scelerisque purus quis eros sollicitudin gravida. Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at ipsum.</p>
			</div>
			<div class="x"></div>
		</div>
		
		<div class="task">
			<h3 id="first_task"><a href="#first task">Первое задание</a></h3>
			<p>Создать галерею фотографий. Она должна состоять из одной страницы, на которой пользователь видит все картинки в уменьшенном виде. При клике на фотографию она должна открыться в браузере в новой вкладке. Размер картинок можно ограничивать с помощью свойства width.</p><hr>
			<div class="gallery">
				<?
					$dir = "gallery/";
					if (file_exists($dir)) {
						$files = scandir($dir);
						foreach ($files as $key => $img_fname) {
							if ($key >= 2) {
								echo "<a href='".$dir.$img_fname."' target='_blank' class='image'><img src='".$dir.$img_fname."' alt='".$img_fname."'></a>";
							}
						}
					}
				?>
			</div>
			<div id="open"></div>
		</div>
		<h3>Задания со звёздочкой</h3>
		<div class="task">
			<h3 id="second_task"><a href="#second_task">Второе задание</a></h3>
			<p>*Строить фотогалерею, не указывая статичные ссылки к файлам, а просто передавая в функцию построения адрес папки с изображениями. Функция сама должна считать список файлов и построить фотогалерею со ссылками в ней.</p><hr>
			<form action="#" method="post" enctype="multipart/form-data">
				<input type="file" name="photo[]" accept="image/*" multiple><br>
				<input type="submit" value="Отправить">
			</form>
			<?
				function gallery_dynamic($dir) {
					if (file_exists($dir)) {
						$files = scandir($dir);
						foreach ($files as $key => $img_fname) {
							if ($key >= 2) {
								echo "<a href='".$dir.$img_fname."' target='_blank' class='image'><img src='".$dir.$img_fname."' alt='".$img_fname."'></a>";
							}
						}
					}
				}
				$dir1 = 'gallery2';
				echo gallery_dynamic($dir1);
				if(!isset($_FILES["photo"]["tmp_name"])) {
					$mass = scandir("gallery");
					foreach($mass as $k => $file) {
						If($k >= 2){
							echo $file."<br>";
						}
					}
				} else {
					for($i = 0; $i<count($_FILES["photo"]["name"]);$i++) {
						$path = "gallery/".$_FILES["photo"]["name"][$i];
						if(move_uploaded_file($_FILES["photo"]["tmp_name"][$i],$path)) {
							echo $_FILES["photo"]["name"][$i]."Файл загружен!<br>";
						}
					}
				}
				
			?>
		</div>
		<div class="task">
			<h3 id="third_task"><a href="#third_task">Третье задание</a></h3>
			<p>*[ для тех, кто изучал JS-1 ] При клике по миниатюре нужно показывать полноразмерное изображение в модальном окне.</p><hr>
			<?
				
			?>
		</div>
		
		<div id="footer">
			<p>Copyright &copy; <em>minimalistica</em> &middot; Design: Luka Cvrk, <a href="http://www.solucija.com/" title="Free CSS Templates">Solucija</a></p>
		</div>	
	</div>
<script src="js/script.js"></script>
</body>
</html>