<?php $this->load->view('v_cabecalho'); ?>
<?php
      $txt_file_name = isset($ImageUser->file_name) ? $ImageUser->file_name: ""; 
      $txt_usuario_id         = isset($tab_usuario->usuario_id) ? $tab_usuario->usuario_id: "";
      $txt_nomeImovel         = isset($tab_imoveis->nomeImovel) ? $tab_imoveis->nomeImovel: "";
      $txt_imoveis_id         = isset($tab_imoveis->id) ? $tab_imoveis->id: "";
      $txt_descricaoImovel    = isset($tab_imoveis->descricaoImovel) ? $tab_imoveis->descricaoImovel: "";
      $txtCep                 = isset($tab_imoveis->cepImovel) ? $tab_imoveis->cepImovel: "";
      $txtRua                 = isset($tab_imoveis->ruaImovel) ? $tab_imoveis->ruaImovel: "";
      $txtEstado              = isset($tab_imoveis->estadoImovel) ? $tab_imoveis->estadoImovel: "";
      $txtBairro              = isset($tab_imoveis->bairroImovel) ? $tab_imoveis->bairroImovel: "";
      $txtCidade              = isset($tab_imoveis->cidadeImovel) ? $tab_imoveis->cidadeImovel: "";
      $txtNumero              = isset($tab_imoveis->numero) ? $tab_imoveis->numero: "";
      $txt_tipoImovel         = isset($tab_imoveis->tipoImovel) ? $tab_imoveis->tipoImovel: "";
      $txt_apelidoImovel      = isset($tab_imoveis->apelidoImovel) ? $tab_imoveis->apelidoImovel: "";    
      $txt_tvCabo             = isset($tab_imoveis->det_tvCabo) ? $tab_imoveis->det_tvCabo: "";
      $txt_piscina            = isset($tab_imoveis->det_piscina) ? $tab_imoveis->det_piscina: "";
      $txt_wifi               = isset($tab_imoveis->det_wifi) ? $tab_imoveis->det_wifi: "";
      $txt_vaga               = isset($tab_imoveis->det_vaga) ? $tab_imoveis->det_vaga: "";
      $txt_academia           = isset($tab_imoveis->det_academia) ? $tab_imoveis->det_academia: "";
      $txt_arCondicionado     = isset($tab_imoveis->det_arCondicionado) ? $tab_imoveis->det_arCondicionado: "";
      $txt_suite              = isset($tab_imoveis->det_suite) ? $tab_imoveis->det_suite: "";
      $txt_churrasqueira      = isset($tab_imoveis->det_churrasqueira) ? $tab_imoveis->det_churrasqueira: "";
      $txt_tamanho            = isset($tab_imoveis->tamanho) ? $tab_imoveis->tamanho: "";
      $txtarea_mensagemImovel = isset($tab_imoveis->mensagemImovel) ? $tab_imoveis->mensagemImovel: "";
      $txt_numSuites          = isset($tab_imoveis->num_suites) ? $tab_imoveis->num_suites: "";
      $txt_numVagas           = isset($tab_imoveis->num_vagas) ? $tab_imoveis->num_vagas: "";
      $txt_numQuartos         = isset($tab_imoveis->num_quartos) ? $tab_imoveis->num_quartos: "";
      $txtComplemento         = isset($tab_imoveis->complemento) ? $tab_imoveis->complemento: "";
      $txt_areaTerrea         = isset($tab_imoveis->areaTerrea) ? $tab_imoveis->areaTerrea: "";
      $txt_numBanheiro        = isset($tab_imoveis->num_banheiro) ? $tab_imoveis->num_banheiro: ""; 
      $txt_imovelMobilia      = isset($tab_imoveis->imovelMobilia) ? $tab_imoveis->imovelMobilia: ""; 
      $txt_intImvlMobilia     = isset($tab_imoveis->intImvlMobilia) ? $tab_imoveis->intImvlMobilia: ""; 
      $txt_intTipoImovel      = isset($tab_imoveis->intTipoImovel) ? $tab_imoveis->intTipoImovel: ""; 
      $txt_intMunicipios      = isset($tab_imoveis->intMunicipios) ? $tab_imoveis->intMunicipios: ""; 
      $txt_intEstados         = isset($tab_imoveis->intEstados) ? $tab_imoveis->intEstados: "";                
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

      
    <title>Só Permuta</title>
    

  </head>
  <body>
  <div class="container testo_ #fff3e0 orange lighten-5 mx-md-n5 shadow p-3">
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
   <?php echo form_open_multipart('CadastrarImovel/atualizar');?>
    <a class="btn btn-blue-grey btn-rounded"><i class="far fa-clone left"></i> Descrição do Imóvel</a>
                    
      
              <div class="form-group pt-3">
                <label for="nomeImovel">Nome do imóvel</label>
                <input type="text" class="form-control"
              name="txt_nomeImovel" placeholder="Dé um um título com detalhes do imóvel resumido" id="txt_nomeImovel"  value="<?php echo $txt_nomeImovel ?>" />
              <input type="hidden" id="txt_imoveis_id" name="txt_imoveis_id" value="<?php echo $txt_imoveis_id;?>">
              </div>

              <div class="for-group">
                <label for="txt_descricaoImovel">Descrição do imóvel</label>
                <textarea type="txt" id="txt_descricaoImovel" name="txt_descricaoImovel" 
                  value="<?php echo set_value("txt_descricaoImovel");?>" rows="3" class="form-control"><?php echo("$txt_descricaoImovel");?></textarea>
              </div>
              <br>
               <span>Localização do imóvel</span>
              <div class="form-row">
                <div class="col-md-3">
                    <label>Cep:</label><p>
                    <input name="txtCep" type="text" id="txtCep" value="<?php echo $txtCep ?>"
                               class="form-control" onblur="pesquisacep(this.value);"/>
                </div>
                <div class="col-md-5">
                  <label>Endereço:</label>
                  <input name="txtRua" type="text" id="txtRua" class="form-control" value="<?php echo $txtRua ?>" />
                </div>

                <div class="col-md-4">
                      <label>Bairro:</label>
                      <input name="txtBairro" type="text" id="txtBairro" class="form-control" 
                      value="<?php echo $txtBairro ?>" />
                </div>
                </div>
             <div class="form-row">
                <div class="form-group col-md-2">
                     <label>Estado:</label><p>
                     <input name="txtEstado" type="text" id="txtEstado" class="form-control" 
                     value="<?php echo $txtEstado ?>" />
                </div>                
                <div class="col-md-4">
                  <label>Cidade:</label>
                  <input name="txtCidade" type="text" id="txtCidade" class="form-control" 
                  value="<?php echo $txtCidade ?>" />
                </div>
                <div class="col-md-2">
                  <label>Numero:</label>
                  <input name="txtNumero" type="text" id="txtNumero" class="form-control" 
                  value="<?php echo $txtNumero ?>">
                </div>
                <div class="col-md-2">
                  <label>Complemento:</label>
                  <input name="txtComplemento" type="text" id="txtComplemento" class="form-control"maxlength="6" value="<?php echo $txtComplemento ?>" >
                </div>


               <div class="col-md-2">
                  <input type="hidden" name="txt_usuario_id" class="form-control" id="cad_pessoa_id"
                  value="<?php echo $txt_usuario_id ?>"/>
                </div>
                <p>Localização do Google Mapa</p>

       </div>


      <center><a class="btn btn-blue-grey btn-rounded left" data-toggle="collapse" data-target="#mostrar">
        <i class="far fa-eye"></i>&nbsp;&nbsp;Caracteristicas do Imóvel</a></center>       
             <br>
             <div class="form-row collapse" id="mostrar">
              <div class="form-group col-md-3">
                <label for="tipoImovel">Tipo de Imovel</label>
                <select class="form-control" name="txt_tipoImovel">
               <option value="<?php echo $txt_tipoImovel?>" selected><?php echo $txt_tipoImovel?></option>
            <?php 
              foreach($tipoimovel as $row)
              { 
                echo '<option value="'.$row->descricao.'">'.$row->descricao.'</option>';
              }
              ?>
            </select>
              </div>
             
              <div class="form-group col-md-3">
                <label for="apelidoImovel">Apelido do Imovel</label>
                <select id="apelidoImovel" class="form-control" name="txt_apelidoImovel">
                  <option value="<?php echo $txt_apelidoImovel?>" selected><?php echo $txt_apelidoImovel?></option>  
                 <?php 
                    foreach($apelidoimovel as $linha)
                    { 
                      echo '<option value="'.$linha->descricao.'">'.$linha->descricao.'</option>';
                    }
                    ?>
                </select>
              </div>
            </div>
              <h4 class="pt-2"><i class="far fa-sticky-note"></i>&nbsp;Detalhes do imóvel</h4><br>
             <div class="for-group collapse" id="mostrar"  >
             <div class="form-check form-check-inline">
                <?php if($txt_tvCabo == "tvCabo"){?>
                           <input class="form-check-input" type="checkbox" id="txt_tvCabo" value="tvCabo" name="txt_tvCabo" checked>
                          <?php }elseif($txt_tvCabo== NULL){?>
                      <input class="form-check-input" type="checkbox" id="txt_tvCabo" value="tvCabo" name="txt_tvCabo">
            <?php }?>
                <label class="form-check-label" for="tvCabo"> Tv a cabo</label>
              </div>&nbsp;&nbsp;&nbsp;&nbsp;
              <div class="form-check form-check-inline">
                <?php if($txt_piscina == "piscina"){?>
                           <input class="form-check-input" type="checkbox" id="txt_piscina" value="piscina" name="txt_piscina" checked>
                          <?php }elseif($txt_piscina== NULL){?>
                      <input class="form-check-input" type="checkbox" id="txt_piscina" value="piscina" name="txt_piscina">
            <?php }?>
                <label class="form-check-label" for="piscina">Piscina</label>
              </div>&nbsp;&nbsp;&nbsp;&nbsp;

              <div class="form-check form-check-inline">
                 <?php if($txt_wifi == "wifi"){?>
                           <input class="form-check-input" type="checkbox" id="txt_tvCabo" value="wifi" name="txt_wifi" checked>
                          <?php }elseif($txt_wifi== NULL){?>
                      <input class="form-check-input" type="checkbox" id="txt_tvCabo" value="wifi" name="txt_wifi">
            <?php }?>
                <label class="form-check-label" for="wifi">Wifi</label>
              </div>&nbsp;&nbsp;&nbsp;&nbsp;
              <div class="form-check form-check-inline">
                <?php if(($txt_vaga == "vaga")){?>
                           <input class="form-check-input" type="checkbox" id="txt_vaga" value="vaga" name="txt_vaga" checked>
                          <?php }elseif($txt_vaga== NULL){?>
                      <input class="form-check-input" type="checkbox" id="txt_vaga" value="vaga" name="txt_vaga">
            <?php }?>
                <label class="form-check-label" for="vaga">Vaga</label>
              </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

              <div class="form-check form-check-inline">

                <?php if($txt_academia == "academia"){?>
                           <input class="form-check-input" type="checkbox" id="txt_academia" value="academia" 
                name="txt_academia" checked>
                          <?php }elseif($txt_academia== NULL){?>
                       <input class="form-check-input" type="checkbox" id="txt_academia" value="academia" 
                name="txt_academia">
            <?php }?>               
                <label class="form-check-label" for="academia">Academia</label>
              </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <div class="form-check form-check-inline">
                    <?php if($txt_arCondicionado == "arCondionado"){?>
                           <input class="form-check-input" type="checkbox" id="txt_arCondicionado" value="arCondionado" 
                name="txt_arCondicionado" checked>
                          <?php }elseif($txt_arCondicionado== NULL){?>
                      <input class="form-check-input" type="checkbox" id="txt_arCondicionado" value="arCondionado"
                name="txt_arCondicionado">
            <?php }?>
                     <label class="form-check-label" for="arCondicionado">Ar condicionado</label>
             &nbsp;&nbsp;&nbsp;
              <div class="form-check form-check-inline">
                  <?php if($txt_suite == "suite"){?>
                           <input class="form-check-input" type="checkbox" id="txt_suite" value="suite" 
                name="txt_suite" checked>
                          <?php }elseif($txt_suite== NULL){?>
                      <input class="form-check-input" type="checkbox" id="txt_suite" value="suite"
                name="txt_suite">
            <?php }?>
                <label class="form-check-label" for="suite">Suite</label>
              </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <div class="form-check form-check-inline">
                  <?php if($txt_churrasqueira == "churrasqueira"){?>
                           <input class="form-check-input" type="checkbox" id="txt_churrasqueira" value="churrasqueira" 
                name="txt_churrasqueira" checked>
                          <?php }elseif($txt_churrasqueira== NULL){?>
                      <input class="form-check-input" type="checkbox" id="txt_churrasqueira" value="churrasqueira"
                name="txt_churrasqueira">
            <?php }?>
                <label class="form-check-label" for="churrasqueira">Churrasqueira</label>
              </div>
            </div>
              <br>
              <br>

                <div class="col-md-4">
                   <label for="txt_imovelMobilia" >Imóvel:</label>                                         
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" class="form-check-input" name="txt_imovelMobilia" 
                            id="txt_imovelMobilia" value="nmobiliado" <?php echo empty($txt_imovelMobilia) || (!empty($txt_imovelMobilia) && ($txt_imovelMobilia == 'nmobiliado'))?'checked="checked"':''; ?>>
                   Não Mobiliado</input>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <input type="radio" class="form-check-input" name="txt_imovelMobilia" id="txt_imovelMobilia" 
                   value="mobiliado" <?php echo empty($txt_imovelMobilia) || (!empty($txt_imovelMobilia) && ($txt_imovelMobilia == 'mobiliado'))?'checked="checked"':''; ?>>
                    Mobiliado</input> </div><br> 
              <div class="form-row">
                <div class="col-md-2">
                    <label>Terreno (m2):</label><p>
                    <input name="txt_tamanho" type="text" id="tamanho" value="<?php echo $txt_tamanho ?>"
                    class="form-control" name="txt_tamanho" placeholder ="Tamanho total">
                </div>
                <div class="col-md-2">
                  <label>Área construida (m2):</label>
                  <input name="txt_areaTerrea" type="text" id="areaTerrea" class="form-control" 
                  value="<?php echo $txt_areaTerrea ?>" placeholder ="Área total">
                </div>

                <div class="col-md-2">
                      <label>Quartos:</label>
                     <select id="num_quartos" name="txt_numQuartos" class="form-control">
                       <option value="<?php echo $txt_numQuartos?>" selected><?php echo $txt_numQuartos?></option>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5 ou mais" <?php echo set_select('txt_numQuartos', '5 ou mais'); ?> >5 ou mais</option>               
                      </select>
                </div>
               <div class="col-md-2">
                     <label>Banheiros:</label>
                      <select id="numBanheiro" name="txt_numBanheiro" class="form-control">
                          <option value="<?php echo $txt_numBanheiro?>" selected><?php echo $txt_numBanheiro?></option>
                         <option value="0">0</option>
                          <option value="1">1</option>
                           <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                           <option value="5 ou mais" <?php echo set_select('txt_numBanheiro', '5 ou mais'); ?> >5 ou mais</option>
                      </select>
                </div>         
            
         
              <div class="col-md-2">
                    <label>Num Suíte:</label><p>
                        <select id="numSuite" name="txt_numSuites" class="form-control">                   
                        <option value="<?php echo $txt_numSuites?>" selected><?php echo $txt_numSuites?></option>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5 ou mais" <?php echo set_select('txt_numSuites', '5 ou mais'); ?> >5 ou mais</option>
                      </select>
                </div>
                <div class="col-md-2">
                    <label>Vagas:</label><p>
                    <select id="numVagas" name="txt_numVagas" class="form-control">
                     <option value="<?php echo $txt_numVagas?>" selected><?php echo $txt_numVagas?></option>
                      <option value="0">0</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5 ou mais" <?php echo set_select('txt_numVagas', '5 ou mais'); ?> >5 ou mais</option>
                    </select>
                </div>
             </div>
              </div>          

             <br>           

               <p><h4><i class="far fa-heart"></i>&nbsp;&nbsp;Meus interesses</h4></p>
        <div class="form-row collapse" id="mostrar" > 
            <div class="col-md-3">
              <label for="txt_intEstados">UF:</label>
                <select class="form-control" name="txt_intEstados" id="estados">
                   <option value="<?php echo $txt_intEstados?>" <?php echo set_select('txt_intEstados', 'txt_intEstados'); ?> selected><?php switch($txt_intEstados){
                    case 1:
                    echo "Acre";
                    break;
                    case 2:
                    echo "Alogoas";
                    break;
                    case 3:
                    echo "Amapá";
                    break;
                    case 4:
                    echo "Amazonas";
                    break;
                    case 5:
                    echo "Bahia";
                    break;
                    case 6:
                    echo "Ceará";
                    break;
                    case 7:
                    echo "Destrito Federal";
                    break;
                    case 8:
                    echo "Espírito Santo";
                    break;
                    case 9:
                    echo "Góias";
                    break;
                    case 10:
                    echo "Maranhão";
                    break;
                    case 11:
                    echo "Mato Grosso";
                    break;
                    case 12:
                    echo "Mato Grosso do Sul";
                    break;
                    case 13:
                    echo "Minas Gerais";
                    break;
                    case 14:
                    echo "Pará";
                    break;
                    case 15:
                    echo "Paraíba";
                    break;
                    case 16:
                    echo "Paraná";
                    break;
                    case 17:
                    echo "Pernambuco";
                    break;
                    case 18:
                    echo "Piaui";
                    break;
                    case 19:
                    echo "Rio de Janeiro";
                    break;
                    case 20:
                    echo "Rio Grande do Norte";
                    break;
                    case 21:
                    echo "Rio Grande do Sul";
                    break;
                    case 22:
                    echo "Rondônia";
                    break;
                    case 23:
                    echo "Roraima";
                    break;
                    case 24:
                    echo "Santa Catarina";
                    break;
                    case 25:
                    echo "São Paulo";
                    break;
                      case 26:
                    echo "Sergipe";
                    break;
                    case 27:
                    echo "Tocantins";
                    break;
                      }
                   ?>                

                   </option>
                  <?php echo $option_estados; ?>
                </select>
              </div>
            
                    <div class="col-md-3">
                      <label for="municipios">Municipio:</label>
                      <select class="form-control" name="txt_intMunicipios" id="municipios">
                        <option><?php echo $txt_intMunicipios; ?></option>
                      </select>
                    </div>
        

            <div class="col-md-3">
                <label for="txt_intTipoImovel">Tipo de Imóvel:</label>
                <select class="form-control" name="txt_intTipoImovel" id="txt_intTipoImovel">
                  <option value="<?php echo $txt_intTipoImovel?>" selected><?php echo $txt_intTipoImovel?></option>
                    <?php foreach($tipoimovel as $row)
                      { 
                        echo '<option value="'.$row->descricao.'">'.$row->descricao.'</option>';
                      } ?>                       
            </select>
            </div>
            <div class="col-md-3">
                   <label for="txt_intImvlMobilia" >Imóvel:</label><br>                              
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" class="form-check-input" 
                            name="txt_intImvlMobilia" 
                            id="nmobiliado" value="nmobiliado" <?php echo empty($txt_intImvlMobilia) || (!empty($txt_intImvlMobilia) && ($txt_intImvlMobilia == 'nmobiliado'))?'checked="checked"':''; ?>>
                   Não Mobiliado</input>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <input type="radio" class="form-check-input" name="txt_intImvlMobilia" id="mobiliado" 
                   value="mobiliado" <?php echo empty($txt_intImvlMobilia) || (!empty($txt_intImvlMobilia) && ($txt_intImvlMobilia == 'mobiliado'))?'checked="checked"':''; ?>>
                    Mobiliado</input>                 
            </div>
        </div>
        <br> 



        <div class="form-group" id="mostrar">
                <span><h4>Nota privada</h4>
              Crie uma nota particular para esta propriedade, ela não será exibida ao público<span>
                <br />
            
              <label for="exampleFormControlTextarea3">Deixar mensagem para o administrador</label>
                <textarea type="txt" id="txtarea_mensagemImovel" name="txtarea_mensagemImovel" 
                  value="<?php echo set_value("txtarea_mensagemImovel");?>" rows="3" class="form-control"><?php echo("$txtarea_mensagemImovel");?></textarea>
        </div>
            
      
      <button type="submit" value = "atualizar" class="btn btn-mdb-color mt-3" name="bt_atualizar">Atualizar </button>
      <button type="reset" class="btn btn-mdb-color mt-3">Limpar</button>
        

        <?php echo form_close(); ?>

          <?php if(! empty($txt_imoveis_id)) {?>

          <div class="card mt-4" style="'show': 'none'">
            <div class="card-header">
                  Imagem do imóvel
             </div>
             <div class="card-body">
             <form action="CadastrarImovel/upload" class="dropzone" id="dropzoneFrom">
                <input type="hidden" id="txt_usuario_id" name="txt_usuario_id" value="<?php echo $txt_usuario_id;?>">
                <input type="hidden" id="txt_imoveis_id" name="txt_imoveis_id" value="<?php echo $txt_imoveis_id;?>">
                 <div class="dz-message">
                <h3>Solte um arquivo aqui</h3> ou <strong>click</strong> para fazer o upload
              </div>
             </form>        
            
           </form>
           <br />
                 
           <br />
           <div id="preview"></div>
           

       <?php }else{?>

                 <center><a class="btn btn-warning btn-rounded " data-toggle="modal" data-target="#btModal">
                  <i class="fas fa-cloud-upload-alt"></i>&nbsp;&nbsp;&nbsp;Upload de imagens</a></center><br>

          <!-- Modal -->
          <div class="modal fade" id="btModal" tabindex="-1" role="dialog" aria-labelledby="caixaModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="caixaModal">Cadastro não finalizado</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Para adicionar as fotos será necessário finalizar(salvar) o cadastro. Lembrando: adicione até 10 imagens </p>
                 São permitidas imagens no formato JPG, JPEG, PNG ou GIF. Largura mínima 620px e peso máximo de 10MB.
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-mdb-color" data-dismiss="modal">Ok</button>
                 
                </div>
              </div>
            </div>
          </div>

       <?php } ?>
       

          <div class="row">
            <div class="col-sm-12">
              <center><h3>Imagens salvas</h3></center><br>
              <ul class="nav nav-tabs">
                  <?php if(!empty($files)){ foreach($files as $file){ ?>
                  <li class="nav-item p-1">
                      <img src="<?php echo base_url('upload/imoveis/'.$file['file_name']); ?>" style="width:200px" ><br>
                       <center><a href="javascript:void(0);" class="badge badge-danger" onclick="deleteImage('<?php echo $file['id']; ?>')">Excluir</a>
                      <p>Uploaded On <?php echo date("j M Y",strtotime($file['uploaded_on'])); ?></p>

                    </center>
                  </li>
                  <?php } }else{ ?>
                  <p>Imagen (s) não encontradas...</p>
                  <?php } ?>
              </ul>

            </div>    
          </div>




     </div>

    </div>


  <!-- Dropzone do upload das imagens do imovel-->
