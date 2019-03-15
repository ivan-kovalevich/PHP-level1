<?
	include "config/function.php";
	include "config/config.php";
?>
<!doctype html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title><? echo $title ?></title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
  <a href="index.php"> Вернуться в галерею </a>
  <div>
    <img src="<?=$_GET['photo'] ?>">
  </div>

	<? seen($_GET['photo'],$connect_db); ?>
</body>
</html>