
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
                "search": "Buscar por nome"
            }
        });
  });
  </script>
 