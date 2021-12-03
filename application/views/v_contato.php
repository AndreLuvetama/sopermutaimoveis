<?php $this->load->view('v_cabecalho'); ?>
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

    <title>Contato</title>
  </head>
  <body>
  
   <section id ="home">
    <div class="container">
        <div class = "row testo pt-5">
             <div class="col-sm-6">
              <div class="alert alert-dark" role="alert" style= "color: #000000" align="center"><p><h3>
                <i class="far fa-envelope"></i> Fala conosco</h3></p>
                <font style= "color: #000000"><span> Tira duvida com a nossa equipe de permuta</span></font></br>
              </div>
      
            
             <h3></h3> 


     
            <?php if($error=$this->session->flashdata('msgAlerta')) {?> 
              <div class="alert alert-info alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>  </button>
                 <?= $this->session->flashdata('msgAlerta'); ?>
             </div>
           <?php }?>
        <?php if($error1=validation_errors()) {?> 
              <div class="alert alert-info alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>  </button>
                 <?php echo validation_errors(); ?>
             </div>
           <?php }?>

              
              <?php echo form_open('pagina/enviarEmail'); ?>
               <!--<form action="<?php //echo base_url() ?>contato/enviar" method = "post">-->                 
              <div class="col-auto">
                  <label class="sr-only" for="nomeContato">Informe o nome</label>
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fas fa-user"></i></div>
                    </div>
                    <input type="text" class="form-control" id="nomeContato" name="nomeContato" placeholder="Informe o seu nome"  value="">
                  </div>
              </div>

                <div class="col-auto">
                  <label class="sr-only" for="telContato">Número de contato</label>
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fas fa-phone"></i></div>
                    </div>
                    <input type="text" class="form-control" id="telContato" name="telContato" placeholder="(11) 000000000" value="" >
                  </div>
              </div>
              <div class="col-auto">
                  <label class="sr-only" for="emailContato">Número de contato</label>
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fas fa-at"></i></div>
                    </div>
                    <input type="text" class="form-control" id="emailContato" 
                    name="emailContato" placeholder="seuemail@dominio.com" value="" >
                  </div>
              </div>
              <div class="col-auto">
                  <label class="sr-only" for="assuntoContato">Assunto</label>
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="far fa-sticky-note"></i></div>
                    </div>
                    <input type="text" class="form-control" id="assuntoContato" name="assuntoContato" 
                    placeholder="Assunto" value="" >
                  </div>
              </div>

              <div class="col-auto">
                  <label class="sr-only" for="emailContato">Mensagem</label>
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="far fa-comment"></i></div>
                    </div>
                      <textarea class="form-control" id="mensagemContato" rows="4" name="mensagemContato" placeholder="Mensagem" ></textarea>
                    
                  </div>
              </div>
                 
                    <button type="submit" class="btn  btn-block btn-secondary">Enviar mensagem</button>
         <!-- </form>-->
          <?php echo form_close(); ?>
            </div>
             <div class="col-sm-6">
              <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
               </div>
             </div>
        </div>   
     </div>
   
  </section>    
   
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

 <?php $this->load->view('v_footer'); ?>