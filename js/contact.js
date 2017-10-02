$(document).ready(function() {
	var name, email, message, submit;
	name = $(".name");
	email = $(".email");
	message = $(".message");
	submit = $(".submit");

	$(submit).hover(function() {
		$(this).css("cursor", "pointer");
	}, function() {
		$(this).css("cursor", "normal");
	});
	$(submit).click(function() {
		var ncontent, econtent, mcontent;
		ncontent = $(name).val();
		econtent = $(email).val();
		mcontent = $(message).val();

		var lname, lemail, lmessage;


		lname = ncontent.length;
		lemail = econtent.length;
		lmessage = mcontent.length;


		if (lname == 0 || lemail == 0 || lmessage == 0) {
			alert("No se pudo enviar tu mensaje :(");
		}else{
			SendMessage(ncontent, econtent, mcontent);
		}
	});



	function SendMessage(name, email, message){
		$.ajax({
			url: 'core/controllers/messageController.php',
			type: 'POST',
			dataType: 'html',
			cache: false,
			data: {name: name, email: email, message: message},

			success:function(data){
				if (data == "success") {
					alert("Hemos recibido tu mensaje.")
					$(name).val("");
					$(email).val("");
					$(message).val("");
				}else{
					alert("Ocurrió un error al enviar tu mensaje");
				}
			}
		})
	}
});
