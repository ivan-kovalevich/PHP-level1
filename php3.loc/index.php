<?
	$title = "Lesson 3";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="css/main.css" type="text/css" />
	<title><? echo $title ?></title>
</head>
<body>
	<div id="content">
		<h1><? echo $title ?></h1>
		<?
			/*$arr_menu = ['#first_task' => 'Первое задание', '#second_task' => 'Второе задание', '#third_task' => 'Третье задание', '#fourth_task' => 'Четвёртое задание', '#fifth_task' => 'Пятое задание', '#sixth_task' => 'Шестое задание', '#tasks_with_an_asterisk' => 'Задания со звёздочкой'];
			echo '<ul id="menu">';
			foreach ($arr_menu as $link => $title) {
				echo '<li><a href="'.$link.'"</a>'.$title.'</li>';
			}
			echo '</ul>'; Это меню без подменю*/
			$arr_menu = ['#first_task' => 'Первое задание', '#second_task' => 'Второе задание', '#third_task' => 'Третье задание', '#fourth_task' => 'Четвёртое задание', '#fifth_task' => 'Пятое задание', '#sixth_task' => 'Шестое задание', 'Задания со звёздочкой' => ['#seventh_task' => 'Седьмое задание', '#eighth_task' => 'Восьмое задание', '#ninth_task' => 'Девятое задание']];
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
			<p>С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка.</p><hr>
			<?
				$a = 0;
				while ($a <= 100) {
					if ($a % 3 == 0) {
						echo "$a, ";
					}
					$a++;
					continue;
				}
			?>
		</div>
		<div class="task">
			<h3 id="second_task"><a href="#second_task">Второе задание</a></h3>
			<p>С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так:<br>
			0 – это ноль.<br>
			1 – нечетное число.<br>
			2 – четное число.<br>
			3 – нечетное число.<br>
			…<br>
			10 – четное число.</p><hr>
			<?
				$b = 0;
				do {
					if($b == 0) {
						echo "$b - это ноль.<br>";
					} else if($b % 2 == 1) {
						echo "$b - нечетное число.<br>";
					} else {
						echo "$b - четное число.<br>";
					}
					$b++;
				} while ($b <= 10);
			?>
		</div>
		<div class="task">
			<h3 id="third_task"><a href="#third_task">Третье задание</a></h3>
			<p>Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в качестве значений – массивы с названиями городов из соответствующей области. Вывести в цикле значения массива, чтобы результат был таким:<br>
			Московская область:<br>
			Москва, Зеленоград, Клин<br>
			Ленинградская область:<br>
			Санкт-Петербург, Всеволожск, Павловск, Кронштадт<br>
			Рязанская область … </p><hr>
			<?
				$arr = [
							"Московская область:" => ["Москва", "Зеленоград", "Клин"],
							"Ленинградская область:" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"],
							"Рязанская область:" => ["Рязань", "Шацк", "Спасск-Рязанский", "Рыбное", "Скопин"],
							];
				foreach ($arr as $area => $city) {
					echo "<h4>$area</h4><br>";
					foreach ($city as $v) {
						if($v == end($city)) {
							echo "$v.";
						} else {
							echo "$v, ";
						}
					}
					echo "<br>";
				}
			?>
		</div>
		<div class="task">
			<h3 id="fourth_task"><a href="#fourth_task">Четвёртое задание</a></h3>
			<p>Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские буквосочетания (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).</p>
			<p>Написать функцию транслитерации строк.</p><hr>
			<?				
				function transliterations_str($my_str) {
					$transliterations = ['а'=>'a', 'б'=>'b', 'в'=>'v', 'г'=>'g', 'д'=>'d', 'е'=>'e', 'ё'=>'yo', 'ж'=>'zh', 'з'=>'z', 'и'=>'i', 'й'=>'y', 'к'=>'k', 'л'=>'l', 'м'=>'m', 'н'=>'n', 'о'=>'o', 'п'=>'p', 'р'=>'r', 'с'=>'s', 'т'=>'t', 'у'=>'u', 'ф'=>'f', 'х'=>'kh', 'ц'=>'ts', 'ч'=>'ch', 'ш'=>'sh', 'щ'=>'shch', 'ъ'=>'``', 'ы'=>'y', 'ь'=>'`', 'э'=>'e', 'ю'=>'yu', 'я'=>'ya', ' '=>' '];
					for ($i = 0; $i <= mb_strlen($my_str) - 1; $i++) {
						$translit_str .= $transliterations[mb_substr($my_str, $i, 1, "utf-8")];
					}
					return $translit_str;
				}
				$my_txt = 'вывести в цикле значения массива?';
				echo transliterations_str($my_txt);
				$txt_my = transliterations_str($my_txt);
			?>
		</div>
		<div class="task">
			<h3 id="fifth_task"><a href="#fifth_task">Пятое задание</a></h3>
			<p>Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.</p><hr>
			<?
				function my_replacement($txt) {
					$txt_replace = strtr($txt, " ", "_");
					return $txt_replace;
				}
				echo my_replacement($txt_my);
			?>
		</div>
		<div class="task">
			<h3 id="sixth_task"><a href="#sixth_task">Шестое задание</a></h3>
			<p>В имеющемся шаблоне сайта заменить статичное меню (ul - li) на генерируемое через PHP. Необходимо представить пункты меню как элементы массива и вывести их циклом. Подумать, как можно реализовать меню с вложенными подменю? Попробовать его реализовать.</p><hr>
			<p>Меню в верху)</p>			
		</div>
		<h3>Задания со звёздочкой</h3>
		<div class="task">
			<h3 id="seventh_task"><a href="#seventh_task">Седьмое задание</a></h3>
			<p>*Вывести с помощью цикла for числа от 0 до 9, НЕ используя тело цикла.</p><hr>
			<?
				for($i=0;$i<10;print$i,$i++){}
			?>
		</div>
		<div class="task">
			<h3 id="eighth_task"><a href="#eighth_task">Восьмое задание</a></h3>
			<p>*Повторить третье задание, но вывести на экран только города, начинающиеся с буквы «К».</p><hr>
			<?
				$arr = [
							"Московская область:" => ["Москва", "Зеленоград", "Клин"],
							"Ленинградская область:" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"],
							"Рязанская область:" => ["Рязань", "Шацк", "Спасск-Рязанский", "Рыбное", "Скопин"],
							];
				$k = 'К';
				foreach ($arr as $area => $city) {
					echo "<h4>$area</h4><br>";
					foreach ($city as $v) {
						if($v == end($city)) {
							echo stristr($v, $k).'.';
						} else {
							echo stristr($v, $k).', ';
						}
					}
					echo "<br>";
				}
			?>
		</div>
		<div class="task">
			<h3 id="ninth_task"><a href="#ninth_task">Девятое задание</a></h3>
			<p>*Объединить две ранее написанные функции в одну, которая получает строку на русском языке, производит транслитерацию и замену пробелов на подчеркивания (аналогичная задача решается при конструировании url-адресов на основе названия статьи в блогах).</p><hr>
			<?
				function my_translit_title($string) {
					$transliterations = ['а'=>'a', 'б'=>'b', 'в'=>'v', 'г'=>'g', 'д'=>'d', 'е'=>'e', 'ё'=>'yo', 'ж'=>'zh', 'з'=>'z', 'и'=>'i', 'й'=>'y', 'к'=>'k', 'л'=>'l', 'м'=>'m', 'н'=>'n', 'о'=>'o', 'п'=>'p', 'р'=>'r', 'с'=>'s', 'т'=>'t', 'у'=>'u', 'ф'=>'f', 'х'=>'kh', 'ц'=>'ts', 'ч'=>'ch', 'ш'=>'sh', 'щ'=>'shch', 'ъ'=>'``', 'ы'=>'y', 'ь'=>'`', 'э'=>'e', 'ю'=>'yu', 'я'=>'ya', ' '=>'_']; // я сдесь поменял пробел на нижнее подчёркивание.
					for ($i = 0; $i <= mb_strlen($string) - 1; $i++) {
						$translit_str .= $transliterations[mb_substr($string, $i, 1, "utf-8")];
					}
					return $translit_str;
				}
				$my_txt = 'вывести в цикле значения массива?';
				echo my_translit_title($my_txt);
			?>
		</div>
		<div id="footer">
			<p>Copyright &copy; <em>minimalistica</em> &middot; Design: Luka Cvrk, <a href="http://www.solucija.com/" title="Free CSS Templates">Solucija</a></p>
		</div>	
	</div>
</body>
</html>