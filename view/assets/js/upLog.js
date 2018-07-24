

$("#subPass").click(function() {


    if(upLog()){

        //envia para o back
        $.post("index.php", {
                controller: "Admin",
                action: "logUp",
                pass: $("#newPass2").val()
            },

            function (result) {


		if(result){

			$("#returnPass").addClass("alert alert-success");
                	$("#returnPass").html("Senha alterada com sucesso!");
		
		} else {
		
			$("#returnPass").addClass("alert alert-success");
                	$("#returnPass").html("Não foi possível alterar senha, tente mais tarde.");		

		}

                


            });



    } else {


        $("#returnPass").addClass("alert alert-danger");
        $("#returnPass").html("As senhas informadas não são iguais, tente novamente.");



    }


});

function upLog(){

    $newPass1 = $("#newPass1").val();
    $newPass2 = $("#newPass2").val();

    if($newPass1 == $newPass2){

        return true;

    } else {

        return false;
    }

}

$("#returnPass").click(function() {

    $("#returnPass").removeClass("alert alert-success");
    $("#returnPass").html("");
    $("#newPass1").val("");
    $("#newPass2").val("");

});

