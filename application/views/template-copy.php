<!DOCTYPE html>
<html lang="pt-br">
 <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device, initial-scale=1, shrink-to-fit=no">
   <title>Só Permuta imóveis</title>
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


<body>
		<div class="site">	
		<?php include"cabecalho.php"?>	
		<div class="conteudo">
			<?php $this ->load->view ($nome_view); ?>
			
				
		</div>	
		<?php include"v_footer.php"?>	
		</div>
		
		<!-- JavaScript (Opcional) -->
			<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
			<script src="js/bootstrap.min.js"></script>


</body>
</html>