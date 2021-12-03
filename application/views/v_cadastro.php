<?php $this->load->view('v_cabecalho'); ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<script src="js/jquery-3.4.1.min.js"></script>
<!-- js para personalizar -->
<script src="js/app.js"></script>
<!--bootstrap css CDN -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!--css Date Picker-->
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap-datepicker.standalone.css">


    <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link rel="stylesheet" href="<?php echo base_url() ?>assets/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="<?php echo base_url() ?>assets/fontawesome/css/all.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/fontawesome/css/brands.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/fontawesome/css/solid.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap-datepicker.css"/> 
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/estilo.css"/>
   <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/estilo.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/grade.css"/>
  <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-1.11.2.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>assets/js/js.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap-datepicker.min.js"></script>
 <script type="text/javascript" src="<?php echo base_url() ?>assets/lacales/bootstrap-datepicker.pt-BR.min">
    </script> 
  <script type="text/javascript" src="<?php echo base_url() ?>assets/js/buscacep.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
      

<script type="text/javascript" >
 $("#numTel, #numCel").mask("(00) 0000-00000");
  $("#cpf").mask("000.000.000-00");
  $("#cep").mask("00000-000");

  

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

//valida a data de nascimento, data>=18 e data<=100
$('#inputDataNasc').datepicker();
$('#inputDataNasc').on('changeDate', function() {
    $('#my_hidden_input').val(
        $('#inputDataNasc').datepicker('getFormattedDate')
    );
});

 $(function() {
                  $('#datetimepicker1').datetimepicker();
                });



    </script>



    <title><?php echo $titulo; ?></title>
  </head>
  <body>
        <!--<div class="container testo_formatado cadastro_user p-5">-->          
  <div class="container  mx-md-n5 shadow p-3 bg-" style="background-color: #FAFAFA;">
         <font style= "color: #FACC2E"><h2> <center> </center></h2></font></br>
         <div class="p-3 mb-2 bg-secondary text-white text-lg-center border border-light rounded" style="font-size: 1.4rem"><i class="fas fa-sync"></i>&nbsp;&nbsp;Cadastre-se e começa já  permutando o seu imóvel</div>

            <?php if($error=$this->session->flashdata('msgAlerta')) {?> 
                <div class="alert alert-info alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>  </button>
                 <?= $this->session->flashdata('msgAlerta'); ?>
             </div>

           <?php }?>

                <?php if($error1=validation_errors()) {?> 
                <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>  </button>
                <?php echo validation_errors(); ?>
                </div>
           <?php }?>
         <?php echo form_open("cadastro/salvar"); ?>  
         <!-- <form action = "<?php //echo base_url() ?>cadastro/salvar" method = "post">-->
             <font style= "color: #1C1C1C; font-size: 18px" class="p-3">Dados Pessoais<hr></font></br>
                  
              <div class="form-row">
                  <div class="form-group col-md-6">
                  <label class="sr-only" for="nomeContato">Informe o nome</label>
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fas fa-user"></i></div>
                    </div>
                    <input type="text" class="form-control" id="nomeContato" name="txt_nome" placeholder="Informe o seu nome"  value="<?php echo set_value('txt_nome'); ?>"  >
                  </div>

                </div>                               
                      
                      <div class="form-group col-md-3">
                        <label class="sr-only">CPF</label>
                        <div class="input-group mb-2">
                         <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-list-ol"></i></div>
                        <input type="text" name="txt_cpf" class="form-control" placeholder="CPF" id="cpf"
                         maxlength="15" value="<?php echo set_value('txt_cpf'); ?>">
                      </div>
                  </div>
                  </div>
                </div>
									
                     <div class="form-row">
                        <div class="col-md-3">
                          <label class="sr-only">Cep:</label>
                        <div class="input-group mb-2">
                         <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-home"></i></div>
                               <input name="txt_cep" type="text" id="cep" value="<?php echo set_value('txt_cep'); ?>" placeholder="Informe o CEP"
                               class="form-control" onblur="pesquisacep(this.value);" >
                        </div>
                        </div>
                        </div>

                        <div class="col-md-3">
                          <label class="sr-only">Rua:</label>
                           <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text"><i class="fas fa-road"></i></div>
                                 <input name="txt_rua" type="text" id="rua" 
                                 class="form-control" maxlength="6" placeholder="Rua" value="<?php echo set_value('txt_rua'); ?>" >
                           </div>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <label class="sr-only">Numero:</label>
                        <div class="input-group mb-2">
                         <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-sort-numeric-up-alt"></i></div>
                          <input name="txt_numero" type="text" id="numero" 
                                 class="form-control" maxlength="6" placeholder="Numero" value="<?php echo set_value('txt_numero'); ?>">
                        </div>
                        </div>
                        </div>
                        <br>
                        <div class="col-md-3">
                           <label class="sr-only">Complemento:</label>
                             <div class="input-group mb-2">
                         <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-sort-numeric-down"></i></div>
                           <input name="txt_complemento" type="text" id="complemento" 
                           class="form-control" maxlength="6" placeholder="Complemento" value="<?php echo set_value('txt_complemento'); ?>">
                        </div>
                     </div>
                     </div>
                    </div>
                
                <div class="form-row">
                    <div class="col-md-3">
                           <label class="sr-only">Bairro:</label>
                            <div class="input-group mb-2">
                         <div class="input-group-prepend">
                            <div class="input-group-text"><i class="far fa-flag"></i></div>
                           <input name="txt_bairro" type="text" id="bairro" 
                           class="form-control" placeholder="Bairro" value="<?php echo set_value('txt_bairro'); ?>">
                    </div>
                    </div>
                    </div>
                    <div class="col-md-3">
                        <label class="sr-only">Cidade:</label>
                         <div class="input-group mb-2">
                         <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-city"></i></div>
                         <input name="txt_cidade" type="text" id="cidade" class="form-control" placeholder="Cidade" 
                         value="<?php echo set_value('txt_cidade'); ?>">
                    </div>
                    </div>
                    </div>
                    <div class="col-md-3">
                        <label class="sr-only">Estado:</label>
                         <div class="input-group mb-2">
                         <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-globe-asia"></i></div>
                        <input name="txt_uf" type="text" id="uf" class="form-control" placeholder="Estado" value="<?php echo set_value('txt_uf'); ?>">
                   </div>
                </div> 
                   </div>
                   </div>
                   <br>
                  <div class="form-row">                
                      <div class="form-group col-md-3">
                        <label  for="inputDataNasc"><span class="text-dark">Data Nascimento</span></label>
                        <div class="input-group mb-2">
                         <div class="input-group-prepend">
                            <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                        <input type="Date" name="txt_dt_nasc" class="form-control" id="inputDataNasc"
                         placeholder="Data de nascimento" max="2002-01-01" min="1930-01-01" value="<?php echo set_value('txt_dt_nasc'); ?>">
                      </div>
                      </div>
                      </div>


                      <div class="col-md-3"><br>
                         <label class="sr-only" for="sexo">&nbsp;&nbsp;&nbsp;Sexo</label>
                         &nbsp;&nbsp; <input type="radio" class = "txt" name="txt_sexo" 
                         value="Masculino" <?php echo  set_radio('txt_sexo', 'Masculino'); ?> >&nbsp;M <span>&nbsp;</span></input>
								           <input type="radio" name="txt_sexo" class = "txt" value="Feminino" <?php echo  set_radio('txt_sexo', 'Feminino'); ?> > &nbsp;F <br> 
                          <br></input>
                      </div>
                      
                   <br>
                       <div class="col-md-3"><br>
                          <label class="sr-only" for="numCel">Cel</label>
                          <div class="input-group mb-2">
                         <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-phone-alt"></i></div>
                          <input type="text" class="form-control" name="txt_cel" id="numCel"
                           placeholder="Celular" pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}" maxlength="15" value="<?php echo set_value('txt_cel'); ?>">
                      </div>
                      </div>
                     </div>

                      <div class="col-md-3"><br>
                          <label class="sr-only" for="numTel">Tel</label>
                          <div class="input-group mb-2">
                         <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-phone-square"></i></div>
                          <input type="text" name="txt_tel"  class="form-control" id="numTel"
                           placeholder="Telefone" pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}" maxlength="15" value="<?php echo set_value('txt_tel'); ?>">
                      </div>
                      </div>
                      </div>
                      
                   </div>
                   <font style= "color: #1C1C1C; font-size: 18px" class="p-3">Dados do Login<hr></font></br>
                 
                 <div class="form-row">                             
                  <div class="form-group col-md-5">
                  <label class="sr-only" for="email">Informe o nome</label>
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fas fa-at"></i></div>
                    </div>
                    <input type="text" class="form-control" id="nomeContato" name="txt_email" placeholder="seuemail@dominio.com.br"  value="<?php echo set_value('txt_email'); ?>">
                  </div>           
                  
                  </div>
                    <div class="form-group col-md-3">
                      <label class="sr-only" for="nomUsuario">Nome usuario</label>
                      <div class="input-group mb-2">
                         <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-user-tie"></i></div>
                      <input type="txt" class="form-control" name="txt_nomeUsuario" id="nomUsuario" placeholder="Nome de usuario" value="<?php echo set_value('txt_nomeUsuario'); ?>">
                    </div>
                    </div>
                    </div>
                    <div class="form-group col-md-3">
                      <label class="sr-only" for="inputPassword4">Senha</label>
                      <div class="input-group mb-2">
                         <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
                      <input type="password" class="form-control" name="txt_usuarioSenha" id="inputPassword4" placeholder="Senha">
                    </div>
                  </div>
                  </div>
                  </div>
                  
                      <button type="submit" value = "Salvar" class="btn  btn-lg btn-secondary">
                        Cadastrar </button>
											<button type="reset" class="btn  btn-lg btn-secondary">Limpar</button>
     
                 <?php echo form_close(); ?>
          
        </div>
      

   
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>
<?php $this->load->view('v_footer'); ?>