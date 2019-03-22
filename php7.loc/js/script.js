$(document).ready(function(){
	$(".order").click(function(){
		var id = $(this).attr('id');
		var str = "id_product =" + id;
        $.ajax({
			type: "POST",
			url: 'config/basket_action.php',
			data: str,
			success: function(answer) {
                $('.order').html(answer); 
                }
            });
	});	
});