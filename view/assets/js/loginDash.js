
    //Envio assíncrono do formulário de login.
$(function(){
    //Função que ao clicar no botão, irá fazer.
    $("#tEntrar").click(function(){

        var controller = "Dashboard";

        var action = "login";

        var email = $("#tM").val();

        var senha = $("#tSenha").val();

        var dir = $("#dirLogin").val();

        if($("#tMan").is(":checked")){
            var manterConectado = $("#tMan").val();
        } else {
            var manterConectado = "";
        }
        //Enviando as variáveis com os valores para a página envia_formulario.php e criando uma nova função para pegar o retorno da página envia_formulario.php
        $.post("index.php", {
                controller: controller,
                action: action,
                email: email,
                senha: senha,
                manterConectado: manterConectado
            },

            function (result) {
                //Caso verdadeiro redireciona para o painel de controle.
                if(result == "UserOK") {

                    window.location.href = "?controller=Dashboard&action=viewDashBoard";

                } else{

                    $( "#returnLogin" ).html(result);

                  

                }

            });



    });


});

