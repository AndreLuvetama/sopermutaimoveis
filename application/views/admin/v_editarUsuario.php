<?php $this->load->view('v_cabecalho'); ?>
<?php
      $txt_usuario_id         = isset($usuario->usuario_id) ? $usuario->usuario_id: "";
      $txt_nomeUsuario        = isset($usuario->nomeUsuario) ? $usuario->nomeUsuario: "";
      $txt_status             = isset($usuario->statusAssinante) ? $usuario->statusAssinante: ""; 
      $txt_tipoUsuario        = isset($usuario->tipo_usuario_id) ? $usuario->tipo_usuario_id: ""; 
      $txt_nomeCompleto       = isset($usuario->nome) ? $usuario->nome: "";
      $txt_email              = isset($usuario->email) ? $usuario->email: "";
      $txt_enderecoUsuario    = isset($usuario->rua) ? $usuario->rua: "";
      $txt_numero             = isset($usuario->numero) ? $usuario->numero: "";
      $txt_cel                = isset($usuario->cel) ? $usuario->cel: "";
      $txt_tel                = isset($usuario->tel ) ? $usuario->tel : "";
      $txt_bairro             = isset($usuario->bairro) ? $usuario->bairro: "";     
      $txt_estado             = isset($usuario->cidade ) ? $usuario->cidade : "";
      $txt_ativadoDesativado             = isset($usuario->st_ativadoDesativado ) ? $usuario->st_ativadoDesativado : "";
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
      
    <title><?php echo("$titulo")?></title>
  </head>
  <body>
  <div class="container testo_ #fff3e0 lighten-5 mx-md-n5 shadow p-3">
    <h2>Atualizar status do Usuário</h2>

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
     <span class="font-weight-bold text-left">Nome do usuário: <?php echo($txt_nomeUsuario)?></span>&nbsp;&nbsp;Id  <?php echo($txt_usuario_id)?>&nbsp;&nbsp;
     &nbsp;&nbsp;<span class="font-weight-bold text-left"></span> 
  </div>
  <div class="card-body">
    <div class="form-row">
      <div class="col-sm-5"><i class="fas fa-street-view 3x"></i>&nbsp; Nome:&nbsp; <?php echo($txt_nomeCompleto)?> </div>
      <div class="col-sm-4"><i class="fas fa-barcode"></i>&nbsp; Email:</span>&nbsp;<?php echo($txt_email)?> </div>
       <div class="col-sm-3"><i class="fas fa-barcode"></i>&nbsp; Tel:</span>&nbsp;<?php echo($txt_tel)?> </div>
   </div>
    <div class="form-row">
      <div class="col-sm-5"><i class="fas fa-barcode"></i>&nbsp; Cel:</span>&nbsp;<?php echo($txt_cel)?> </div>
      <div class="col-sm-4"><i class="fas fa-city"></i>&nbsp; Endereço:&nbsp; <?php echo($txt_enderecoUsuario)?> </div>
      <div class="col-sm-3"><i class="far fa-flag"></i> &nbsp;Bairro:&nbsp;<?php echo($txt_bairro)?> </div>
    </div>
    <div class="form-row">
      <div class="col-sm-5"><i class="fas fa-city"></i>&nbsp; Estado:&nbsp;<?php echo($txt_estado)?>  </div>
      <div class="col-sm-4"><i class="fas fa-globe-americas"></i> &nbsp;Pais:&nbsp;Brasil</div>
  
    </div>

</div>
</div>

    <div class="col-md-12">
   
        <?php echo form_open("admin/atualizarStatus"); ?>
       
        <div class="form-row pt-5">
            <div class="col-md-2">
                      <label>Tipo de usuário</label>
                      <select name="txt_tipoUsuario" id="txt_tipoUsuario" class="form-control">
                        <option value="<?php echo $txt_tipoUsuario?>" selected><?php if($txt_tipoUsuario == 1){
                          echo "Permutando"; }elseif($txt_tipoUsuario == 2){ echo "Admin";}?></option>
                          <option value="1">Permutando</option>
                          <option value="2">Admin</option>                       
                     </select>
            </div>
              <div class="col-md-3">
                      <label>Status assinante</label>
                      <select id="txt_status" name="txt_status" id="txt_status" class="form-control">
                        <option value="<?php echo $txt_status?>" selected><?php if($txt_status == 1){
                          echo "Assinante"; }else{ echo "Não assinante";}?></option>
                          <option value="0">Não assinante</option>
                          <option value="1">Assinante</option>                       
                     </select>
            </div>
              <div class="col-md-3">
                      <label>Ativar/Desativar usuário</label>
                      <select id="txt_ativadoDesativado" name="txt_ativadoDesativado" id="txt_ativadoDesativado" class="form-control">
                        <option value="<?php echo $txt_ativadoDesativado?>" selected><?php if($txt_ativadoDesativado == 1){
                          echo "Ativado"; }else{ echo "Desativado";}?></option>
                          <option value="1">Ativado</option>
                          <option value="0">Desativado</option>                       
                     </select>
            </div>
             <div class="col-md-2">
               <input name="txt_usuario_id" type="hidden" id="txt_usuario_id" class="form-control" 
                     value="<?php echo $txt_usuario_id?>" />
             </div>
           
         </div>
          
            <br>
         <button type="submit" name="postSubmit" value="submit" class="btn btn-mdb-color">Atualizar</button>
        

        <?php echo form_close(); ?>
   

    </div>
       
     </div>
<script> 
 $(document).ready(function(){  
      $('#submit').click(function(){  
         var txt_usuario_id = $('#txt_usuario_id').val();  
           var txt_status = $('#txt_status').val();  
           var txt_tipoUsuario = $('#txt_tipoUsuario').val(); 
            if(txt_usuario_id == '' || txt_status== '' || txt_tipoUsuario == '')  
           {  
                $('#response').html('<span class="text-danger">Todos os campos devem ser preenchidos</span>');  
           }  
           else  
           {              
                $.ajax({  
                     url:"<?php echo site_url('admin/atualizarStatus'); ?>",
                     method:"POST",  
                     data:$('#submit_form').serialize(),  
                     beforeSend:function(){  
                          $('#response').html('<span class="text-info">Loading response...</span>');  
                     },  
                     success:function(data){  
                          $('form').trigger("reset");  
                          $('#response').html('<span class="text-info">enviado com sucesso...</span>'); 
                          $('#response').fadeIn().html(data);  
                          setTimeout(function(){  
                               $('#response').fadeOut("slow");  
                          }, 5000);  
                     }  
                });  
             }
      });  
 });  
 </script>  


    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

<script src="<?php echo base_url() ?>assets/js/jquery-3.5.1.min.js"></script>

<script src="<?php echo base_url() ?>assets/js/scriptCep.js"></script>
     <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="<?php echo base_url() ?>assets/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="<?php echo base_url() ?>assets/js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

  </body>
</html>
<?php $this->load->view('v_footer'); ?>