

<?php
      $usuario_id       = isset($tab_usuario->usuario_id) ? $tab_usuario->usuario_id: "";
      $txt_nomeUsuario  = isset($tab_usuario->nomeUsuario) ? $tab_usuario->nomeUsuario: "";
      $txt_usuarioSenha = isset($tab_usuario->usuarioSenha) ? $tab_usuario->usuarioSenha: "";
      $txt_nome         = isset($tab_cad_pessoa->nome) ? $tab_cad_pessoa->nome: "";
      $txt_cpf          = isset($tab_cad_pessoa->cpf) ? $tab_cad_pessoa->cpf: "";
      $txt_rua          = isset($tab_cad_pessoa->rua) ? $tab_cad_pessoa->cpf: "";
      $txt_numero       = isset($tab_cad_pessoa->numero) ? $tab_cad_pessoa->numero: "";
      $txt_complemento  = isset($tab_cad_pessoa->complemento) ? $tab_cad_pessoa->complemento: "";
      $txt_bairro       = isset($tab_cad_pessoa->bairro) ? $tab_cad_pessoa->bairro: "";
      $txt_cidade       = isset($tab_cad_pessoa->cidade) ? $tab_cad_pessoa->cidade: "";
      $txt_sexo         = isset($tab_cad_pessoa->sexo) ? $tab_cad_pessoa->sexo: "";
      $txt_tel          = isset($tab_cad_pessoa->tel) ? $tab_cad_pessoa->tel: "";
      $txt_cel          = isset($tab_cad_pessoa->cel) ? $tab_cad_pessoa->cel: "";
      $txt_email        = isset($tab_cad_pessoa->email) ? $tab_cad_pessoa->email: "";
      $txt_uf           = isset($tab_cad_pessoa->uf) ? $tab_cad_pessoa->uf: "";
      $txt_dataNasc     = isset($tab_cad_pessoa->dataNasc) ? $tab_cad_pessoa->dataNasc: "";
      $txt_cep          = isset($tab_cad_pessoa->cep) ? $tab_cad_pessoa->cep: ""; 
       $txt_dt_nasc     = isset($tab_cad_pessoa->dataNasc) ? $tab_cad_pessoa->dataNasc: ""; 
      
?>

<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.form.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/js.js"></script>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link rel="stylesheet" href="<?php echo base_url() ?>assets/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="<?php echo base_url() ?>assets/fontawesome/css/all.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/fontawesome/css/brands.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/fontawesome/css/solid.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/estilo.css"/>
   <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/estilo.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/grade.css"/>
  <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-1.11.2.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>assets/js/js.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>assets/js/buscacep.js"></script>
      

<script type="text/javascript" >
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
       
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
            
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
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";

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

    </script>



    <title>Só Permuta</title>
  </head>
  <body>
        <div class="container-fluid p-3">
        
          <form action = "<?php echo base_url() ?>Meu_Perfil/atualizar" method = "post">
                       
                  <div class="form-row"  >
                      <div class="form-group col-md-6">

                        <label for="inputName">Nome</label>
                      
                        <input type="text" name="txt_nome" class="form-control" 
                         value="<?php echo $txt_nome ?>"/>
                      </div>                               
                      <div class="form-group col-md-3"/>
                        <label>CPF</label>
                        <input type="text" name="txt_cpf" class="form-control" 
                        value="<?php echo $txt_cpf ?>"/>
                      </div>
                  </div>
                  
                     <div class="form-row">
                        <div class="col-md-3">
                              <label>Cep:</label><p>
                               <input name="txt_cep" type="text"value="<?php echo $txt_cep ?>"
                               class="form-control" onblur="pesquisacep(this.value);"/>
                        </div>
                        <div class=" col-md-3">
                                 <label>Rua:</label>
                                 <input name="txt_rua" type="text" id="rua" 
                                 class="form-control" value="<?php echo $txt_rua ?>"/>
                        </div>

                      <div class=" col-md-2">
                                 <label>Numero:</label>
                                 <input name="txt_numero" type="text" id="numero" 
                                 class="form-control" value="<?php echo $txt_numero ?>" />
                        </div>
                        <div class="form-group col-md-2">
                           <label>Complemento:</label><p>
                           <input name="txt_complemento" type="text" id="txt_complemento" 
                           class="form-control" value="<?php echo $txt_complemento; ?>" />
                        </div>
                     </div>
                
                <div class="form-row">
                    <div class="form-group col-md-3">
                           <label>Bairro:</label>
                           <input name="txt_bairro" type="text" id="txt_bairro" 
                           class="form-control" value="<?php echo $txt_bairro ?>"/>
                    </div>
                    <div class="form-group col-md-3">
                        <label>Cidade:</label>
                         <input name="txt_cidade" type="text" id="txt_cidade" class="form-control"
                          value="<?php echo $txt_cidade ?>"/>
                    </div>
                    <div class="form-group col-md-3">
                        <label>Estado:</label>
                        <input name="txt_uf" type="text" id="txt_uf" class="form-control"
                         value="<?php echo $txt_uf ?>" />
                   </div>
                </div> 
                   
                  <div class="form-row"><br>
                      <div class="form-group col-md-3">
                        <label for="inputDataNasc">Data Nascimento</label>
                        <input type="Date" name="txt_dt_nasc" class="form-control" id="txt_dt_nasc"
                         value="<?php echo $txt_dt_nasc ?>" />
                      </div>
                      <div class="form-group col-md-3">
                         <label for="sexo">&nbsp;&nbsp;&nbsp;Sexo</label>
                         &nbsp;&nbsp; <input type="radio" class = "form-check-input" name="txt_sexo" 
                         value="<?php echo $txt_sexo ?>">&nbsp;M <span>&nbsp;</span></input>
                           <input type="radio" name="txt_sexo" class = "form-check-input" value="<?php echo $txt_sexo?>"
                            id="txt_sexo" /> &nbsp;F <br> 
                          <br></input>
                      </div>
                   
                      
                      <div class="form-group col-md-2">
                          <label for="inputTel">Tel</label>
                          <input type="text" name="txt_tel"  class="form-control" id="txt_tel"
                           value="<?php echo $txt_tel?>" />
                      </div>
                       <div class="form-group col-md-2">
                          <label for="inputCel">Cel</label>
                          <input type="text" class="form-control" name="cel" id="txt_cel"
                           value="<?php echo $txt_cel?>" />
                      </div>
                   </div>
                 <div class="form-row">
               
                  <div class="form-group col-md-5">
                      <label for="inputEmail4">E-mail</label>
                      <input type="email" class="form-control" name="txt_email" id="txt_email" 
                      value=" <?php echo $txt_email ?>" />
                  </div>
                    <div class="form-group col-md-3">
                      <label for="inputUser">Nome usuario</label>
                      <input type="txt" class="form-control" name="txt_nomeUsuario" id="txt_nomeUsuario" 
                       value="<?php echo $txt_nomeUsuario ?>" />
                    </div>
                    <div class="form-group col-md-3">
                      <label for="inputPassword4">Senha</label>
                      <input type="txt" class="form-control" name="txt_usuarioSenha" id="txt_usuarioSenha" 
                      value="<?php echo $usuarioSenha ?>" />
                    </div>
                  </div>
                  
                      <button type="submit" value = "Salvar" class="btn  btn-lg btn-secondary">
                        Atualizar </button>
                      <button type="reset" class="btn  btn-lg btn-secondary">Limpar</button>
     
                </form>
          
        </div>
      
  
   
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>