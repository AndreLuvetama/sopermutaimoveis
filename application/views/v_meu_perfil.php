  

<?php $this->load->view('v_cabecalho'); ?>
<?php
      $txt_cad_pessoa_id  = isset($tab_cad_pessoa->cad_pessoa_id) ? $tab_cad_pessoa->cad_pessoa_id: ""; 
      $txt_usuario_id       = isset($tab_usuario->usuario_id) ? $tab_usuario->usuario_id: "";
      $txt_dt_nasc  = isset($tab_cad_pessoa->dataNasc) ? $tab_cad_pessoa->dataNasc: ""; 
      $txt_nomeUsuario  = isset($tab_usuario->nomeUsuario) ? $tab_usuario->nomeUsuario: "";
      $txt_usuarioSenha = isset($tab_usuario->usuarioSenha) ? $tab_usuario->usuarioSenha: "";
      $txt_nome         = isset($tab_cad_pessoa->nome) ? $tab_cad_pessoa->nome: "";
      $txt_cpf          = isset($tab_cad_pessoa->cpf) ? $tab_cad_pessoa->cpf: "";
      $txt_rua          = isset($tab_cad_pessoa->rua) ? $tab_cad_pessoa->rua: "";
      $txt_numero       = isset($tab_cad_pessoa->numero) ? $tab_cad_pessoa->numero: "";
      $txt_complemento  = isset($tab_cad_pessoa->complemento) ? $tab_cad_pessoa->complemento: "";
      $txt_bairro       = isset($tab_cad_pessoa->bairro) ? $tab_cad_pessoa->bairro: "";
      $txt_cidade  = isset($tab_cad_pessoa->cidade) ? $tab_cad_pessoa->cidade: "";
      $txt_sexo      = isset($tab_cad_pessoa->sexo) ? $tab_cad_pessoa->sexo: "";
      $txt_tel  = isset($tab_cad_pessoa->tel) ? $tab_cad_pessoa->tel: "";
      $txt_cel  = isset($tab_cad_pessoa->cel) ? $tab_cad_pessoa->cel: "";
      $txt_email       = isset($tab_cad_pessoa->email) ? $tab_cad_pessoa->email: "";
      $txt_uf  = isset($tab_cad_pessoa->uf) ? $tab_cad_pessoa->uf: "";
      $txt_cep  = isset($tab_cad_pessoa->cep) ? $tab_cad_pessoa->cep: ""; 
      $txt_imagem_id  = isset($tab_foto_perfil->imagem_id) ? $tab_foto_perfil->imagem_id: ""; 
      $txt_imagem  = isset($tab_foto_perfil->imagem) ? $tab_foto_perfil->imagem: ""; 
      $txt_fotoPessoa       = isset($tab_cad_pessoa->fotoPessoa) ? $tab_cad_pessoa->fotoPessoa: "";
      $txt_file_name       = isset($tab_imagem->file_name) ? $tab_imagem->file_name: "";
      $txt_data_inc       = isset($tab_imagem->uploaded_on) ? $tab_imagem->uploaded_on: "";
      $txt_nomeImovel       = isset($tab_imoveis->nomeImovel) ? $tab_imoveis->nomeImovel: ""; 
      $txt_ruaImovel       = isset($tab_imoveis->ruaImovel) ? $tab_imoveis->ruaImovel: "";
      $txt_intEstados       = isset($tab_imoveis->intEstados) ? $tab_imoveis->intEstados: "";
      $txt_intTipoImovel       = isset($tab_imoveis->intTipoImovel) ? $tab_imoveis->intTipoImovel: "";
      $txt_intImvlMobilia       = isset($tab_imoveis->intImvlMobilia) ? $tab_imoveis->intImvlMobilia: "";
      $txt_apelidoImovel       = isset($tab_imoveis->apelidoImovel) ? $tab_imoveis->apelidoImovel: "";  
      $txt_numero       = isset($tab_imoveis->numero) ? $tab_imoveis->numero: "";      
      $txt_bairroImovel       = isset($tab_imoveis->bairroImovel) ? $tab_imoveis->bairroImovel: "";   
      $txt_estadoImovel              = isset($tab_imoveis->estadoImovel) ? $tab_imoveis->estadoImovel: "";
      $txt_cidadeImovel              = isset($tab_imoveis->cidadeImovel) ? $tab_imoveis->cidadeImovel: "";  
      $txt_cepImovel                 = isset($tab_imoveis->cepImovel) ? $tab_imoveis->cepImovel: ""; 
      $txt_imoveis_id         = isset($tab_imoveis->id) ? $tab_imoveis->id: "";
      $statusAssinante         = isset($tab_usuario->statusAssinante) ? $tab_usuario->statusAssinante: "";

