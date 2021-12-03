
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

    <title>Como funciona</title>
  </head>
  <body>
  
   <section id ="home">
    <div class="container">
      <section>
        <div class = "row testo pt-5">
        <div class="col-sm-12">
          <h2><?php echo $not_titulo; ?> </h2>
          <?php echo $not_conteudo; ?>
        </div>
        <div class="col-sm-6">
          <img src="<?php  echo base_url('upload/'.$not_imagem); ?>" alt="<?php echo $not_titulo;?>" />
        </div>
        <div class="col-sm-3">
          <p>Publicado em:</p>
        </div>
        <div class="col-sm-3">
          <p>Autor:</p>
        </div>
     </div>

      </section>

        <div class = "row testo pt-5">
             <div class="col-sm-6">
                <font style= "color: #FACC2E"><h2> Entenda o processo de Permuta</h2></font></br>
                <span class="testo_formatado"> As ciências são decorrentes da sabedoria humana, para o bem da própria humanidade.
                Elas esclarecem a realidade da terra e de tudo o que nela habita. Mas, a ciência não pode definir Deus (ou decidir se Ele existe ou não). Deus também não pode ser alcançado pela filosofia, lógica ou razão humana por ser Ele além da nossa realidade. O pensamento humano como critério da verdade universal é algo inconcebível até mesmo no pensador mais evoluído, que a define por meio de certezas humanas. O sobrenatural não pode ser verificado por meio desse instrumento. Também, o pensamento humano não pode estabelecer a Verdade imutável universal, que lhe é superior e lhe antecede.</span>
            </div>
             <div class="col-sm-6">
              <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
               </div>
             </div>
        </div>   
     </div>
   
  </section>
   
   <section id="caixa1">
    <div class="container-fluid">
        <div class="row testo pt-5">
          <div class="col-sm-8">
            <font style= "color: #FACC2E"><h2> Como faço para interagir com o imóvel do meu interece</h2></font></br>
            <span class="testo_formatado">
              Segundo as propostas apresentadas a Verdade já foi Deus, tornou-se a razão humana -
              que é resultado da evolução do intelecto,  depois o próprio homem, agora já não há verdade
              nenhuma ou é o conjunto de todas as nossas verdades idealizadas. Isto porque a verdade
              real nossa que se impõe é a morte. E a ela repudiamos. Por isso se vive tanto a ficção
              
            </span>
            
          </div>
         
          <?php $this->load->view('v_vernoticias');?>
               
          
          
        </div>
        
    </div>
   </section>
      

    
   
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

<?php $this->load->view('v_footer'); ?>