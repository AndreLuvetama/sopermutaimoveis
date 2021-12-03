<?php $this->load->view('v_cabecalho'); ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="fontawesome/css/all.css" rel="stylesheet">
    <link href="fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="fontawesome/css/brands.css" rel="stylesheet">
    <link href="fontawesome/css/solid.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo.css"/>

    <title>Contato</title>
  </head>
  <body>
  
   <section id ="home">
    <div class="container" class="testo_formatado">
        <div class = "row testo pt-5">
             <div class="col-sm-6 border border-secondary shadow-sm">
                <font style= "color: #1b4754"><h2> <center> Acessar a minha página</center></h2></font></br>
                <!--<form action = "<?php //echo base_url()?>login/logar" method="POST"
                       name= "" class="testo_formatado">-->
                <?php if($error=$this->session->flashdata('msgAlerta')) {?> 
                <div class="alert alert-danger alert-dismissible" role="alert">
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

              <?php echo form_open("login"); ?>
                  <div class="col-auto">
                      <label class="sr-only" for="nomeUsuario">Número de contato</label>
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text"><i class="fas fa-at"></i></div>
                        </div>
                        <input type="text" class="form-control" id="emailContato" name="txt_nomeUsuario" placeholder="Nome de Usuario">
                      </div>
                 </div>

                  <div class="col-auto">
                      <label class="sr-only" for="txt_usuarioSenha">Número de contato</label>
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
                        </div>
                        <input type="password" class="form-control" id="txt_usuarioSenha" name="txt_usuarioSenha" placeholder="Senha">
                      </div>
                 </div>
                      
                        <div class="form-group row">
                          <div class="col-sm-10 link1">
                            <button type="submit" class="btn btn-secondary">Acessar</button>
                            &nbsp;&nbsp;&nbsp;<a href= "#">Esqueci a senha</a>
                          </div>
                         
                        </div>
                      
                   
                      <?php echo form_close(); ?>
                
               
                </div>
        
             <div class="col-sm-6">
                
                   <font style= "color: #1b4754"><h3> <center> Ainda não tem cadastro em nosso site?</center></h3>
                   
                   <div class="col-sm-12 bt_cadastrar p-5">
                   <center><a href="<?php echo base_url() ?>cadastro" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cadastre-se</a> </center>

                  </div>
             </div>
        </div>

     </div>
    
  </section>
    
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

<?php $this->load->view('v_footer'); ?>