//Buscando os imóveis de interesse
               
?>

    
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.form.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/js.js"></script>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <link href="<?php echo base_url() ?>assets/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
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
  <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.mask.min.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
      <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
        <link href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">
 <style type="text/css">
        a.nounderline:hover {text-decoration: none; }
    </style>
<script type="text/javascript" >
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

    </script>

    <title><?php echo $titulo; ?></title>
  </head>
  <body>
    
        <div class="container testo_ mx-md-n5 shadow p-3">

           <?php if($error=$this->session->flashdata('msgAlerta')) {?> 
                <div class="alert alert-info alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>  </button>
                 <?= $this->session->flashdata('msgAlerta'); ?>
             </div>
        <?php }?>
             <?php if($error=$this->session->flashdata('msgAlerta2')) {?> 
                <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>  </button>
                 <?= $this->session->flashdata('msgAlerta2'); ?>
             </div>

           <?php }?>
           <?php if($error1=validation_errors()) {?> 
                <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>  </button>
                <?php echo validation_errors(); ?>
                </div>
           <?php }?>

          <div class="card">
              <div class="card-header">
                <div class="row">
                  <div class="col-md-4">Olá <?php echo $this->session->userdata("nomeUsuario")?>|
                    <a href="<?php echo base_url()?>login/logoff" class = "none_line">
                    <i class="fas fa-sign-in-alt"></i>&nbsp;&nbsp;sair</a></div>
                  <div class="col-md-4 offset-md-4"><label for="cod_pessoa">Usuário <?php echo $txt_cad_pessoa_id ?> </label></div>
                </div>

              </div>
              <div class="card-body">
                <div class="row">
                    
                      <?php 
                        if(empty($txt_imagem))
                        {?>
                            <div class="col-sm-3  shadow-sm align-self-center"><p>
                            <center><img id="txt_imagem" src= "<?php echo base_url() ?>upload/perfil.jpg" 
                            class="fotoPerfil" width= "168"></center> </p></div>
                        <?php  }
           
                     else{  ?>
                          <div class="col-sm-3 shadow-sm align-self-center">
                           <p><center><img id="txt_imagem" src= "<?php echo base_url() ?>upload/<?php echo $txt_imagem?>"class="fotoPerfil" width= "168"> </center></p></div>

                      <?php  }
                      ?>
    
                    

                    <div class="col-sm-4">
                     <?php           
                   echo form_open_multipart('Meu_Perfil/uploadfoto');
                   
                   echo form_hidden('usuario', set_value('usuario', $txt_usuario_id)); 
                    echo form_hidden('txt_imagem_id', set_value('imagem_id', $txt_imagem_id)); 
                   echo form_hidden('txt_imagem', set_value('imagem', $txt_imagem)); ?> 
                  <!--
                   echo form_label('Imagem do Perfil:','imagem');
                   echo form_upload('imagem', array('class' => 'inputFile' ));
                   echo form_submit('enviar', 'salvar foto',array('class' => 'lb_uploadFoto' ));-->

                  <div class="input">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="imagem"  name="imagem" />
                        <label class="custom-file-label" for="imagem">Atualizar foto</label>
                    </div>
                   
                </div><br>
                 <input type="submit" value="Enviar foto" class="btn btn-info" name="imagem" > 
                <script>
                    $('#imagem').on('change',function(){
                        //get the file name
                        var fileName = $(this).val();
                        //replace the "Choose a file" label
                        $(this).next('.custom-file-label').html(fileName);
                    })
                </script>
            <?php  echo form_close(); ?> 
                    </div>
                    <div class="col-sm-5"> 
                      <div class="alert alert-secondary" role="alert">
                          Mensagem enviada <a href="#" class="alert-link">Visualizar</a> 2 mensagens enviada.
                      </div>
                      <div class="alert alert-warning" role="alert">
                          Mensagem recebida <a href="#" class="alert-link">Ler mensagem</a>. 1 mensagem recebida.
                      </div>


                    </div>
                </div>

              </div>
            
          </div> <!--Fim card-->

