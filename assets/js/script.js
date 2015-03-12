$(document).ready(function(){

	var rows = 1;
	$('.tbl-dinamic tfoot tr').click(function(){
		$('.tbl-dinamic tbody tr:first').clone().appendTo('.tbl-dinamic tbody');
		$('.tbl-dinamic tbody tr:last-child input:first').focus();
		$('.tbl-dinamic tbody tr:last-child input').val('');
		rows++;
	});

	$('.row-add').click(function(){
		// $('.tbl-dinamic tfoot tr').trigger('click');
	});

	$(document).on('click','.tbl-dinamic .row-remove', function(){
		if(rows==1){
			alert('Não');
		}else{
			$(this).parent().parent().remove();
			rows--;
		}
	});

});