
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
      




    <title>Só Permuta</title>
  </head>
  <body>
       
        <div class="container-fluid testo_formatado ">
         <ul class="nav flex-column nav-pills nav-stacked " >
          <li class="nav-item pill-1 border border-dark rounded-0 p-2 " >
            <center ><img src= "<?php echo base_url() ?>assets/img/images.png" class="img img-circle"  width= "168"></center>
             <center><a class="none" href="">Adiciona a sua foto</a></center> 
            </li>
            <li class="nav-item pill-1">
                   
              <a class="nav-link fade show active border border-dark rounded-0 " 
              href="<?php echo base_url() ?>meu_perfil">
                <i class="fas fa-user-edit 3x">&nbsp;</i> Editar Perfil</a>
            </li>
            <li class="nav-item pill-1">
              <a class="nav-link border border-dark rounded-0 " href="<?php echo base_url() ?>visializar_imovel">
                <i class="fas fa-home 3x">&nbsp;&nbsp;</i>Visuazar imóvel</a>
            </li>
            <li class="nav-item pill-1">
              <a class="nav-link border border-dark rounded-0  " href="<?php echo base_url() ?>cadastrar_imovel" >
                  <i class="far fa-edit 3x"></i>&nbsp;&nbsp;Cadastrar imóvel</a>
            </li>
            
          </ul>
        </div>

         <div class="align-self-center">
              
                <?php
                 if(isset($_REQUEST['pagina'])){
                 $pagina_ap = $_REQUEST['pagina'];
                 switch($pagina_ap){
                    case "index":  include("index.phtml"); break;
                    case "comofunciona":  include("comofunciona.phtml"); break;
                    case "quemsomos": include("quemsomos.phtml"); break;
                    case "contato": include("contato.phtml"); break;
                    case "acessar": include("login.phtml"); break;
                   default: include("index.phtml"); break;
                    }
                 }else
                    {
                        include("index.phtml");
                     }
                 
                ?>
              
            </div>
   
      
              
            </div>




  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"> </script>





  <script type = "text/javascript">
      $(".nav-link").on("click", function() {
        $(".nav-link").removeClass("active");
        $(this).addClass("active");
      });
    </script>

   
    


    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>




  </body>
</html>