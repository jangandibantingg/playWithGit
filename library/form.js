
$("#submit").click( function() {

	var $this = $(this);

	//Call Button Loading Function
	BtnLoading($this);

	//Call Button Reset Function after AJAX or your code execution



	 $.post( $("#form").attr("action"),
	         $("#form :input").serializeArray(),
			 function(info) {

			   $("#info").empty();
			   $("#info").html(info);
			   BtnReset($this);
			 });


	$("#loginform").submit( function() {
	   return false;
	});

	function BtnLoading(elem) {
		$(elem).attr("data-original-text", $(elem).html());
		$(elem).prop("disabled", true);
		$(elem).html('<i class="spinner-border spinner-border-sm"></i> Please Wait');
	}

	function BtnReset(elem) {
		$(elem).prop("disabled", false);
		$(elem).html($(elem).attr("data-original-text"));
	}

});