<hr class="style8">

  <div class="row pt-1">
  <div class="col-3">
    <div class="nav flex-column nav-pills" style="background-color:#F2F2F2" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <?php if(empty($txt_imoveis_id)){?>
         
    <a class="nav-link text-dark active tabHover p-3 mb-2 border border-white" id="v-pills-cadastrar-tab" data-toggle="pill" href="#v-pills-cadastrar" role="tab" aria-controls="v-pills-cadastrar" aria-selected="true"><i class="far fa-edit 3x" ></i>&nbsp;&nbsp;Cadastrar Imóvel</a>    

      <a class="nav-link   text-dark  p-3 mb-2 border border-white" id="v-pills-home-tab"
       data-toggle="pill" role="tab" aria-controls="v-pills-home" aria-selected="false"> <i class="fas fa-user-edit 3x" alt="teste">&nbsp;&nbsp;</i>Editar Perfil</a>

      <a class="nav-link text-dark  p-3 mb-2 border border-white" id="v-pills-profile-tab" data-toggle="pill"  role="tab" aria-controls="v-pills-profile" aria-selected="false">
        <i class="fas fa-home 3x"></i>&nbsp;&nbsp;Visualizar imóvel</a>

        <?php }else{ ?>   
        <a class="nav-link active  text-dark tabHover p-3 mb-2 border border-white" id="v-pills-home-tab"
       data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"> <i class="fas fa-user-edit 3x"></i>&nbsp;&nbsp;Editar Perfil</a>
        <a class="nav-link text-dark tabHover p-3 mb-2 border border-white" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
        
        <i class="fas fa-home 3x"></i>&nbsp;&nbsp;Visualizar imóvel</a>     
            <a class="nav-link  text-dark tabHover p-3 mb-2 border border-white" href="<?php echo base_url('atualizarimovel'); ?>" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="far fa-edit 3x"></i>&nbsp;&nbsp;Atualizar Imóvel</a>    

    <?php }?> 
            
    </div>
  </div>
  <div class="col-9">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane  <?php if(!empty($txt_imoveis_id)){echo("show active");}?>" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
        <div class="card">
          <div class="card-header">Editar perfil</div>
          <div class="card-body border border-white"  style="background-color: #FEFEFF">
              <?php echo form_open_multipart('Meu_Perfil/atualizar'); ?>
              <div class="form-row">
                <div class=" col-md-3">
                  <input type="hidden" name="txt_fotoPessoa" 
                        value="<?php echo $txt_fotoPessoa ?>" id="txt_fotoPessoa">
                </div>
                
                <div class="col-md-3">
                  <input type="hidden" name="txt_cad_pessoa_id" class="form-control" 
                  value="<?php echo $txt_cad_pessoa_id ?>"/>
                </div>
                <div class="col-md-3">
                  <input type="hidden" name="txt_usuario_id" class="form-control" 
                  value="<?php echo $txt_usuario_id ?>"/>
                </div>
              </div>
               
               <div class="form-row"  >
                      <div class="form-group col-md-6">

                        <label for="inputName">Nome</label>
                      
                        <input type="text" name="txt_nome" class="form-control" 
                         value="<?php echo $txt_nome ?>"/>
                      </div>                               
                      <div class="form-group col-md-3"/>
                        <label>CPF</label>
                        <input type="text" name="txt_cpf" class="form-control" 
                        value="<?php echo $txt_cpf ?>" id="cpf"/>
                      </div>
                  </div>
                  
                     <div class="form-row">
                        <div class="col-md-3">
                              <label>Cep:</label><p>
                               <input name="txt_cep" type="text" value="<?php echo $txt_cep ?>"
                               class="form-control" onblur="pesquisacep(this.value);" id ="cep"/>
                        </div>
                        <div class=" col-md-4">
                                 <label>Rua:</label>
                                 <input name="txt_rua" type="text" id="txt_rua" 
                                 class="form-control" value="<?php echo $txt_rua ?>"/>
                        </div>

                      <div class=" col-md-2">
                                 <label>Numero:</label>
                                 <input name="txt_numero" type="text" id="txt_numero" 
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
                         value="<?php echo $txt_uf ?>"/>
                   </div>
                </div> 
                   
                  <div class="form-row"><br>
                      <div class="form-group col-md-3">
                        <label for="inputDataNasc">Data Nascimento</label>
                        <input type="Date" name="txt_dt_nasc" class="form-control" id="txt_dt_nasc"
                         value="<?php echo $txt_dt_nasc ?>" />
                      </div>

                      <div class="form-group">
                    <label>Sexo</label>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sexo1" name="txt_sexo" class="custom-control-input" value="Masculino" <?php echo empty($txt_sexo) || (!empty($txt_sexo) && ($txt_sexo == 'Masculino'))?'checked="checked"':''; ?> >
                        <label class="custom-control-label" for="sexo1">M</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sexo2" name="txt_sexo" class="custom-control-input" value="Feminino" <?php echo (!empty($txt_sexo) && ($txt_sexo == 'Feminino'))?'checked="checked"':''; ?> >
                        <label class="custom-control-label" for="sexo2">F</label>
                    </div>
                    
                </div>               
                      
                      <div class="form-group col-md-3">
                          <label for="inputTel">Tel</label>
                          <input type="text" name="txt_tel"  class="form-control" id="txt_tel"
                           value="<?php echo $txt_tel?>"  pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}"
                            maxlength="15"/>
                      </div>
                       <div class="form-group col-md-3">
                          <label for="inputCel">Cel</label>
                          <input type="text" class="form-control" name="txt_cel" id="txt_cel"
                           value="<?php echo $txt_cel ?>" pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}" 
                           maxlength="15" />
                      </div>
                   </div>
                 <div class="form-row">
               
                  <div class="form-group col-md-5">
                      <label for="inputEmail4">E-mail</label>
                      <input type="email" class="form-control" name="txt_email" id="txt_email" 
                      value=" <?php echo $txt_email ?>" />
                  </div>
                    
                  </div>                
                      
                       <button type="submit" value = "Salvar" class="btn btn-secondary">
                        Atualizar </button>
                      <button type="reset" class="btn btn-secondary">Limpar</button>
                        
                     
                      <?php echo form_close(); ?>
                       <hr class="style8">

                        <p>
  
  <button class="btn btn-warning" type="button" data-toggle="collapse" data-target="#mudarSenha" aria-expanded="false" aria-controls="mudarSenha">
    Mudar a senha
  </button>
