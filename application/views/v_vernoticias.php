<!--Cabeçalho e rodape estão desativados  
  <?php //$this->load->view('v_cabecalho'); ?>-->
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
    <div class="container">
      <h2>Ultimas noticias</h2>
      <ul>
        <?php
            if($noticia = $this->noticias->get(4)): // pega as últimas 4 notícias
              foreach($noticia as $linha):
                ?>
              <li>
                <img src="<?php  echo base_url('upload/'.$linha->imagem); ?>"
                alt=""/>
                <h4><?php echo to_html($linha->titulo); ?></h4>
                <p><?php echo resumo_post1($linha->conteudo); ?>...
                  <a href="<?php  echo base_url('post/'.$linha->id); ?>"> Leia mais &raquo;</a>
                </p>
              </li>
              <?php 
            endforeach;
          else:
            echo "Nenhuma noticia cadastrada";
          endif;
            ?>
          
      </ul>
       
  </div>
     
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>


<!-- Cabeçalho e rodape estão desativados
<?php //<?php $this->load->view('v_footer'); ?>-->