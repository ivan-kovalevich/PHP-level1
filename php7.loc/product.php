<?
	require_once "config/server.php";
	require_once "header.php";
	require_once "menu.php";
	
	$sql_product = mysqli_query($connect_db, "SELECT `title_product`, `price_product`, `img_product`, `info_product` FROM `product` WHERE id_product ={$_GET['id']}");
	while($result = mysqli_fetch_assoc($sql_product)) {
		echo 
		"<div class='product_big_block'>
			<h2>{$result['title_product']}</h2>
			<img src='img_big/{$result['img_product']}'>
			<p>{$result['info_product']}</p>
			<div class='prise_product'>
				<span class='price'>{$result['price_product']}</span>
				<a href='#'>Купить</a>
			</div>
		</div>";
	}


	require_once "footer.php"; ?>