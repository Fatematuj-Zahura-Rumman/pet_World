$(document).ready(function(){
$("#add_to_cart").click(function(){
	$.post( $("#myForm").attr("action"), $("#myForm :input").serializeArray(), function(info){
		$("#result").html(info);
		console.log( $( this ).serializeArray() ); 
	});
});

$("#myForm").submit(function(){
	return false;
});
});
