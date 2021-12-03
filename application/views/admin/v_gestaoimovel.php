<?php $this->load->view('v_cabecalho'); ?>
<?php
//Ultimos cadastros
      $ul_usuario_id       = isset($ultimosCadastros->usuario_id) ? $ultimosCadastros->usuario_id: "";
      $ul_dataIncl  = isset($ultimosCadastros->dataIncl) ? $ultimosCadastros->dataIncl: ""; 
      $ul_nomeUsuario  = isset($ultimosCadastros->nomeUsuario) ? $ultimosCadastros->nomeUsuario: "";
      $ul_usuarioSenha = isset($ultimosCadastros->usuarioSenha) ? $tab_usuario->usuarioSenha: "";
      $ul_nome         = isset($ultimosCadastros->nome) ? $ultimosCadastros->nome: "";
      $ul_bairro       = isset($ultimosCadastros->bairro) ? $ultimosCadastros->bairro: "";
      $ul_cidade  = isset($ultimosCadastros->cidade) ? $ultimosCadastros->cidade: "";
      $ul_sexo_masc       = isset($tab_cad_pessoa->sexo) ? $tab_cad_pessoa->sexo: "";
      $ul_sexo_fem       = isset($ultimosCadastros->sexo) ? $ultimosCadastros->sexo: "";
      $ul_tel  = isset($ultimosCadastros->tel) ? $ultimosCadastros->tel: "";
      $ul_cel  = isset($ultimosCadastros->cel) ? $ultimosCadastros->cel: "";
      $ul_email       = isset($ultimosCadastros->email) ? $ultimosCadastros->email: "";
      $ul_uf  = isset($ultimosCadastros->uf) ? $ultimosCadastros->uf: "";

      // ultimos imoveis cadastrados
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
  <script type="text/javascript" src="<?php echo base_url() ?>assets/js/datatabla.js"></script>

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
         <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
        <link href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">
    </head>
    <body class="sb-nav-fixed">
       <div class="container testo_ #fff3e0 fundoPadrao lighten-5 mx-md-n5 shadow p-3">
        <div id="layoutSidenav">        
            <div id="layoutSidenav_content">
                <main>
            
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i><?php echo "$getQtdeImoveis";
                            ?> imóveis cadastrados</div>
                             <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table"  id="minhaTabela" width="100%" cellspacing="0">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th class="text-center font-weight-bold">Cod Imével</th>
                                                <th class="text-center font-weight-bold">Cód prop</th>
                                                <th class="text-center font-weight-bold">Nome Imóvel</th>
                                                <th class="text-center font-weight-bold">Apelido Imóvel</th>
                                                <th class="text-center font-weight-bold">Endereço</th>
                                                <th class="text-center font-weight-bold">Bairro</th>
                                                <th class="text-center font-weight-bold">Cidade</th>
                                                <th class="text-center font-weight-bold">Data incl</th>
                                                <th class="text-center font-weight-bold">Editar</th>
                                                <th class="text-center font-weight-bold">Excluir</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php  if(!empty($todosImoveis))
                                          { $i=0;
                                            foreach($todosImoveis as $imoveis){ $i++; ?>
                                            <tr>
                                                <td><?php echo $imoveis['id']; ?></td>
                                                <td><?php echo $imoveis['usuario_id']; ?></td>
                                                <td><?php echo $imoveis['nomeImovel']; ?></td>
                                                <td><?php echo $imoveis['apelidoImovel']; ?></td>
                                                <td><?php echo $imoveis['enderecoImovel']; ?></td>
                                                <td><?php echo $imoveis['bairroImovel']; ?></td>
                                                <td><?php echo $imoveis['cidadeImovel']; ?></td>
                                                <td><?php echo $imoveis['dataIncl']; ?></td>
                                                <td>
                        <a href="<?php echo base_url('admin/verImovel/'.$imoveis['id']); ?>" class="btn btn-primary"><i class="far fa-eye"></i></a></td>
                      <td>                     
                    <a href="<?php echo base_url('admin/deleteimovel/'.$imoveis['id']); ?>" class="btn btn-danger" onclick="return confirm('Pretende excluir?')"><i class="far fa-trash-alt"></i></a></td>
                                            </tr>

                                            
                                            <?php } }else{?> 
                                                    <span>Cadastro não encontrados</span>
                                       <?php } ?>
                                   </table>
                                
                            </div>
                        </div>

                    </div>
                </main>
               
            </div>
          </div>
        </div>
         <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
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
                "search": "Buscar por código"
            }
        });
  });
  </script>

<?php $this->load->view('v_footer'); ?>


