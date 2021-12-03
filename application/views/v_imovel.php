<?php 
        $statusAssinante = isset($tab_usuario->statusAssinante) ? $tab_usuario->statusAssinante: "";
        $txt_usuario_id = isset($tab_usuario->usuario_id) ? $tab_usuario->usuario_id: "";
        $txt_nome = isset($tab_cad_pessoa->nome) ? $tab_cad_pessoa->nome: "";
        $txt_email = isset($tab_cad_pessoa->email) ? $tab_cad_pessoa->email: "";
?>

<?php $this->load->view('v_cabecalho'); ?>


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
 <link href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">
<!--<?php //echo var_dump($txt_usuario_id);?>
<?php //echo var_dump($txt_imoveis_id);?>
<?php //echo var_dump($txt_file_name);?>-->
      
    <title>Só Permuta</title>

    <?php $usuario = $this->session->userdata("usuario_id") ?>

  </head>
  <body>
  <div class="container testo_ #fff3e0 lighten-5 mx-md-n5 shadow p-3">
  <div class="card">
  <div class="card-header">
     <span class="font-weight-bold text-left"><?php echo($titulo)?></span>&nbsp;&nbsp;&nbsp;&nbsp;
     ID do imóvel&nbsp;&nbsp;<span class="font-weight-bold text-left"><?php echo($id)?></span> 
  </div>
  <div class="card-body">
    <div class="form-row">
      <div class="col-sm-6"><i class="fas fa-street-view 3x"></i>&nbsp; Endereço:&nbsp; <?php echo($ruaImovel)?> </div>
      <div class="col-sm-3"><i class="fas fa-barcode"></i>&nbsp; Número:</span>&nbsp;<?php echo($numero)?> </div>
       <div class="col-sm-3"><i class="fas fa-barcode"></i>&nbsp; Complemento:</span>&nbsp;<?php echo($complemento)?> </div>
   </div>
    <div class="form-row">
      <div class="col-sm-6"><i class="fas fa-barcode"></i>&nbsp; Cep:</span>&nbsp;<?php echo($cepImovel)?> </div>
      <div class="col-sm-3"><i class="fas fa-city"></i>&nbsp; Cidade:&nbsp; <?php echo($cidadeImovel)?> </div>
      <div class="col-sm-3"><i class="far fa-flag"></i> &nbsp;Bairro:&nbsp;<?php echo($bairroImovel)?> </div>
    </div>
    <div class="form-row">
      <div class="col-sm-6"><i class="fas fa-city"></i>&nbsp; Estado:&nbsp;<?php echo($estadoImovel)?>  </div>
      <div class="col-sm-6"><i class="fas fa-globe-americas"></i> &nbsp;Pais:&nbsp;Brasil</div>
  
    </div>

</div>
</div>

