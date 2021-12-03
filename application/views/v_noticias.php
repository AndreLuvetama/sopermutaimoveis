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
    <div class="container">
        <div class="col10">
          <ul>
            <li> <a href="<?php echo base_url('noticias/cadastrar'); ?>">Inserir</a></li>
            <li> <a href="<?php echo base_url('noticias/listar'); ?>">Listar</a></li>
          </ul>
        </div>


  <div class="col10">
    <h2><?php echo $h2; ?></h2>
    <?php 
      if($msg = get_msg()):
        echo '<div class="msg-box">'.$msg. '</div>';
     endif;
     switch ($tela):
       case 'listar':
          if (isset($noticias) && sizeof($noticias)>0):
            ?>
          <table>
              <thead>
                <th align="left"> Título</th>
                <th align="rigth"> Ações</th>
              </thead>
              <tbody>
                <?php 
                  foreach ($noticias as $linha):
                   ?>
                   <tr>
                      <td> <?php echo $linha->titulo; ?></td>
                      <td align="rigth"> <?php echo anchor('noticias/editar/' .$linha->id, 'Editar'); ?> | <?php echo anchor('noticias/excluir/' .$linha->id, 'Excluir'); ?> | <?php echo anchor('post/' .$linha->id, 'Ver', array('target' => '_blank' )); ?></td>
                   </tr>
                   <?php
                 endforeach;
                 ?>
              </tbody>
          </table>
          <?php 

          else:             
             echo 'Nenhuma noticia cadastrada</div>';
          endif;     
           break;
        case 'cadastrar':
           echo form_open_multipart();
           echo form_label('Titulo', 'titulo');
           echo form_input('titulo', set_value('titulo'));
           echo form_label('Conteudo', 'conteudo');
           echo form_textarea('conteudo', to_html(set_value('conteudo')), array('class' => 'editorhtml'));
           echo form_label('Imagem da Noticia(thumbnail):','imagem');
           echo form_upload('imagem');
           echo form_submit('enviar', 'salvar noticias', array('class' => 'botao' ));
           echo form_close();

           break;
        case 'editar':
           echo form_open_multipart();
           echo form_label('Titulo', 'titulo');
           echo form_input('titulo', set_value('titulo', to_html($noticia->titulo)));
           echo form_label('Conteudo', 'conteudo');
           echo form_textarea('conteudo',  to_html(set_value('conteudo', to_html($noticia->conteudo))), array('class' => 'editorhtml'));
           echo '<p> <small>Imagem atual:</small><br /><img src="'.base_url('upload/'.$noticia->imagem).'" class="img-thumbnail"></p>';
           echo form_label('Imagem da Noticia(thumbnail):','imagem');
           echo form_upload('imagem');
           echo form_submit('enviar', 'atualizar noticias', array('class' => 'botao' ));
           echo form_close();
           break;
        case 'excluir':
           echo form_open_multipart();
           echo form_label('Titulo', 'titulo');
           echo form_input('titulo', set_value('titulo', to_html($noticia->titulo)));
           echo form_label('Conteudo', 'conteudo');
           echo form_textarea('conteudo',  to_html(set_value('conteudo', to_html($noticia->titulo))), array('class' => 'editorhtml'));
           echo '<p> <small>Imagem:</small><br /><img src="'.base_url('upload/'.$noticia->imagem).'" class="img-thumbnail"></p>';
          
           echo form_submit('enviar', 'Excluir noticias', array('class' => 'botao' ));
           echo form_close();
           break;
     endswitch;
    

    ?>
  </div>
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

<?php $this->load->view('v_footer'); ?>