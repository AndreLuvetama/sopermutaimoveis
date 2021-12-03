 <!-- Bootstrap library -->
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/bootstrap.min.css'); ?>">
    <script src="<?php echo base_url('assets/bootstrap/bootstrap.min.js'); ?>"></script>
      <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
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

<body>
    <title>Imagem teste</title>>
        <div class="container">
            teste
          <?php if(!empty($carouselimg)) {?>
                <div class="jumbotron">
                    <div class="row featurette">
                        <div class="col-md-6 p-3">                  
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">                                    
                                   <?php foreach($carouselimg as $linha) {
                              
                                    $qnt_slide=  $totalimg;

                                    $cont_marc = 0;
                                    while($cont_marc < $qnt_slide){
                                        echo "<li id='valor-car' data-target='#myCarousel' data-slide-to='$cont_marc'></li>";
                                        $cont_marc++;
                                   
                                   
                                    } } ?>
                                </ol>
                                <div class="carousel-inner">
                                    <?php 

                                    $cont_slide = 0;
                                     foreach($carouselimg as $linha) {
                                          $active = "";
                                        if($cont_slide == 0){
                                            $active = "active";
                                        } 
                         echo "<div class='carousel-item $active'>"; 
                    /**echo "<img class='d-block w-100' src='<?php echo base_url('uploads/imagem/".$linha['id']."/".$linha['imagem'].");?>' alt='".$linha['nome']."' >"; **/?>
   
               
                 <img  src="<?php echo base_url() ?>upload/s1.jpg" 
                              class="img-fluid" alt="Third slide"   style="height:450px">
                              

                                  <?php    
                                                    echo "</div>";
                                        $cont_slide++;
                                    }
                                    ?>
                                </div>
                                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            
                            
                        </div>
                        
                        <div class="col-md-6">
                           
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>      
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function () {
                //tempo de duração do slide
                $('.carousel').carousel({
                    interval: 3000
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
    </body>
</html>