<div class="form-row bg-light">
  <div class="col-md-8">   
    <?php if(!empty($carouselimg)) {?>
         <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
     <?php 
      $controle_ativo = 2;       
     
 ?>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
      <div class="col-sm-12">
        <div id="carouselExampleControls" class="carousel slide pt-3" data-ride="carousel">
      <div class="carousel-inner">
          <?php $cont_slide = 0;
            foreach($carouselimg as $linha) {
                   if($controle_ativo == 2 and $linha['imoveis_id'] == $id){ ?>
        <div class="carousel-item active">
          <img  src="<?php echo base_url('upload/imoveis/'.$linha['file_name']); ?>" class="img-fluid" alt="Third slide"   style="height:450px; width: 800px" >
        </div>
             <?php
                 $controle_ativo = 1;
                      }elseif($linha['imoveis_id'] == $id and $controle_ativo == 1){ ?>
        <div class="carousel-item">
          <img  src="<?php echo base_url('upload/imoveis/'.$linha['file_name']); ?>" class="img-fluid" alt="Third slide"   style="height:450px; width: 800px" >
        </div>
         <?php } } ?>  
        
      </div>
      <a  class="carousel-control-prev fontIcon" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next fontIcon"  href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon " aria-hidden="true">
          </span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    </div>
  </div>
</div>  
<?php } ?>
 </div>
   <div class="col-sm-4 pt-3">
      <?php if($txt_usuario_id == $usuario_id)
    { ?>
      <div class="text-lg-center text-uppercase p-3 mb-2 text-lg-center font-size:2.5rem bg-warning text-white">Contato do usuário</div><br>
  <p class="text-lg-center" style="font-size: 20px;"><b>Código do Usuário:</b>&nbsp;<?php echo($txt_usuario_id)?></p>
       <center> Entra em contato com o propritário<br><br><i class="fas fa-user"></i>&nbsp;&nbsp;<?php echo($txt_nome)?><br><i class="fas fa-envelope"></i>&nbsp;&nbsp;<?php echo($txt_email)?><br>
     <i class="fas fa-phone-square-alt"></i>&nbsp;&nbsp;<?php echo($tel)?> &nbsp;&nbsp;<i class="fab fa-whatsapp-square"></i>&nbsp;&nbsp;<?php echo($cel)?></center><br>
      <div class="alert alert-secondary" role="alert">
                            <?php echo $num_row;?> mensagens enviadas.
      </div>
      <div class="alert alert-warning" role="alert">
       Você tem <?php echo $num_row;?> novas mensagens
      </div>
        

  <?php  }else{?> 
    
     <div class="text-lg-center text-uppercase p-3 mb-2 text-lg-center font-size:2.5rem bg-warning text-white">Contato do usuário</div><br>
  <p class="text-lg-center" style="font-size: 20px;"><b>Código do Usuário:</b>&nbsp;<?php echo($usuario_id)?></p>
       <center> Entra em contato com o propritário<br><br><i class="fas fa-user"></i>&nbsp;&nbsp;<?php echo($nome)?><br><i class="fas fa-envelope"></i>&nbsp;&nbsp;<?php echo($email)?><br>
     <i class="fas fa-phone-square-alt"></i>&nbsp;&nbsp;<?php echo($tel)?> &nbsp;&nbsp;<i class="fab fa-whatsapp-square"></i>&nbsp;&nbsp;<?php echo($cel)?></center>
        <br>
      
       <div class="form-group">       
        <div class="alert alert-warning cursoralt text-lg-center" data-toggle="modal" data-target="#janelaModal" role ="alert">
          <i class="fab fa-readme"></i>&nbsp;<b>Ler descrição do imóvel</b>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="janelaModal" tabindex="-1" role="dialog" aria-labelledby="janelaModalTitilo" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="janelaModalTitilo">Mensagem do usuário</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">                
                <?php echo($descricaoImovel);?>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Fechar</button>
              </div>
            </div>
          </div>
        </div>
        </div>   
     <?php } ?>   
     </div> 
  
   </div>
   <br>

<div class="card">
 <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Descrição do Imóvel</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Localização do Imóvel</a>
    <a class="nav-item nav-link" id="nav-contato-tab" data-toggle="tab" href="#nav-contato" role="tab" aria-controls="nav-profile" aria-selected="false">Contato do Próprietário</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active m-4" id="nav-home" role="tabpanel"  aria-labelledby="nav-home-tab">
    <div class="form-row">
        <div class="col-sm-3">
Apelido do Imóvel:&nbsp;&nbsp;&nbsp;&nbsp;<span class="font-weight-bold"><?php echo($apelidoImovel)?></span>&nbsp;&nbsp;<br>
Tipo de Imóvel:&nbsp;&nbsp;&nbsp;&nbsp;<span class="font-weight-bold"><?php echo($tipoImovel)?></span>
</div>
  </div><br>


  <div class="form-row">
    <div class="col-sm-4"> &radic;&nbsp;Banheiro&nbsp;<?php echo($num_banheiro)?></div>
    <div class="col-sm-4"></i>&radic;&nbsp;Número de suites&nbsp;&nbsp;<?php echo($num_suites)?></div>
    <div class="col-sm-4"></i>&radic;&nbsp;Número de quartos&nbsp;&nbsp;<?php echo($num_quartos)?></div>    
  </div>
  <div class="form-row">
    <div class="col-sm-4">&radic;&nbsp;Área Terrea&nbsp;<?php echo($areaTerrea)?>&nbsp;&nbsp;m2</div>
    <div class="col-sm-4">&radic;&nbsp;Tamanho&nbsp;&nbsp;<?php echo($tamanho)?>&nbsp;&nbsp;m2</div>
    <div class="col-sm-4">&radic;&nbsp;</i>Número de vagas&nbsp;&nbsp;<?php echo($num_vagas)?>&nbsp;&nbsp;</div>  
  </div>
