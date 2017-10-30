$(function(){
	$('#cell-model').change(function(){
		var id = $(this).val();
	});
	$('.cell-footer').find('b').text($('#screen-ab').val());
	$('#screen-color').change(function(){
		$('.cell-footer').find('b').text($(this).val());
	});
});