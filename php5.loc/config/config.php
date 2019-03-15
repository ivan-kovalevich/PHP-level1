<?
	$connect_db = mysqli_connect ("localhost", "root", "", "images_db");
	const gallery_dir = "gallery/";
	$max_file_upload = 2048000;
	$crop_img_width = 150;
	$crop_img_height = 150;
	$upload_file_type = "jpg,jpeg,png";
	$title = "Lesson 5";
?>