<br>
  <p class="font-weight-bold">Dependências do Imóvel</p>
  
  <div class="form-row">
    <div class="col-sm-3"><?php echo !empty($det_churrasqueira)?"<span style =color:#0357b3>&radic;&nbsp;</span>".($det_churrasqueira):"<span style =color:red>&Chi;</span>&nbsp;Currasqueira"?></div>
        <div class="col-sm-3"><?php echo !empty($det_vaga)?"<span style =color:#0357b3>&radic;&nbsp;</span>".($det_vaga):"<span style =color:red>&Chi;</span>&nbsp;vaga"?></div>
    <div class="col-sm-3"><?php echo !empty($det_suite)?"<span style =color:#0357b3>&radic;&nbsp;</span>".($det_suite):"<span style =color:red>&Chi;</span>&nbsp;Suite"?></div>
  </div>
  <div class="form-row">
    <div class="col-sm-3"><?php echo !empty($det_tvCabo)? "&radic;&nbsp;".($det_tvCabo):"
     <span style =color:red>&Chi;</span>&nbsp;tv cabo"?></div> 
    <!--echo("&radic;".$det_tvCabo):echo("&Chi;".$det_tvCabo)--> 
    <div class="col-sm-3"><?php echo !empty($det_piscina)?"<span style =color:#0357b3>&radic;&nbsp;</span>".($det_piscina):"<span style =color:red>&Chi;</span>&nbsp;Piscina"?></div>
        <div class="col-sm-3"><?php echo !empty($det_wifi)?"<span style =color:#0357b3>&radic;&nbsp;</span>".($det_wifi):"<span style =color:red>&Chi;</span>&nbsp;Wifi"?></div>
  </div>
<div class="form-row">
      <div class="col-sm-3"><?php echo !empty($det_academia)?"<span style =color:#0357b3>&radic;&nbsp;</span>".($det_academia):"<span style =color:red>&Chi;</span>&nbsp;Academia"?></div>

      <div class="col-sm-3"><?php echo !empty($det_arCondicionado)?"<span style =color:#0357b3>&radic;&nbsp;</span>".($det_arCondicionado):"<span style =color:red>&Chi;</span>&nbsp;Ar condicionado"?></div>


         <div class="col-sm-3">
      <?php if($imovelMobilia =="mobiliado") {
         echo "<span style =color:#0357b3>&radic;&nbsp;mobiliado</span>";
       }elseif ($imovelMobilia =="nmobiliado") {
         echo "<span style =color:red>&Chi;</span>&nbsp;não mobiliado";
       }       
       
        ?>
       
     </div>
  </div>
  </div>
  <!--mapa dos imóveis -->
  <div class="tab-pane fade m-4" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
    <div class="col-sm-12">
     <!--Google map-->