<script>

$(document).ready(function(){
 
 Dropzone.options.dropzoneFrom = {
  autoProcessQueue: false,
  acceptedFiles:".png,.jpg,.gif,.jpeg",
  init: function(){
   var submitButton = document.querySelector('#submit-all');
   myDropzone = this;
   submitButton.addEventListener("click", function(){
    myDropzone.processQueue();
   });
   this.on("complete", function(){
    if(this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0)
    {
     var _this = this;
     _this.removeAllFiles();
    }
    list_image();
   });
  },
 };

 list_image();

 function list_image()
 {
  $.ajax({
   url:"CadastrarImovel/list_files",
   success:function(data){
    $('#preview').html(data);
   }
  });
 }

 $(document).on('click', '.remove_image', function(){
  var name = $(this).attr('id');
  $.ajax({
   url:"#",
   method:"POST",
   data:{name:name},
   success:function(data)
   {
    list_image();
   }
  })
 });
 
});
</script>

<script>
function deleteImage(id){
    var result = confirm("Confirma a exclusão da imagem?");
    if(result){
        $.post( "<?php echo base_url('CadastrarImovel/deleteImage'); ?>", {id:id}, function(resp) {
            if(resp == 'ok'){
                $('#imgb_'+id).remove();
                alert('Imagem excluida com sucesso');
            }else{
                alert('Imagem não excluida, tente de novo.');
            }
        });
    }
}
</script>


   <script>
    $(".custom-file-input").on("change", function() {
      var fileName = $(this).val().split("\\").pop();
      $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>

<script>
function myFunction() {
  var elmnt = document.getElementById("p1");
  elmnt.remove();
}
</script>


<script >


 function limpa_formulário_cep(alerta) {
  if (alerta !== undefined) {
    alert(alerta);
  }
}

$(document).ready(function(){
    $("#txtCep").focusout(function(){
            var cep = $("#txtCep").val();
            cep = cep.replace("-", "");
 
            var urlStr = "https://viacep.com.br/ws/"+ cep +"/json/";
         
            $.ajax({
                url : urlStr,
                type : "get",
                dataType : "json",
                success : function(data){
                    console.log(data);
                     
                    $("#txtCidade").val(data.localidade);
                    $("#txtEstado").val(data.uf);
                    $("#txtBairro").val(data.bairro);
                    $("#txtRua").val(data.logradouro);
                    $("#txtComplemento").val(data.complemento);
                },
                error : function(erro){
          
    limpa_formulário_cep(cep == "" ? undefined : "Formato de CEP inválido.");
                }
            });
    });
});

  $("#txtCep").mask("00000-000");

</script>

<script type="text/javascript">
$(function(){
  $("#estados").change(function(){
    $("#municipios").attr("disabled", "disabled");
      $("#municipios").html('<option>carregando...</option>');
    var id_estado = $("#estados").val();
     $.post("<?php echo base_url('CadastrarImovel/getMunicipio'); ?>", {
      id_estado : id_estado
     }, function(data){
      $("#municipios").html(data);
      $("#municipios").removeAttr("disabled");
     });
  }); 
} );
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
  </div>
  </body>
</html>
<?php $this->load->view('v_footer'); ?>