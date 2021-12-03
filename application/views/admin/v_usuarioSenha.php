
<?php
//Ultimos cadastros
      $ul_usuario_id       = isset($ultimosCadastros->usuario_id) ? $ultimosCadastros->usuario_id: "";
      $ul_dataIncl  = isset($ultimosCadastros->dataIncl) ? $ultimosCadastros->dataIncl: ""; 
      $ul_nomeUsuario  = isset($ultimosCadastros->nomeUsuario) ? $ultimosCadastros->nomeUsuario: "";
      $ul_usuarioSenha = isset($ultimosCadastros->usuarioSenha) ? $tab_usuario->usuarioSenha: "";
      $ul_nome         = isset($ultimosCadastros->nome) ? $ultimosCadastros->nome: "";
      $ul_bairro       = isset($ultimosCadastros->bairro) ? $ultimosCadastros->bairro: "";
      $ul_cidade  = isset($ultimosCadastros->cidade) ? $ultimosCadastros->cidade: "";
      $ul_sexo_masc       = isset($tab_cad_pessoa->sexo) ? $tab_cad_pessoa->sexo: "";
      $ul_sexo_fem       = isset($ultimosCadastros->sexo) ? $ultimosCadastros->sexo: "";
      $ul_tel  = isset($ultimosCadastros->tel) ? $ultimosCadastros->tel: "";
      $ul_cel  = isset($ultimosCadastros->cel) ? $ultimosCadastros->cel: "";
      $ul_email       = isset($ultimosCadastros->email) ? $ultimosCadastros->email: "";
      $ul_uf  = isset($ultimosCadastros->uf) ? $ultimosCadastros->uf: "";

      // ultimos imoveis cadastrados
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
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/tabsy.css"/>
   <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/estilo.css">
       <script src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Biblioteca do upload das imagens drop -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/dropzone.css"/>
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/dropzone.min.css"/>
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/grade.css"/>
  <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-1.11.2.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>assets/js/js.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>assets/js/buscacep.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/dropzone.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/dropzone.min.js"></script>

   <link rel="icon" href="<?php echo base_url() ?>assets/img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body >
        <div class="container">        
          
                <main>  


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
    <div class="form-group">
    <?php echo form_open("Admin/alterarSenha"); ?>
                       <div class="form-row p-1">                 
                  
                    <div class=" col-md-3">
                      <label for="txt_usuarioSenha">Nova senha</label>
                      <input type="password" class="form-control" name="txt_usuarioSenha" id="txt_usuarioSenha" 
                      value="<?php echo set_value('txt_usuarioSenha'); ?>" maxlength="10" />
                    </div>
                    <div class="col-md-3">
                      <label for="txt_usuarioSenha2">confirmar senha</label>
                      <input type="password" class="form-control" name="txt_usuarioSenha2" id="txt_usuarioSenha" 
                      value="<?php echo set_value('txt_usuarioSenha2'); ?>"  maxlength="10"/>
                    </div>                    
                      </div>
                      <br>
                      <br>
                        <button type="submit" value = "Salvar" class="btn btn-primary btn-cons">
                        Alterar senha </button>
                      <button type="reset" class="btn btn-primary btn-cons">Limpar</button>
                        <?php echo form_close(); ?>
  </div>
            
                </main>
              
            </div>
        
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>


