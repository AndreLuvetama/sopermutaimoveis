  <section>
    <div class="container-fluid">
       <div class="row">
          <div class="col">
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
       </div>
    </div>
  </section>