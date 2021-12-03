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

    <title>Só Permuta</title>
  </head>
  <body><div class="container-fluid">
  <header><!--Cabeçalho -->
  
      <div class="blog-header py-1 bg-secondary ">
        <div class="row flex-nowrap justify-content-between align-items-center mb-0">
          <div class="col-1 pt-1">
             <a href = "index.php?pagina=home" class= "navbar-brand">
          <img src= "img/logo.png" width= "168"></a>
          </div>
        
          
          <div class="col-3 pt-1">
            <a href="#" class="btn btn-outline-light ">
               <i class="fab fa-facebook-square fa-2x"></i>
            </a>
            <a href="#" class="btn btn-outline-light ">
               <i class="fab fa-whatsapp-square fa-2x"></i>
            </a>
          </div>
          
        </div>
      </div>
    <nav class = "navbar navbar-expand-sm navbar-dark bg-dark">
      <button class= "navbar-toggler" data-toggle = "collapse" data-target= "#nav-principal">
     <span class= "navbar-toggler-icon"></span>
      </button>
        <div class = "collapse navbar-collapse" id = "nav-principal">
          <ul class = "navbar-nav ml-auto">
            <li class="nav-item">
              <a href= "index.php?pagina=home" class= "nav-link active">Home</a>
            </li>
             <li class="nav-item">
              <a href= "index.php?pagina=comofunciona" class= "nav-link">Como funciona</a>
            </li>
            <li class="nav-item">
              <a href= "index.php?pagina=quemsomos" class= "nav-link">Quem Somos</a>
            </li>
            <li class="nav-item">
              <a href= "index.php?pagina=contato" class= "nav-link">Contato</a>
            </li>
            <li class="nav-item">
              <a href= "index.php?pagina=acessar" class= "btn btn-outline-light ml-4">Acessar</a>
            </li>
            
          </ul>
        </div>
       
       </nav>
    </div>
  </div>
  </header>
  <section>
    <div class="container-fluid">
       <div class="row">
          <div class="col">
            <div class="align-self-center">
              
                <?php
                 if(isset($_REQUEST['pagina'])){
                 $pagina_ap = $_REQUEST['pagina'];
                 switch($pagina_ap){
                    case "home":  include("home.php"); break;
                    case "comofunciona":  include("comofunciona.php"); break;
                    case "quemsomos": include("quemsomos.php"); break;
                    case "contato": include("contato.php"); break;
                    case "acessar": include("acessar.php"); break;
                   default: include("home.php"); break;
                    }
                 }else
                    {
                        include("home.php");
                     }
                 
                ?>
              
            </div>
          </div>
       </div>
    </div>
  
  </section>
  
  <footer>
      <div class= "container-fluid">
        <div class= "row footer_id">
          
          <div class= "col-sm">
       
             <img src= "img/logo.png" width= "168"></a>
          </div>
        <div class= "col-sm">
            <h4><font color: white> SÓ PERMUTAS</font></h4>
            <span align=center> Só PERMUTA oferece uma nova maneira de trocar imóvel. Confira nossas ofertas. Fale direto com corretor. Atendimento personalizado</span>
          </div>
        
           <div class= "col-sm navbar-nav">
            <h4><font color: white> INFORMAÇÕES</font></h4>
            <a href="">Politica da empresa</a></br>
            <a href="">Perguntas frequentes</a></br>
            <a href="">Minha área</a></br>
          </div>
            <div class= "col-sm">     
            <h4><font color: white> FALE CONOSCO</font></h4>
            <a href="#" class="btn btn-outline-light ">
              <i class="fab fa-whatsapp-square 2x"></i>
            </a>  
             <span alin>11 98363636637</span></br></br>
            <a href="#" class="btn btn-outline-light ">
             <i class="fas fa-at"></i>
            </a>  
            <span>contato@sopermuta.com</span>
          </div>
      </div>
    </footer>
  
  
   
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>