</p>
<div class="collapse" id="mudarSenha">
  <div class="card card-body">
    <?php echo form_open("Meu_Perfil/alterarSenha"); ?>
                       <div class="form-row pt-1">                 
                  
                    <div class="form-group col-md-3">
                      <label for="txt_usuarioSenha">Nova senha</label>
                      <input type="password" class="form-control" name="txt_usuarioSenha" id="txt_usuarioSenha" 
                      value="<?php echo set_value('txt_usuarioSenha'); ?>" maxlength="10" />
                    </div>
                    <div class="form-group col-md-3">
                      <label for="txt_usuarioSenha2">confirmar senha</label>
                      <input type="password" class="form-control" name="txt_usuarioSenha2" id="txt_usuarioSenha" 
                      value="<?php echo set_value('txt_usuarioSenha2'); ?>"  maxlength="10"/>
                    </div>                    
                      </div>
                        <button type="submit" value = "Salvar" class="btn btn-secondary">
                        Alterar senha </button>
                      <button type="reset" class="btn btn-secondary">Limpar</button>
                        <?php echo form_close(); ?>
            </div>
          </div>

          </div>
                      </div>
                     

      </div>
      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" >
        <div class="card">
          <div class="card-header">Meus imóveis</div>
          <div class="card-body border border-white"  style="background-color: #FEFEFF">
            <div class="form-row">
               <?php if(!empty($txt_imoveis_id) && !empty($txt_file_name))
                        {?>
                          <div class="col-md-4">
                        <center>
                          <img id="txt_file_name" src= "<?php echo base_url() ?>upload/imoveis/<?php echo $txt_file_name?>"class="img-fluid img-thumbnail" width= "300"> </center> 
                    </div>
                      <div class="col-md-8">
                        <h5 class="pt-1">                     
                               <?php echo $txt_nomeImovel ?>

                        </h5>
                        <i class="fas fa-street-view 3x"></i>&nbsp;&nbsp;R.<?php echo $txt_ruaImovel."&nbsp;-&nbsp;".$txt_bairroImovel.",&nbsp;" .$txt_estadoImovel."&nbsp;".$txt_cepImovel ?>, Brasil</br>
                        <i class="fas fa-calendar-alt 3x"></i>&nbsp;&nbsp;<?php echo $txt_data_inc ?></br></br>
                        <a href="<?php echo base_url('CadastrarImovel/exluirImovel/'.$txt_imoveis_id); ?>"><button class="btn btn-danger" onclick="return confirm('Tem certeza que pretende esxcluir o imóvel?')">&nbsp;&nbsp;<i class="fa fa-trash"></i>&nbsp;&nbsp;delete</button></a>
                        <a href="<?php echo base_url('atualizarimovel'); ?>"><button class="btn btn-secondary"><i class="far fa-edit"></i>&nbsp;&nbsp;editar</button></a>
                      
                      </div>

                        <?php } elseif(!empty($txt_imoveis_id) and ($txt_file_name=='')) { ?>
                          <div class="row"> 
                            <div class="alert alert-danger" role="alert">
                             Imóvel sem imagens, por favor colocar imagens para iniciar a Permuta</div>
                            
                            <center><img src= "<?php echo base_url() ?>upload/imoveis-sem-imagem.jpg" 
                              class="img-fluid" ></center>

                            </div>
                        <?php }else{ ?>
                              <div class="col-md-5"> Cadastro sem Imóvel</div>

                   <?php } ?>
              
             </div>

        <hr class="style8">
        <h5>Imóveis do seu interesse &hearts;</h5><br>        
        <div class="form-row">
        <div class="col-lg-12">
           <div class="table-responsive">
            <table class="table table-striped" id="minhaTabela" cellspacing="0" width="100%">
              <thead>
                  <?php  if(!empty($imoveisdeInteresse) and !empty($txt_imoveis_id)  )
                        {                            
                    foreach($imoveisdeInteresse as $imoveiss)
                      { 
                         if($imoveiss['intTipoImovel'] == $txt_intTipoImovel
                          && $imoveiss['id'] != $txt_imoveis_id 
                          && $imoveiss['intEstados'] == $txt_intEstados 
                          && $imoveiss['intImvlMobilia'] == $txt_intImvlMobilia 
                          &&  !empty($imoveiss['default_image'])){
                      
                        $defaultImage = !empty($imoveiss['default_image'])?'<img src="'.base_url().'upload/imoveis/'.$imoveiss['default_image'].'" width= "250" alt="" />':''; ?> 
                <tr><th></th> 
                <th></th></tr>
                
              </thead>

              <tbody>
                <tr>
                  <td class="nav-item pt-3" width="20%">
                       <?php echo $defaultImage; ?>     
                  </td>
                  <td class="nav-item p-3" width="80%" style="font-size: 14px; font-family (stack):Roboto">
                      <p style="font-size: 1.3rem" class="link1">
                           <?php if($statusAssinante == 1) {?>
                    <a href="<?php echo base_url('imovel/'.$imoveiss['id']); ?>">
                          <?php echo($imoveiss['nomeImovel']) ?></a>                        
                  
                  <?php }else{?>
                     <?php echo($imoveiss['nomeImovel']) ?>
                  <?php }?></p>


                      <span style="font-weight: bold">Código do Imóvel:&nbsp;<?php echo ($imoveiss['id']) ?>&nbsp;&nbsp;Apelido do imovel:&nbsp;<?php echo ($imoveiss['apelidoImovel']) ?>&nbsp;
                      </span><br>
                        <i class="fas fa-city"></i>&nbsp; Bairro:&nbsp;<?php echo ($imoveiss['bairroImovel']) ?>- 
                        <?php echo ($imoveiss['estadoImovel']) ?>/Brasil</br>
                        <i class="fas fa-restroom"></i>&nbsp;<?php echo ($imoveiss['num_banheiro']) ?>&nbsp;Banheiro 
                        &nbsp;<i class="fas fa-warehouse"></i></i>&nbsp;<?php echo ($imoveiss['num_vagas']) ?>&nbsp;vaga(as) &nbsp;<i class="fas fa-bed"></i>&nbsp; <?php echo ($imoveiss['num_quartos']) ?>&nbsp;quarto(os)&nbsp;<i class="fas fa-ruler-horizontal fas 2x"></i>&nbsp;Tamanho&nbsp;<?php echo ($imoveiss['tamanho']) ?>&nbsp;m2
                        <br></br>
                        <i class="fas fa-calendar-alt 3x"></i>&nbsp;
                        <?php echo ($imoveiss['dataIncl']) ?></br></br>

                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <?php if($statusAssinante == 1) {?>
                    <a href="<?php echo base_url('imovel/'.$imoveiss['id']); ?>"><button class="btn btn-secondary"><i class="far fa-eye"></i>&nbsp;&nbsp;Visualizar imóvel</button></a>
                  
                  <?php }else{?>
                    <button class="btn btn-warning" data-toggle="modal" data-target="#btModal"><i class="far fa-eye"></i>&nbsp;&nbsp;Visualizar imóvel</button>
                  <?php }?>

          <!-- Modal -->
          <div class="modal fade" id="btModal" tabindex="-1" role="dialog" aria-labelledby="caixaModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="caixaModal">Imóvel Liberado somente para assinante</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Assina um dos nossos planos e inicia a permuta</p>
                 
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-mdb-color" data-dismiss="modal">Ok</button>
                 
                </div>
                
              </div>
            </div>
          </div>
                                    
                  </td>
                </tr>
                 <?php } }
                    
                    }else{ ?>
                  <tr><td colspan="7">Ainda não encontramos imovel semelhantes...</td></tr>
                  <?php }       

                ?>
               
              </tbody>
                
            </table>
        
            </div>
            </div>    
          
        </div>
         </div>
        </div>
      </div>
  <!--tab cadastrar imóvel-->
      <div class="tab-pane <?php if(empty($txt_imoveis_id)){echo("show active");}?>" id="v-pills-cadastrar" role="tabpanel" aria-labelledby="v-pills-cadastrar-tab">
       <section id="img-cadastrar-tab">
    <div class="container-fluid">
        <div class="row"><!--row -->
          <div class="col-md-12">
            
             <p class="text-white text-center h3 pt-5">Seja Bem vindo ao Só Permuta imóveis</p>
       
             <div class="alert alert-info text-center text-bold" role="alert">
  Para visualizar os imóveis do seu interesse é necessário que cadastre o seu imóvel
</div>
            

          </div>
          
           <div class="col-md-12 bt_caixa2">
            <a href="<?php echo base_url() ?>cadastrarimovel"  class="btn btn-lg btn-custom btn-roxo">Cadastrar imóvel</a>
          </div>
              
        </div>
    </div>    

   </section>

      </div>
    </div>
  </div>
</div>
      
          </div>
        <!--Fim do cadastro dos imoveis-->

             
        </div>
         

      <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        
  </body>
</html>

<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>

  <script>
  $(document).ready(function(){
      $('#minhaTabela').DataTable({
          "language": {
            "paginate": {
            "previous": "Anterior",
            "next": "Próximo",
          },
                "lengthMenu": "Mostrando _MENU_ registros por página",
                "zeroRecords": "Nenhum registros encontrado",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhum registro disponível",
                "infoFiltered": "(filtrado de _MAX_ registros no total)",
                "search": "Buscar por nome"
            }
        });
  });
  </script>

<?php $this->load->view('v_footer'); ?>