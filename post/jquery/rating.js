
$(document).ready(function(){
	$('#submit').click(function(){
		var rating = $('input:radio[name=rating]:checked').val();
		var hidden_id = $('#hidden_id').val();
		$.post('rate.php', {rating : rating, id : hidden_id}, 
		function(){
			window.location.reload();
		});
	});
});

$(document).ready(function(){
	$(".rating").jRating({
		decimalLength : 1,
		rateMax : 5
	});
});