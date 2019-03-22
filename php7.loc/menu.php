<?

	$arr_menu = ['/' => 'Главная', 'calculator.php' => 'Калькулятор', 'comments.php' => 'Отзывы', 'registr.php' => 'Регистрация', 'enter.php' => 'Вход'];
	
	echo '<ul class="menu">';
	foreach ($arr_menu as $link => $title) {
		echo '<li><a href="'.$link.'">'.$title.'</a></li>';
	}
	echo "<li id='basket'><a href='basket.php'>Корзина</a></li>";
	echo '</ul>';