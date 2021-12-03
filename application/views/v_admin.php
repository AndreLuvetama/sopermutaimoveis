<?php $this->load->view('v_cabecalho'); ?>
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

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Gestão dos imóveis</title>

    <!-- Principal CSS do Bootstrap -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
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


    <!-- Estilos customizados para esse template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>

  <body>
    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-dark sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column border-bottom">
              <li class="nav-item">
                <a class="nav-link active text-light tabHover" href="http://localhost/servidor_godade/sopermutaimoveis/Admin">
                  <i class="fas fa-home"></i>
                  Principal
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light tabHover" href="http://localhost/servidor_godade/sopermutaimoveis/Admin?pagina=1">
                  <i class="fas fa-unlock-alt"></i>
                  Senha/Usuário
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light tabHover" href="http://localhost/servidor_godade/sopermutaimoveis/admin/gestaousuario/">
                  <i class="fas fa-users"></i>
                  Gestão de usuário
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light tabHover" href="http://localhost/servidor_godade/sopermutaimoveis/admin/gestaoimovel/">
                 <i class="fas fa-city"></i>
                  Gestão de Imóveis
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light tabHover" href="http://localhost/servidor_godade/sopermutaimoveis/admin/gestaoimovel/">
                  <i class="far fa-chart-bar"></i>
                  Relatórios
                </a>
              </li>
             <li class="nav-item">
                <a class="nav-link text-light tabHover" href="http://localhost/servidor_godade/sopermutaimoveis/Admin?pagina=5">
                  <i class="fas fa-envelope"></i>
                  Mensagem
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Relatórios salvos</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Neste mês
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light tabHover" href="#">
                  <span data-feather="file-text"></span>
                  Último trimestre
                </a>
              </li>
             
            </ul>
          </div>
        </nav>
 
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">


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
                       <div class="col-md-12">
                            <h1 class="mt-4">Painel do Admin</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Administrador</li>
                        </ol>
                       </div>
                        <div class="form-row">
                            <div class="col-md-3">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Acessar Cadastros</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="admin/gestaousuario/">Visualizar detalhes</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Gestão de Imóveis</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="admin/gestaoimovel/">Visualizar detalhes</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Imóveis Alugados</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Visualizar detalhes</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Imóveis Disponiveis</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Visualizar detalhes</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                              <div class="row">
                            <div class="col-xl-4">
                                <div class="card mb-4">
                                    <div class="card-header"><i class="fas fa-envelope mr-2"></i>Novas Mensagens</div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card mb-4">
                                    <div class="card-header"><i class="fas fa-envelope-open mr-2"></i>Mensagens enviadas</div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card mb-4">
                                    <div class="card-header"><i class="fas fa-reply mr-2"></i>Enviar mensagem</div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
              </div>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">


          <?php
                 if(isset($_REQUEST['pagina'])){
                 $pagina_ap = $_REQUEST['pagina'];
                 switch($pagina_ap){
                    case "1":  include("admin/v_usuarioSenha.php"); break;
                    case "2":  include("admin/v_gestaousuario.php"); break;
                    case "3": include("admin/v_gestaoimovel.php"); break;
                    case "4": include("admin/v_relatorio.php"); break;
                     case "5": include("admin/v_mensagem.php"); break;
                    default: include("admin/v_principal.php"); break;
                    }
                 }else
                    {
                        include("admin/v_principal.php");
                     }
                 
                ?>
          </div>
        </main>
      </div>
    </div>

    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Ícones -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Gráficos -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          datasets: [{
            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>
  </body>
</html>
<?php $this->load->view('v_footer'); ?>