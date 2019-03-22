<?
	require_once "config/server.php";
	require_once "config/basket_action.php";
	require_once "header.php";
	require_once "menu.php";
	
	
	while($result = mysqli_fetch_assoc($sql)) {
		echo 
		"<div class='product_block'>
			<h2>{$result['title_product']}</h2>
			<div class='img_desc_product'>
				<a href='/product.php?id={$result['id_product']}'><img src='img_small/{$result['img_product']}'></a>
				<p>{$result['desc_product']}</p>
			</div>
			<div class='prise_product'>
				<span class='price'>{$result['price_product']}</span>
				<span class='order' id='{$result['id_product']}'>Заказать</span>
			</div>
		</div>";
	}



	require_once "footer.php"; ?>