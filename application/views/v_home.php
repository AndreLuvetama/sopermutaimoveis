<?php $this->load->view('v_cabecalho'); ?>

<!DOCTYPE html>
<html lang="pt-br">
 <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device, initial-scale=1, shrink-to-fit=no">

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
  </head>
<body>
  <div class="container-fluid">     
        <div class = "row">
          <div class="carousel slide carousel-fade" data-ride="carousel" id = "carousel-controles">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="img-fluid" src="<?php echo base_url() ?>assets/img/carousel/home3.png" alt="Primeiro Slide" >
              </div>
              <div class="carousel-item">
                <img class="img-fluid" src="<?php echo base_url() ?>assets/img/carousel/home4.jpg" alt="Primeiro Slide" >
              </div>
              </div>
           
             <a class="carousel-control-prev" href="#carousel-controles" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
              </a>
              <a class="carousel-control-next" href="#carousel-controles" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Próximo</span>
            </a>            
        </div>   
     </div>      
      <div class="container p-5">
       <div class="card-deck text-center">
          <div class="card imgHover cursoralt">
            <i class="fas fa-home fa-5x " style="color:#3589A1"></i>
            <div class="card-body">
              <h5 class="card-title"style="text-align:center">Faça o seu cadastro no só Permuta</h5>
              <p class="card-text" style="text-align:center">Ao fazer o cadastro, será liberado o acesso para cadastrar o seu imóvel.</p>      
              <div class="text2 text-center middle"><h5>
                <a href="<?php echo base_url() ?>login" class ="none_line text-light">Acessar a página de cadastro</a></h5></div>          
            </div>
          </div>
          <div class="card imgHover cursoralt">           
            <i class="fas fa-user-plus fa-5x " style="color:#3589A1"></i>
            <div class="card-body">
              <h5 class="card-title" style="text-align:center">Cadastre o seu imóvel</h5>
              <p class="card-text" style="text-align:center">Depois de cadastrar seu imóvel, o sistema apresentará todos imóveis de seu interesse.</p>    
                <div class="text2 text-center middle"><h5>
                <a href="<?php echo base_url() ?>comofunciona" class ="none_line text-light">Mais informações cadastro</a></h5></div> 
            </div>
          </div>
          <div class="card imgHover cursoralt">              
           <i class="fas fa-users fa-5x " style="color:#3589A1"></i>
            <div class="card-body">
              <h5 class="card-title" style="text-align:center">Conheça os seus interesses</h5>
              <p class="card-text" style="text-align:center">Nosso sistema inteligente irá selecionar todos o imóveis que melhor adequar-se ao seu perfil.</p>  
                  <div class="text2 text-center middle"><h5>
                <a href="<?php echo base_url() ?>login" class ="none_line text-light">Acessar a página de login</a></h5></div>         
            </div>
          </div>
        </div>
        </div>
  
 
      <div class="row" id="caixa2"><!--row -->
          <div class="col-md-12 pt-5">            
            <p class="h2 text-center text-white">Precisa de ajuda? Fala com um dos nossos especialiasta</p>      
          </div>
           <div class="col-md-12 bt_caixa2">
            <a href="<?php echo base_url() ?>login"  class="btn btn-lg btn-custom btn-roxo">Cadastrar imóvel</a>
            <a href="<?php echo base_url() ?>login" class="btn btn-lg btn-custom btn-branco">Ver imóvel</a>
          </div>          
        </div>     

          <br>          
          <br>
        <div class="container">
        <div class="col-md text-center pb-2 font-weight-bold">
          <h2> Encontre Permuta para todas as ocasiões</h2>          
        </div>
          <div class="form-group row text-justify">
            <div class="col-md-3 p-2 bg-dark imgHover cursoralt"><img src="<?php echo base_url() ?>assets/img/permuta3.jpg" alt="Avatar" class="image" style="width:100%">        
                  <div class="text2 text-center middle"><h5>Permuta para familia</h5></div>     
            </div>            
            <div class="col-md-3 p-2 bg-dark imgHover cursoralt"><img src="<?php echo base_url() ?>assets/img/permuta2.jpg" alt="Avatar" class="image" style="width:100%">
                  <div class="text2 middle text-center"><h5>Permuta para temporada</h5></div>
            </div>
            <div class="col-md-3 p-2 bg-dark imgHover cursoralt"><img src="<?php echo base_url() ?>assets/img/permuta1.jpg" alt="Avatar" class="image" style="width:100%">
                <div class="text2 middle"><h5>Permuta para os finais de semana</h5></div>
            </div>
            <div class="col-md-3 p-2 bg-dark imgHover cursoralt"><img src="<?php echo base_url() ?>assets/img/permuta4.jpg" alt="Avatar" class="image" style="width:100%">         
                  <div class="text2 middle text-center"><h5>Permuta para todos os tipos de imóveis</h5></div>
            </div>
          </div>
        </div>
          <br>          
          <br>     
         <!--Fim container  -->
     </div>     

     <!-- JavaScript (Opcional) --> 
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
 </body>
</html>
<?php $this->load->view('v_footer'); ?>