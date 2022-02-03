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
      $txt_intTipoImovel     = isset($tab_imoveis->intTipoImovel) ? $tab_imoveis->intTipoImovel: ""; 
      $txt_intMunicipios     = isset($tab_imoveis->intMunicipios) ? $tab_imoveis->intMunicipios: ""; 
      $txt_intEstados     = isset($tab_imoveis->intEstados) ? $tab_imoveis->intEstados: ""; 
      $Lat     = isset($tab_imoveis->Lat) ? $tab_imoveis->Lat: "";
      $Long     = isset($tab_imoveis->Long) ? $tab_imoveis->Long: "";
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
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-ui.min.js"></script>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
      
    <title>Só Permuta</title>

  </head>
  <body>
  <div class="container testo_ #FAFAFA lighten-5 mx-md-n5 shadow p-3">
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


   <?php echo form_open_multipart('CadastrarImovel/salvar');?>
    <a class="btn btn-blue-grey btn-rounded"><i class="far fa-clone left"></i> Descrição do Imóvel</a>
                    
      
              <div class="form-group pt-3">
                <label for="nomeImovel">Nome do imóvel</label>
                <input type="text" class="form-control"
              name="txt_nomeImovel" placeholder="Dé um um título com detalhes do imóvel resumido" id="txt_nomeImovel"  value="<?php if(!empty($txt_imoveis_id)){ echo($txt_nomeImovel);}else{echo set_value("txt_nomeImovel");}?>"/>

              <input type="hidden" id="txt_imoveis_id" name="txt_imoveis_id" value="<?php echo $txt_imoveis_id;?>">
              </div>

              <div class="for-group">
                <label for="txt_descricaoImovel">Descrição do imóvel</label>
               <?php if(empty($txt_imoveis_id)) {?>
                  <textarea type="txt" id="txt_descricaoImovel" name="txt_descricaoImovel" 
                  value="<?php echo set_value("txt_descricaoImovel");?>" rows="3" class="form-control"><?php echo set_value("txt_descricaoImovel");?></textarea>
                <?php }else{ ?>
                      
                        <textarea type="txt" id="txt_descricaoImovel" name="txt_descricaoImovel" 
                  value="<?php echo set_value("txt_descricaoImovel");?>" rows="3" class="form-control"><?php echo("$txt_descricaoImovel");?></textarea>

              <?php } ?>
              </div>
              <br>
               <span>Localização do imóvel</span>
              <div class="form-row">
                <div class="col-md-3">
                    <label>Cep:</label><p>
                    <input name="txtCep" type="text" id="txtCep" value="<?php if(!empty($txt_imoveis_id)){ echo($txtCep);}else{echo set_value("txtCep");}?>"
                               class="form-control" onblur="pesquisacep(this.value);" />
                </div>
                <div class="col-md-5">
                  <label>Endereço:</label>
                  <input name="txtRua" type="text" id="txtRua" class="form-control" value="<?php if(!empty($txt_imoveis_id)){ echo($txtRua);}else{echo set_value("txtRua");}?>" />

                </div>

                <div class="col-md-4">
                      <label>Bairro:</label>
                      <input name="txtBairro" type="text" id="txtBairro" class="form-control" 
                      value="<?php if(!empty($txt_imoveis_id)){ echo($txtBairro);}else{echo set_value("txtBairro");}?>"/>

                </div>
                </div>

             <div class="form-row">
                <div class="form-group col-md-2">
                     <label>Estado:</label><p>
                     <input name="txtEstado" type="text" id="txtEstado" class="form-control" 
                     value="<?php if(!empty($txt_imoveis_id)){ echo($txtEstado);}else{echo set_value("txtEstado");}?>"/>

                </div>                
                <div class="col-md-4">
                  <label>Cidade:</label>
                  <input name="txtCidade" type="text" id="txtCidade" class="form-control" 
                  value="<?php if(!empty($txt_imoveis_id)){ echo($txtCidade);}else{echo set_value("txtCidade");}?>" />

                </div>
                <div class="col-md-2">
                  <label>Numero:</label>
                  <input name="txtNumero" type="text" id="txtNumero" class="form-control" 
                  value="<?php if(!empty($txt_imoveis_id)){ echo($txtNumero);}else{echo set_value("txtNumero");}?>">

                </div>
                <div class="col-md-2">
                  <label>Complemento:</label>
                  <input name="txtComplemento" type="text" id="txtComplemento" class="form-control"maxlength="6" value="<?php if(!empty($txt_imoveis_id)){ echo($txtComplemento);}else{echo set_value("txtComplemento");}?>" >

                </div>
               <div class="col-md-2">
                  <input type="hidden" name="txt_usuario_id" class="form-control" id="txt_usuario_id"
                  value="<?php echo $txt_usuario_id ?>"/>
                </div>
              

       </div>


      <p><a class="btn btn-blue-grey btn-rounded left" data-toggle="collapse" data-target="#mostrar">
        <i class="far fa-eye"></i>&nbsp;&nbsp;Caracteristicas do Imóvel</a></p>
           
             <div class="form-row collapse" id="mostrar">
              <div class="form-group col-md-3">
                <label for="tipoImovel">Tipo de Imóvel</label>
                <select class="form-control" name="txt_tipoImovel">   
                <option>Selecione o tipo de Imóvel</option>             
            <?php if(empty($txt_imoveis_id)) {?>
              <option value= "txt_tipoImovel" <?php echo set_select('txt_tipoImovel', 'txt_tipoImovel'); ?>></option>
               <?php foreach($tipoimovel as $row)
              { 
                echo '<option value="'.$row->descricao.'">'.$row->descricao.'</option>';
              }

              }else{?>
                  <option value="<?php $txt_tipoImovel?>" selected><?php echo $txt_tipoImovel?></option>
                    <?php   foreach($tipoimovel as $row)
                      { 
                        echo '<option value="'.$row->descricao.'">'.$row->descricao.'</option>';
                      }
                 
               } ?>
            </select>
              </div>
             
              <div class="form-group col-md-3">
                <label for="apelidoImovel">Apelido do Imovel</label>
                <select id="apelidoImovel" class="form-control" name="txt_apelidoImovel">
                  <option>Selecione</option>
                   <?php if(empty($txt_imoveis_id)) { ?>
                   <option value= "txt_apelidoImovel" <?php echo set_select('txt_apelidoImovel', 'txt_apelidoImovel'); ?>></option>               
                    <?php  foreach($apelidoimovel as $linha)
                    { 
                      echo '<option value="'.$linha->descricao.'">'.$linha->descricao.'</option>';
                    }
                     }else{?>
                      <option value="<?php $txt_apelidoImovel?>" selected><?php echo $txt_apelidoImovel?></option>
                     <?php  foreach($apelidoimovel as $linha)
                    { 
                      echo '<option value="'.$linha->descricao.'">'.$linha->descricao.'</option>';
                    }

                    }
                    ?>
                </select>
              </div>
            </div>
             <h4 class="pt-2"><i class="far fa-sticky-note"></i>&nbsp;Detalhes do imóvel</h4><br>
             <div class=" for-group collapse" id="mostrar"  >
             <div class="form-check form-check-inline">
                <?php if($txt_tvCabo == "tvCabo"){?>
                           <input class="form-check-input" type="checkbox" id="txt_tvCabo" value="tvCabo" name="txt_tvCabo" checked>
                          <?php }elseif($txt_tvCabo== NULL){?>
                      <input class="form-check-input" type="checkbox" id="txt_tvCabo" value="tvCabo" 
                      <?php echo set_checkbox('txt_tvCabo', 'tvCabo'); ?>  name="txt_tvCabo">
            <?php }?>
                <label class="form-check-label" for="tvCabo"> Tv a cabo</label>
              </div>&nbsp;&nbsp;&nbsp;&nbsp;
              <div class="form-check form-check-inline">
                <?php if($txt_piscina == "piscina"){?>
                           <input class="form-check-input" type="checkbox" id="txt_piscina" value="piscina" name="txt_piscina" checked>
                          <?php }elseif($txt_piscina== NULL){?>
                      <input class="form-check-input" type="checkbox" id="txt_piscina" value="piscina" <?php echo set_checkbox('txt_piscina', 'piscina'); ?> name="txt_piscina">
            <?php }?>
                <label class="form-check-label" for="piscina">Piscina</label>
              </div>&nbsp;&nbsp;&nbsp;&nbsp;

              <div class="form-check form-check-inline">
                 <?php if($txt_wifi == "wifi"){?>
                           <input class="form-check-input" type="checkbox" id="wifi" value="wifi" name="txt_wifi" checked>
                          <?php }elseif($txt_wifi== NULL){?>
                      <input class="form-check-input" type="checkbox" id="wifi" value="wifi" 
                      <?php echo set_checkbox('txt_wifi', 'wifi'); ?> name="txt_wifi">
            <?php }?>
                <label class="form-check-label" for="wifi">Wifi</label>
              </div>&nbsp;&nbsp;&nbsp;&nbsp;
              <div class="form-check form-check-inline">
                <?php if(($txt_vaga == "vaga")){?>
                           <input class="form-check-input" type="checkbox" id="txt_vaga" value="vaga" name="txt_vaga" checked>
                          <?php }elseif($txt_vaga== NULL){?>
                      <input class="form-check-input" type="checkbox" id="txt_vaga" value="vaga" <?php echo set_checkbox('txt_vaga', 'vaga'); ?> name="txt_vaga">
            <?php }?>
                <label class="form-check-label" for="vaga">Vaga</label>
              </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

              <div class="form-check form-check-inline">

                <?php if($txt_academia == "academia"){?>
                           <input class="form-check-input" type="checkbox" id="txt_academia" value="academia" 
                name="txt_academia" checked>
                          <?php }elseif($txt_academia== NULL){?>
                       <input class="form-check-input" type="checkbox" id="txt_academia" value="academia" 
                 <?php echo set_checkbox('txt_academia', 'academia'); ?> name="txt_academia">
            <?php }?>               
                <label class="form-check-label" for="academia">Academia</label>
              </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <div class="form-check form-check-inline">
                    <?php if($txt_arCondicionado == "arCondionado"){?>
                           <input class="form-check-input" type="checkbox" id="txt_arCondicionado" value="arCondionado" 
                name="txt_arCondicionado" checked>
                          <?php }elseif($txt_arCondicionado== NULL){?>
                      <input class="form-check-input" type="checkbox" id="txt_arCondicionado" value="arCondionado"
                <?php echo set_checkbox('txt_arCondicionado', 'arCondionado'); ?> name="txt_arCondicionado">
            <?php }?>
                     <label class="form-check-label" for="arCondicionado">Ar condicionado</label>
              </div>&nbsp;&nbsp;
              <div class="form-check form-check-inline">
                  <?php if($txt_suite == "suite"){?>
                           <input class="form-check-input" type="checkbox" id="txt_suite" value="suite" 
                name="txt_suite" checked>
                          <?php }elseif($txt_suite== NULL){?>
                      <input class="form-check-input" type="checkbox" id="txt_suite" value="suite"
                <?php echo set_checkbox('txt_suite', 'suite'); ?>  name="txt_suite">
            <?php }?>
                <label class="form-check-label" for="suite">Suite</label>
              </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <div class="form-check form-check-inline">
                  <?php if($txt_churrasqueira == "churrasqueira"){?>
                           <input class="form-check-input" type="checkbox" id="txt_churrasqueira" value="churrasqueira" 
                name="txt_churrasqueira" checked>
                          <?php }elseif($txt_churrasqueira== NULL){?>
                      <input class="form-check-input" type="checkbox" id="txt_churrasqueira" value="churrasqueira"
                <?php echo set_checkbox('txt_churrasqueira', 'churrasqueira'); ?> name="txt_churrasqueira">
            <?php }?>
                <label class="form-check-label" for="churrasqueira">Churrasqueira</label>
              </div>
              <br>
         
                <div class="col-md-4">
                   <label for="txt_imovelMobilia" >Imóvel:</label>
                  <?php if(!empty($txt_imoveis_id)) {?>                              
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" class="form-check-input" name="txt_imovelMobilia" 
                            id="txt_imovelMobilia" value="nmobiliado" <?php echo empty($txt_imovelMobilia) || (!empty($txt_imovelMobilia) && ($txt_imovelMobilia == 'nmobiliado'))?'checked="checked"':''; ?>>
                   Não Mobiliado</input>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <input type="radio" class="form-check-input" name="txt_imovelMobilia" id="txt_imovelMobilia" 
                   value="mobiliado" <?php echo empty($txt_imovelMobilia) || (!empty($txt_imovelMobilia) && ($txt_imovelMobilia == 'mobiliado'))?'checked="checked"':''; ?>>
                    Mobiliado</input>                 
                    <?php }else{ ?>  
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <input type="radio" class="form-check-input" name="txt_imovelMobilia" id="txt_imovelMobilia" value="nmobiliado" <?php echo  set_radio('txt_imovelMobilia', 'nmobiliado'); ?>>
                   Não Mobiliado</input>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <input type="radio" class="form-check-input" name="txt_imovelMobilia" id="txt_imovelMobilia" value="mobiliado"
                   <?php echo  set_radio('txt_imovelMobilia', 'mobiliado'); ?>>
                    Mobiliado</input>
                    <?php } ?>  
            </div>
              <div class="form-row">
                <div class="col-md-3">
                    <label>Tamanho (m2):</label><p>
                    <input name="txt_tamanho" type="text" id="tamanho" value="<?php if(!empty($txt_imoveis_id)){ echo($txt_tamanho);}else{echo set_value("txt_tamanho");}?>"
                    class="form-control" name="txt_tamanho" placeholder ="Tamanho total">

                </div>
                <div class="col-md-4">
                  <label>Área terreá (m2):</label>
                  <input name="txt_areaTerrea" type="text" id="areaTerrea" class="form-control" 
                  value="<?php if(!empty($txt_imoveis_id)){ echo($txt_areaTerrea);}else{echo set_value("txt_areaTerrea");}?>" placeholder ="Área total">

                </div>

                <div class="col-md-2">
                      <label>Num Quartos:</label>
                      <select id="num_quartos" name="txt_numQuartos" class="form-control">
                        <option >Selecione</option>
                         <?php if(empty($txt_imoveis_id))  {?>
                        <option value= "0" <?php echo set_select('txt_numQuartos', '0'); ?>>0</option>
                        <option value= "1" <?php echo set_select('txt_numQuartos', '1'); ?>>1</option>
                        <option value= "2" <?php echo set_select('txt_numQuartos', '2'); ?>>2</option>
                        <option value= "3" <?php echo set_select('txt_numQuartos', '3'); ?>>3</option>
                        <option value= "4" <?php echo set_select('txt_numQuartos', '4'); ?>>4</option>
                        <option value="5 ou mais" <?php echo set_select('txt_numQuartos', '5 ou mais'); ?>>5 ou mais</option>
                        <?php }else{ ?>
                                    <option value="<?php echo $txt_numQuartos?>" selected><?php echo $txt_numQuartos?></option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5 ou mais" <?php echo set_select('txt_numQuartos', '5 ou mais'); ?> >5 ou mais</option>

                          <?php } ?>
                       ?>
                      </select>
                  </div>
                <div class="form-group col-md-2">
                     <label>Banheiros:</label>
                      <select id="numBanheiro" name="txt_numBanheiro" class="form-control">
                        <option >Selecione</option>
                         <?php if(empty($txt_imoveis_id))  {?>
                        <option value= "0" <?php echo set_select('txt_numBanheiro', '0'); ?>>0</option>
                        <option value= "1" <?php echo set_select('txt_numBanheiro', '1'); ?>>1</option>
                        <option value= "2" <?php echo set_select('txt_numBanheiro', '2'); ?>>2</option>
                        <option value= "3" <?php echo set_select('txt_numBanheiro', '3'); ?>>3</option>
                        <option value= "4" <?php echo set_select('txt_numBanheiro', '4'); ?>>4</option>
                        <option value="5 ou mais" <?php echo set_select('txt_numBanheiro', '5 ou mais'); ?>>5 ou mais</option>
                        <?php }else{ ?>
                                    <option value="<?php echo $txt_numBanheiro?>" selected><?php echo $txt_numBanheiro?></option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5 ou mais" <?php echo set_select('txt_numBanheiro', '5 ou mais'); ?> >5 ou mais</option>

                          <?php } ?>
                       ?>
                      </select>

                </div>         
             </div>
             <div class="form-row">
              <div class="col-md-2">
                    <label>Num Suíte:</label>
                      <select id="numSuite" name="txt_numSuites" class="form-control">
                        <option >Selecione</option>
                        <?php if(empty($txt_imoveis_id))  {?>
                        <option value= "0" <?php echo set_select('txt_numSuites', '0'); ?>>0</option>
                        <option value= "1" <?php echo set_select('txt_numSuites', '1'); ?>>1</option>
                        <option value= "2" <?php echo set_select('txt_numSuites', '2'); ?>>2</option>
                        <option value= "3" <?php echo set_select('txt_numSuites', '3'); ?>>3</option>
                        <option value= "4" <?php echo set_select('txt_numSuites', '4'); ?>>4</option>
                        <option value="5 ou mais" <?php echo set_select('txt_numSuites', '5 ou mais'); ?>>5 ou mais</option>
                        <?php }else{ ?>
                                    <option value="<?php echo $txt_numSuites?>" selected><?php echo $txt_numSuites?></option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5 ou mais" <?php echo set_select('txt_numSuites', '5 ou mais'); ?> >5 ou mais</option>

                          <?php } ?>
                       ?>
                      </select>
                  
                </div>
                <div class="col-md-2">
                    <label for="numVagas">Vagas:</label>
                      <select id="numVagas" name="txt_numVagas" class="form-control">
                        <option >Selecione</option>
                       <?php if(empty($txt_imoveis_id))  {?>
                        <option value= "0" <?php echo set_select('txt_numVagas', '0'); ?>>0</option>
                        <option value= "1" <?php echo set_select('txt_numVagas', '1'); ?>>1</option>
                        <option value= "2" <?php echo set_select('txt_numVagas', '2'); ?>>2</option>
                        <option value= "3" <?php echo set_select('txt_numVagas', '3'); ?>>3</option>
                        <option value= "4" <?php echo set_select('txt_numVagas', '4'); ?>>4</option>
                        <option value="5 ou mais" <?php echo set_select('txt_numVagas', '5 ou mais'); ?>>5 ou mais</option>
                        <?php }else{ ?>
                                    <option value="<?php echo $txt_numVagas?>" selected><?php echo $txt_numVagas?></option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5 ou mais" <?php echo set_select('txt_numVagas', '5 ou mais'); ?> >5 ou mais</option>

                          <?php } ?>
                       ?>
                      </select>
                 </div>
                
             </div>  
              </div>          

             <br>           
         <p><h4><i class="far fa-heart"></i>&nbsp;&nbsp;Meus interesses</h4></p>
        <div class="form-row collapse" id="mostrar" >
            <?php if(!empty($txt_imoveis_id)) {?> 
            <div class="col-md-3">
              <label for="estados">UF:</label>
                <select class="form-control" name="txt_intEstados" id="estados">
                   <option value="<?php $txt_intEstados?>" selected><?php switch ($txt_intEstados){
                    case "AC":
                    echo "Acre";
                    break;
                    case "AL":
                    echo "Alogoas";
                    break;
                    case "AP":
                    echo "Amapá";
                    break;
                    case "AM":
                    echo "Amazonas";
                    break;
                    case "BA":
                    echo "Bahia";
                    break;
                    case "CE":
                    echo "Ceará";
                    break;
                    case "DF":
                    echo "Destrito Federal";
                    break;
                    case "ES":
                    echo "Espírito Santo";
                    break;
                    case "GO":
                    echo "Góias";
                    break;
                    case "MA":
                    echo "Maranhão";
                    break;
                    case "MT":
                    echo "Mato Grosso";
                    break;
                    case "MS":
                    echo "Mato Grosso do Sul";
                    break;
                    case "MG":
                    echo "Minas Gerais";
                    break;
                    case "PA":
                    echo "Pará";
                    break;
                    case "PB":
                    echo "Paraíba";
                    break;
                    case "PR":
                    echo "Paraná";
                    break;
                    case "PE":
                    echo "Pernambuco";
                    break;
                    case "PI":
                    echo "Piaui";
                    break;
                    case "RJ":
                    echo "Rio de Janeiro";
                    break;
                    case "RN":
                    echo "Rio Grande do Norte";
                    break;
                    case "RS":
                    echo "Rio Grande do Sul";
                    break;
                    case "RO":
                    echo "Rondônia";
                    break;
                    case "RR":
                    echo "Roraima";
                    break;
                    case "SC":
                    echo "Santa Catarina";
                    break;
                    case "SP":
                    echo "São Paulo";
                    break;
                      case "SE":
                    echo "Sergipe";
                    break;
                    case "TO":
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
                    <option value="<?php $txt_intMunicipios?>" selected><?php echo $txt_intMunicipios?></option>
                   <?php echo $txt_intMunicipios; ?>
                </select>
              </div>
            <?php }else{?>
                    <div class="col-md-3">
                    <label for="estados">UF:</label>
                      <select class="form-control" name="txt_intEstados" id="estados">
                        <?php echo $option_estados; ?>

                      </select>
                    </div>
                    <div class="col-md-3">
                      <label for="municipios">Municipio:</label>
                      <select class="form-control" name="txt_intMunicipios" id="municipios" disabled>
                        <option>Selecione</option>
                      </select>
                    </div>
            <?php }?>

            <div class="col-md-3">
                <label for="intImovel">Tipo de Imóvel:</label>
                <select class="form-control" name="txt_intTipoImovel" id="intImovel">
                  <option>Selecione</option>
                 <?php if(empty($txt_imoveis_id)) {?>
              <option value= "txt_intTipoImovel" <?php echo set_select('txt_intTipoImovel', 'txt_intTipoImovel'); ?>>
               <?php foreach($tipoimovel as $row)
              { 
                echo '<option value="'.$row->descricao.'">'.$row->descricao.'</option>';
              }

              }else{?>
                  <option value="<?php $txt_intTipoImovel?>" selected><?php echo $txt_intTipoImovel?></option>
                    <?php foreach($tipoimovel as $row)
                      { 
                        echo '<option value="'.$row->descricao.'">'.$row->descricao.'</option>';
                      }
                 
               } ?>
            </select>
            </div>
            <div class="col-md-3">
                   <label for="imovelMobilia" >Imóvel:</label><br>
                  <?php if(!empty($txt_imoveis_id)) {?>                              
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" class="form-check-input" name="txt_intImvlMobilia" 
                            id="nmobiliado" value="nmobiliado" <?php echo empty($txt_intImvlMobilia) || (!empty($txt_intImvlMobilia) && ($txt_intImvlMobilia == 'nmobiliado'))?'checked="checked"':''; ?>>
                   Não Mobiliado</input>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <input type="radio" class="form-check-input" name="txt_intImvlMobilia" id="mobiliado" 
                   value="mobiliado" <?php echo empty($txt_intImvlMobilia) || (!empty($txt_intImvlMobilia) && ($txt_intImvlMobilia == 'mobiliado'))?'checked="checked"':''; ?>>
                    Mobiliado</input>                 
                    <?php }else{ ?>  
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <input type="radio" class="form-check-input" name="txt_intImvlMobilia" id="nmobiliado" value="nmobiliado" <?php echo  set_radio('imovelMobilia', 'nmobiliado'); ?>>
                   Não Mobiliado</input>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <input type="radio" class="form-check-input" name="txt_intImvlMobilia" id="mobiliado" value="mobiliado"
                   <?php echo  set_radio('txt_intImvlMobilia', 'mobiliado'); ?>>
                    Mobiliado</input>
                    <?php } ?>  
            </div>
        </div>
        <br> 
        <div class="form-group pt-3" id="mostrar">
                <h4><i class="far fa-comment-dots"></i>&nbsp;Nota privada</h4>
            
                <br />            
              <label for="txtarea_mensagemImovel">Mensagem para admin</label>
                    <?php if(empty($txt_imoveis_id)) {?>
                  <p>Crie uma nota particular para esta propriedade, ela não será exibida ao público<p>
                  <textarea type="txt" id="txtarea_mensagemImovel" name="txtarea_mensagemImovel" 
                  value="<?php echo set_value("txtarea_mensagemImovel");?>" rows="3" class="form-control"><?php echo set_value("txtarea_mensagemImovel");?></textarea>
                <?php }else{ ?>
                      
                        <textarea type="txt" id="txtarea_mensagemImovel" name="txtarea_mensagemImovel" 
                  value="<?php echo set_value("txtarea_mensagemImovel");?>" rows="3" class="form-control"><?php echo("$txtarea_mensagemImovel");?></textarea>

              <?php } ?>
        </div>           
      
      <?php if(empty($txt_imoveis_id)){ ?>
        <button type="submit" value = "Salvar" class="btn btn-mdb-color mt-3" id="submit" name="bt_salvar">Salvar </button>
         <button type="reset" class="btn btn-mdb-color mt-3">Limpar</button>
     <?php }else{ ?>
            <center>
            <div class="alert alert-success" role="alert">Apload de imagens liberado, fazer o upload das imagens para começar a Permuta<br>
              Acessar >><a href="<?php echo base_url()?>Meu_Perfil" class = "none_line">
                     <b>MINHA ÁREA/Permuta</b></a>&nbsp;<<
            </div>
            </center>


     <?php } ?>         

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
           <div align="center">
              <a href="<?php echo base_url()?>Meu_Perfil" class = "none_line">
                     <button type="button" class="btn btn-mdb-color" id="submit-all">Acessar minha área</button></a>
           </div>
          
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

                <center><h3>Imagens salvas</h3></center>
               <ul class="nav nav-tabs">
                  <?php if(!empty($files)){ foreach($files as $file){ ?>
                  <li class="nav-item pt-5 pl-3">

                      <p><img src="<?php echo base_url('upload/imoveis/'.$file['file_name']); ?>" style="width:200px"></p><br>
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

<script> 
 $(document).ready(function(){  
      $('#submit').click(function(){  
           var nmobiliado = $('#nmobiliado').val();  
           var intImovel = $('#intImovel').val(); 
           var estados = $('#estados').val();  
           var municipios = $('#municipios').val();    
           if(txt_usuario_recebe_nome == '' || txt_mensagem == '' || txt_usuario_recebe_id == '' || txt_assunto == '')  
           {  
                $('#response').html('<span class="text-danger">Todos os campos devem ser preenchidos</span>');  
           }  
           else  
           {   
                $.ajax({  
                     url:"<?php echo site_url('CadastrarImovel/imovelInteresse'); ?>",

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
function getLatLong($txtRua,$region)
{
$txtRua = str_replace(" ", "+", $txtRua);
 
$json = file_get_contents("https://maps.google.com/maps/api/geocode/json?address=$address&sensor=false&region=$region");
$json = json_decode($json);
 
$lat = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lat'};
$long = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lng'};
 
return array('latitude'=>$lat,'longitude'=>$long);
}


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