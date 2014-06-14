$(function(){

	$('.cancel-product').click(function(){
		location.href = $(this).attr('url');
	});
	
	$('#add-image-product').click(function(){
										   
		$("input[name='image']").trigger('click');
	});
	
	$("input[name='image']").change(function(){
		$("#form-add-image-product").submit();
	});
	
	$(".remove-product").click(function(e){
		e.preventDefault();
		
		if(confirm( $(this).attr('text')))
		{
			location.href = $(this).attr('href');
		}
		
	
	});

});