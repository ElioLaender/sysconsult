

$("#backPass").click(function() {


        //envia para o back
        $.post("index.php", {
                controller: "Email",
                action: "emailPassRecover",
                email: $("#email").val()
            },

            function (result) {        
		
		  $("#returnBack").html(result);
			
            });

//"Dentro de poucos minutos você receberá um email com a redefinição de sua senha. Caso não possua mais o email de login, entre em contato com o suporte pelo email contato@psicosys.com.br"

});

