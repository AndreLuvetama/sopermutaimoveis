<?php $this->load->view('v_cabecalho'); ?>
<?php
      $txt_usuario_id         = isset($imovel->usuario_id) ? $imovel->usuario_id: "";
      $txt_id                 = isset($imovel->id) ? $imovel->id: "";
      $txt_enderecoImovel             = isset($imovel->enderecoImovel) ? $imovel->enderecoImovel: ""; 
      $txt_nomeImovel       = isset($imovel->nomeImovel) ? $imovel->nomeImovel: "";
      $txt_cepImovel              = isset($imovel->cepImovel ) ? $imovel->cepImovel : "";
      $txt_numero             = isset($imovel->numero) ? $imovel->numero: "";
      $txt_complemento        = isset($imovel->complemento) ? $imovel->complemento: "";
      $txt_apelidoImovel                = isset($imovel->apelidoImovel ) ? $imovel->apelidoImovel : "";
      $txt_bairroImovel             = isset($imovel->bairroImovel) ? $imovel->bairroImovel: "";     
      $txt_estadoImovel             = isset($imovel->estadoImovel ) ? $imovel->estadoImovel : "";
      $txt_statusPermuta             = isset($imovel->statusPermuta ) ? $imovel->statusPermuta : "";
       $txt_statusImovel             = isset($imovel->statusImovel ) ? $imovel->statusImovel : "";
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
    <h2>Atualizar status do Imóvel</h2>
 <!--  <div class="container testo_formatado cadastro_imovel p-5 cadastroImovel">
   <?php //echo form_open("cadastrar_imovel/salvar"); ?>-->
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
     <span class="font-weight-bold text-left">Nome do Imóvel:&nbsp;</span><?php echo($txt_nomeImovel)?>&nbsp;&nbsp;Id Imóvel: <?php echo($txt_id)?>&nbsp;&nbsp;Id do próprietario: <?php echo($txt_usuario_id)?>
     &nbsp;&nbsp;<span class="font-weight-bold text-left"></span> 
  </div>
  <div class="card-body">
    <div class="form-row">
      <div class="col-sm-5"><i class="fas fa-street-view 3x"></i>&nbsp; Endereço:&nbsp; <?php echo($txt_enderecoImovel)?> </div>
      <div class="col-sm-4"><i class="fas fa-barcode"></i>&nbsp; Número:</span>&nbsp;<?php echo($txt_numero)?> </div>
       <div class="col-sm-3"><i class="fas fa-barcode"></i>&nbsp; Complemento:</span>&nbsp;<?php echo($txt_complemento)?> </div>
   </div>
    <div class="form-row">
      <div class="col-sm-5"><i class="fas fa-flag"></i>&nbsp; Bairro:</span>&nbsp;<?php echo($txt_bairroImovel)?> </div>
      <div class="col-sm-4"><i class="fas fa-city"></i>&nbsp; Estado:&nbsp; <?php echo($txt_estadoImovel)?> </div>
  
      <div class="col-sm-4"><i class="fas fa-globe-americas"></i> &nbsp;Pais:&nbsp;Brasil</div>
  
    </div>

</div>
</div>

    <div class="col-md-12">
           <?php echo form_open("admin/atualizarImovel"); ?>
       
        <div class="form-row pt-5">

            <div class="col-md-3">
                      <label>Statos da Permuta</label>
                      <select name="txt_statusPermuta" id="txt_statusPermuta" class="form-control">
                        <option value="<?php echo $txt_statusPermuta?>" selected>
                          <?php if($txt_statusPermuta == 1){
                          echo "Disponivel"; }elseif($txt_statusPermuta == 0){ echo "Não disponivel";}?></option>
                          <option value="1">Disponivel</option>
                          <option value="0">Não disponivel</option>                       
                     </select>
            </div>
              <div class="col-md-3">
                      <label>Status do imóvel</label>
                      <select id="txt_statusImovel" name="txt_statusImovel" class="form-control">
                        <option value="<?php echo $txt_statusImovel?>" selected><?php if($txt_statusImovel == 1){
                          echo "Ativo"; }else{ echo "Desativado";}?></option>
                          <option value="0">Desativado</option>
                          <option value="1">Ativo</option>                       
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