<?
	require_once "config.php";
	
	
	
	if (mysqli_connect_error()) {
		printf("Не удалось подключиться: \n", mysqli_connect_error());
		exit();
	}
	
	$sql = mysqli_query($connect_db, 'SELECT `id_product`, `title_product`, `price_product`, `img_product`, `desc_product` FROM `product`');
	
	
	
	
	
	
?>