<script type="text/javascript" >

  $("#txtCep").mask("00000-000");

function meu_callback(data) {
        if (!("erro" in data)) {
            //Atualiza os campos com os valores.
            document.getElementById('txtRua').value=(data.logradouro);
            document.getElementById('txtBairro').value=(data.bairro);
            document.getElementById('txtCidade').value=(data.localidade);
            document.getElementById('txtEstado').value=(data.uf);
            
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
    

$(document).ready(function(){
    $("#txtCep").focusout(function(){
            var cep = $("#txtCep").val();
            cep = cep.replace("-", "");
 
            var urlStr = "https://viacep.com.br/ws/"+ cep +"/json/";
         
            $.ajax({
                url : urlStr,
                type : "get",
                dataType : "json",
                success : function(data){
                    console.log(data);
                     
                    $("#txtCidade").val(data.localidade);
                    $("#txtEstado").val(data.uf);
                    $("#txtBairro").val(data.bairro);
                    $("#txtRua").val(data.logradouro);
                    $("#txtComplemento").val(data.complemento);
                },
                error : function(erro){
                    console.log(erro);
            alert("CEP não encontrado.");

                }
            });
    });
});

</script>


