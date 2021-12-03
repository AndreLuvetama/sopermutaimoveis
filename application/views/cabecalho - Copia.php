<!DOCTYPE html>
<html lang="pt-br">
 <head><meta charset="big5">
    <!-- Meta tags Obrigat¨®rias -->
    
    <meta name="viewport" content="width=device, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $titulo;?></title>
  <link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/icon.jpg"> 

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
<header>
    <div class="container-fluid cor-padrao text-light card" >
            
            <div class="card-header fixed-top" style="background-color: #1b4754">
                <div class="container">
                    <div class="row">
                        <div class="col-sm">
                        Entrar em contato:  &nbsp;&nbsp;<i class="fas fa-phone"></i> 11 99516-3318  </span> 
                    </div>

                    <?php 
                      if(!empty($this->session->userdata("nomeUsuario")))
                      {  if($this->session->userdata("tipo_usuario_id") != 1 ) {?>
                    <div class="col-sm" >
                         <a href="<?php echo base_url()?>Meu_Perfil" class = "none_line text-light">Minha Conta</a>
                    </div>      
                    <div class="p-1 bg-light rounded" style="color:#080807" >
                            <?php echo $this->session->userdata("nomeUsuario") ?>
                            <a href="<?php echo base_url()?>login/logoff" class = "none_line">
                             <i class="fas fa-sign-in-alt"></i>&nbsp;&nbsp;sair</a>         
                     </div>     
                                  <?php }elseif($this->session->userdata("tipo_usuario_id") == 2){?>
                      <div class="p-1 bg-secondary"><a href="<?php echo base_url()?>admin" class = "none_line     text-light">
                     Conta admin</a>
                  </div>
                        <div class="p-1 bg-light rounded" >
              <?php echo $this->session->userdata("nomeUsuario") ?>
                <a href="<?php echo base_url()?>login/logoff" class = "none_line">
                     <i class="fas fa-sign-in-alt"></i>&nbsp;&nbsp;sair</a>         
                   </div>
                           <?php  }
                            }            
                    else { ?>
                             <div class="p-1 bg-light rounded">
                         <a href="<?php echo base_url() ?>login" class="btn btn-outline-light" style="float:right"><span style="color:#3589A1" align="right">login</span> 
                            <i class="fa fa-sign-in-alt fa-1x" style="color:#3589A1" ></i></a>
                         </div>

                       <?php  }
                    ?>
                </div>
                    
                </div>
            </div>
            <div class="card-body">
                <div class="container">
                    <div class="row pt-5  mb-0">
                        <div class="col-sm-8 ">
                            <a href = "<?php echo base_url() ?>">
                              <img class="pt-2" src= "<?php echo base_url() ?>assets/img/logo2.fw.png" width= "168"></a>
                        </div>
                        <div class="col-sm-4 pt-4 float-sm-right">
                            <a href="#" class="btn btn-outline-info float-sm-right m-1"><i class="fab fa-facebook-square fa-3x"  style="color:#fff"></i></a>
                          <a href="#" class="btn btn-outline-info float-sm-right m-1" style="color:#fff">
                            <i class="fab fa-whatsapp-square fa-3x" style="color:#fff"></i></a>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light text-light float-left">
                      <a class="navbar-brand text-light menuHover " href="<?php echo base_url() ?>">Home</a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                          <li class="nav-item active">
                            <a class="nav-link text-light menuHover" href="<?php echo base_url() ?>quemsomos">Quem Somos <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-light menuHover" href="<?php echo base_url() ?>comofunciona">Como funciona</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-light menuHover" href="<?php echo base_url('contato'); ?>">Contato</a>
                          </li>
                         </ul>
                    </div>
                    </nav>
                </div>
            </div>
                
            
        

        
    </div>


