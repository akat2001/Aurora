//OBS: MANTER ESTE AQUIVO JUNTO DO AQUIVO cadastro.php SO FUNCIONA SE ESTIVEREM NA MESMA PASTA

//validação user
$(function(){
	$("#user").blur(function(){
		//Recuperar o valor do campo
		var pesquisa = $(this).val();
		
		//Verificar se há algo digitado
		if(pesquisa != ''){
			var dados = {
				palavra : pesquisa
			}
			$.post('DAL/Cadastro/Class_usuario_DAL.php', dados, function(retorna)
			{
				if(retorna != "")
				{
					var Retorno = document.getElementById("Retorno");
                	Retorno.innerText = retorna;
				}
				else
				{
					var Retorno = document.getElementById("Retorno");
					Retorno.innerText = "";
				}				
			});
		}
	});
});
//validação email
$(function(){
	$("#email").blur(function(){
		//Recuperar o valor do campo
		var pesquisa = $(this).val();
		
		//Verificar se há algo digitado
		if(pesquisa != ''){
			var dados = {
				palavra : pesquisa
			}
			$.post('DAL/Cadastro/Class_email_DAL.php', dados, function(retorna)
			{				
				if(retorna != "")
				{
					var Retorno = document.getElementById("Retorno");
                	Retorno.innerText = retorna;
				}
				else
				{
					var Retorno = document.getElementById("Retorno");
					Retorno.innerText = "";
				}				
			});
		}
	});
});