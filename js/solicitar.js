$(document).ready(function(){

	$(".solicitarForm").bind("submit", function(){

		$.ajax({
			type: $(this).attr("method"),
			url: $(this).attr("action"),
			data: $(this).serialize(),
			success: function(){
			swal("Good job!", "You clicked the button!", "success");
			},
			error: function(){
			alert("error");		
			}


		});

	});
});