<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://maps.google.com/maps?q=<?php echo $ruaImovel; ?>&output=embed">></iframe>
</div> 
    </div> 
  </div>
  <div class="tab-pane fade m-4" id="nav-contato" role="tabpanel" aria-labelledby="nav-contato-tab">
   <div class="form-row">
     <div class="col-sm-4">
       <div class="alert alert-dark" role="alert"><b>Cód Usuário:</b>&nbsp;<?php echo($usuario_id)?></div>
    
       <i class="fas fa-user"></i>&nbsp;&nbsp;<?php echo($nome)?><br>
       <i class="fas fa-envelope"></i>&nbsp;<?php echo($email)?><br>
       <i class="fas fa-phone-square-alt"></i>&nbsp;&nbsp;<?php echo($tel)?><br>
       <i class="fab fa-whatsapp-square"></i>&nbsp;&nbsp;<?php echo($cel)?>                   
     </div>
      <div class="col-sm-8 ">
     <div class="alert alert-dark" role="alert"> Enviar mensagem</div>
          <form id="submit_form">

            <div class="form-group row">
            <label for="txt_usuario_recebe_id" class="col-sm-3 col-form-label">Código do usuário</label>
            <div class="col-sm-5">
              <select class="form-control" name="txt_usuario_recebe_id" id="txt_usuario_recebe_id">           
                    <option>selecione o cod do usuário</option>
                <?php  foreach($usuarioImovel as $linha)
                    { 
                      if($linha->apelidoImovel == $apelidoImovel and $linha->usuario_id != $txt_usuario_id){
                      echo '<option value="'.$linha->usuario_id.'">'.$linha->usuario_id.'</option>';
                     }
                    }
                    ?>
                </select> 
            </div>
          </div>
            <div class="form-group row">
            <label for="txt_usuario_recebe_nome" class="col-sm-3 col-form-label">Nome</label>
            <div class="col-sm-9">
              <input type="text"  name="txt_usuario_recebe_nome" class="form-control" id="txt_usuario_recebe_nome" value="">
            </div>
          </div>

            <div class="form-group row">
            <label for="txt_assunto" class="col-sm-3 col-form-label">Assunto</label>
            <div class="col-sm-9">
              <input type="text"  name="txt_assunto" class="form-control" id="txt_assunto" value="">
            </div>
          </div>
          <div class="form-group row">
            <label for="txt_mensagem" class="col-sm-3 col-form-label">Mensagem</label>
            <div class="col-sm-9">
              <textarea name="txt_mensagem" id="txt_mensagem" class="form-control"></textarea>  
              
            </div>
          </div>
                     <input type="button" name="submit" id="submit" class="btn btn-mdb-color" value="Enviar mensagem" />  
                </form> 
                   <div id="response"></div>    
     </div>
     <div class="form-row pt-3">        
       <div class="table-responsive">
          <table class="table">
            <thead class="thead-light ">
                        <tr>                           
                                  <th scope="col">Assunto</th>
                                  <th scope="col">Nome do usuário</th>
                                  <th scope="col">Cód usuário</th>
                                  <th scope="col">Data de envio</th>
                                </tr>
                              </thead>
                 <?php  if(!empty($listarmensagem)){
                           foreach($listarmensagem as $msg) {?>
                           
                              <tbody>
                              <tr>  
                                <td class="cursoralt" data-toggle="modal" data-target="#modalmsg"><?php echo $msg['assunto']; ?></td>
                                <div class="modal fade" id="modalmsg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle"><?php echo $msg['assunto']; ?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                   <?php echo $msg['mensagem']; ?>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-dark" data-dismiss="modal">Fechar</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                                <td><?php echo $msg['usuario_recebe_nome']; ?></td> 
                                <td><?php echo $msg['usuario_envio_id']; ?></td>                            
                                <td><?php echo $msg['data_envio']; ?></td>
                              </tr>
                            </tbody>
                          

                         <?php }

                        } ?>
           </table>
     
      </div>
     </div>
     
   </div>      
                         

  </div>

</div>
</div>

