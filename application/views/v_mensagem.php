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
   
    <title>Visualizar Mensagem</title>
  </head>
  <body>
	  <div class="container testo_ #fff3e0 #f0f6ff lighten-5 mx-md-n5 shadow p-3">
	  	<a class="btn btn-blue-grey btn-rounded center-text"><i class="far fa-clone left"></i> Caixa de Mensagem</a>
   
	  	  <div class="form-row">
	        <div class="col-sm-12 txt-imovel">
	              <div class="table-responsive">

	  		<table id="minhaTabela" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Assunto</th>
                <th>Mensagem</th>
                <th>Remetente</th>
                <th>Id Remetente</th>
                <th>Data</th>                
                <th>Ação</th>
            </tr>
        </thead>
         <?php  if(!empty($listarmensagem)){
                           foreach($listarmensagem as $msg) 
                               {                                                    

                            ?>
        <tbody>        	

            <tr>
             					<td><?php echo $msg['assunto']; ?></td>
                            	<td><?php echo $msg['mensagem']; ?></td>
               					<td><?php echo $msg['usuario_envio_nome']; ?></td> 
                                <td><?php echo $msg['usuario_envio_id']; ?></td>
                                <td><?php echo $msg['data_envio']; ?></td>
                				<td> </a>
                        <a href="<?php echo base_url('mensagemretorno/'.$msg['mensagem_id']); ?>"><button class="btn btn-mdb-color"><i class="far fa-eye"></i>&nbsp;&nbsp;Visualizar</button></a></td>                
            </tr>
        </tbody>

         <?php } 

                 } ?>
        
    </table>
	  </div>
	  </div>
	  </div>
	  </div>



	    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
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
                "lengthMenu": "Mostrando _MENU_ mensagem por página",
                "zeroRecords": "Nenhuma mensagem encontrado",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhuma mensagem disponível",
                "infoFiltered": "(filtrado de _MAX_ mensagens no total)",
                "search": "Buscar por nome"
            }
        });
  });
  </script>

<?php $this->load->view('v_footer'); ?>