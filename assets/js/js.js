$(function(){
	$("#frmUpload").ajaxForm({
		url:base_url + "Meu_Perfil/fazerUpload",
		dataType: "json",
		complete: function (data){
			var ojb = JSON.parse(data.responseText)
			caminho = base_url + "upload/" + ojb.file_name;
			$("#txt_imagem").attr("src", caminho);
			$("#txt_fotoPessoa").var(ojb.file_name);
			$("#frmUpload").resetForm();

		}
	});
});




        a.nounderline:hover {text-decoration: none; }
   

  $("#txt_tel, #txt_cel").mask("(00) 0000-00000");
  $("#cpf").mask("000.000.000-00");
  $("#cep").mask("00000-000");

    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('txt_rua').value=("");
            document.getElementById('txt_bairro').value=("");
            document.getElementById('txt_cidade').value=("");
            document.getElementById('txt_uf').value=("");
            document.getElementById('txt_complemento').value=("");
       
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('txt_rua').value=(conteudo.logradouro);
            document.getElementById('txt_bairro').value=(conteudo.bairro);
            document.getElementById('txt_cidade').value=(conteudo.localidade);
            document.getElementById('txt_uf').value=(conteudo.uf);
            document.getElementById('txt_complemento').value=(conteudo.complemento);
            
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('txt_rua').value="...";
                document.getElementById('txt_bairro').value="...";
                document.getElementById('txt_cidade').value="...";
                document.getElementById('txt_uf').value="...";
                document.getElementById('txt_complemento').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };
