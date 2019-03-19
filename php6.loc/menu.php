<?

	$arr_menu = ['/' => 'Главная', 'calculator.php' => 'Калькулятор', 'comments.php' => 'Отзывы'];
	
	echo '<ul class="menu">';
	foreach ($arr_menu as $link => $title) {
		echo '<li><a href="'.$link.'">'.$title.'</a></li>';
	}
	echo '</ul>';