<hr class="style8">
        <h5>Imóveis do seu interesse &hearts;</h5><br>        
        <div class="form-row">
        <div class="col-sm-12 txt-imovel">

        <div class="table-responsive">
          <table class="table table-striped" id="minhaTabela">
          	  <thead class="thead-dark">
          	  	<tr> <td ></td><td ></td></tr>

                <?php  if(!empty($imoveisdeInteresse))
                        { 
                           
                    foreach($imoveisdeInteresse as $imoveiss)
                      { 
                         if($imoveiss['intTipoImovel'] == $intTipoImovel && $imoveiss['id'] != $id && $imoveiss['intEstados'] == $intEstados && $imoveiss['intImvlMobilia'] == $intImvlMobilia  && 
                          !empty($imoveiss['default_image'])){
                      
                        $defaultImage = !empty($imoveiss['default_image'])?'<img src="'.base_url().'upload/imoveis/'.$imoveiss['default_image'].'" width= "300" alt="" />':''; ?>
                        	</thead>          
                  <td class="pt-3" width="20%">
                       <?php echo $defaultImage; ?>     
                  </td>
                  <td class="nav-item p-3" width="80%" style="font-size: 14px; font-family (stack):Roboto">
                      <p style="font-size: 1.5rem" class="link1"><a href="<?php echo base_url('imovel/'.$imoveiss['id']); ?>"><?php echo($imoveiss['nomeImovel']) ?></a></p>
                      <span style="font-weight: bold">Código do Imóvel:&nbsp;<?php echo ($imoveiss['id']) ?>&nbsp;&nbsp;Apelido do imovel&nbsp;<?php echo ($imoveiss['apelidoImovel']) ?>&nbsp;
                      </span><br>
                        <i class="fas fa-street-view 3x"></i>&nbsp;
                        R.<?php echo ($imoveiss['ruaImovel']) ?>&nbsp;<br>
                        <i class="fas fa-city"></i>&nbsp;<?php echo ($imoveiss['bairroImovel']) ?> 
                        <?php echo ($imoveiss['estadoImovel']) ?>&nbsp;
                        <?php echo ($imoveiss['cepImovel']) ?>, Brasil</br>
                        <i class="fas fa-restroom"></i>&nbsp;<?php echo ($imoveiss['num_banheiro']) ?>&nbsp;Banheiro&nbsp;<?php echo ($imoveiss['num_vagas']) ?>&nbsp;<i class="fas fa-warehouse"></i></i>&nbsp; 
                        &nbsp;vaga(as) &nbsp;<i class="fas fa-bed"></i>&nbsp; <?php echo ($imoveiss['num_quartos']) ?>&nbsp;quarto(os)&nbsp;<i class="fas fa-ruler-horizontal fas 2x"></i>&nbsp;Tamanho&nbsp;<?php echo ($imoveiss['tamanho']) ?>&nbsp;m2<br>
                        <i class="fas fa-calendar-alt 3x"></i>&nbsp;
                        <?php echo ($imoveiss['dataIncl']) ?></br></br>

                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <?php if($statusAssinante == 1) {?>
                    <a href="<?php echo base_url('imovel/'.$imoveiss['id']); ?>"><button class="btn btn-mdb-color"><i class="far fa-eye"></i>&nbsp;&nbsp;Visualizar imóvel</button></a>
                  
                  <?php }else{?>
                    <button class="btn btn-warning" data-toggle="modal" data-target="#btModal"><i class="far fa-eye"></i>&nbsp;&nbsp;Visualizar imóvel</button>
                  <?php }?>
          <!-- Modal -->
          <div class="modal fade" id="btModal" tabindex="-1" role="dialog" aria-labelledby="caixaModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="caixaModal">Usuário não assinante</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Assina um dos nossos planos e inicia a permuta</p>
                 
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-mdb-color" data-dismiss="modal">Ok</button>
                 
                </div>
              </div>
            </div>
          </div>
                                    
                  </td>
                  <tr>                 
                 
                 <?php } 

                       }
                    
                    }else{ 
                  echo "Ainda não encontramos imovel semelhantes1";
                   }          

                ?>
              </table>
            </div>
            </div>    
        </div>
          </div>
        </div>
      </div>

    </div>
<script type="text/javascript">
  $('#tab a').on('click', function(e) {
  e.preventDefault();
  $(this).tab('show');
});
</script>


 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function () {
                //tempo de duração do slide
                $('.carousel').carousel({
                    interval: 1000
                });
                
                $('#myCarousel').on('slid.bs.carousel', function () {
                    //Receber o valor do atributo data-slide-to quando estiver ativo
                    var numeroSlide = $('#valor-car.active').data('slide-to');
                    //$("#msg").html(numeroSlide);
                    
                    //Ocultar a descrição do slide anterior
                    $('.conteudo').hide();
                    
                    //Apresentar o conteúdo do slide atual
                    $('.imagem' + numeroSlide).show();
                });
            });         
        </script>
        <!-- envia form>-->

<script> 
 $(document).ready(function(){  
      $('#submit').click(function(){  
           var txt_usuario_recebe_nome = $('#txt_usuario_recebe_nome').val();  
           var txt_mensagem = $('#txt_mensagem').val(); 
           var txt_usuario_recebe_id = $('#txt_usuario_recebe_id').val();  
           var txt_assunto = $('#txt_assunto').val();    
           if(txt_usuario_recebe_nome == '' || txt_mensagem == '' || txt_usuario_recebe_id == '' || txt_assunto == '')  
           {  
                $('#response').html('<span class="text-danger">Todos os campos devem ser preenchidos</span>');  
           }  
           else  
           {   
                $.ajax({  
                     url:"<?php echo site_url('Meu_Perfil/enviarMensagem'); ?>",

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


 <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>

  <script>
  $(document).ready(function(){
      $('#minhaTabela').DataTable({
          "language": {
            "paginate": {
            "previous": "Anterior",
            "next": "Próximo",
          },
                "lengthMenu": "Mostrando _MENU_ registros por página",
                "zeroRecords": "Nenhum registros encontrado",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhum registro disponível",
                "infoFiltered": "(filtrado de _MAX_ registros no total)",
                "search": "Buscar por nome"
            }
        });
  });
  </script>

<?php $this->load->view('v_footer'); ?>