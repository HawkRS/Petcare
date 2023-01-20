module.exports = function(){

      $('#MarkersTable').DataTable({      
      "language": {
                  "lengthMenu": "Mostrar _MENU_ entradas por pagina",
                  "zeroRecords": "No hay entrdas existentes",
                  "info": "Mostrando entradas del _PAGE_ al _PAGES_",
                  "infoEmpty": "No records available",
                  "infoFiltered": "(filtered from _MAX_ total records)",
                  "search": "Buscar",
                  'paginate': {
      'previous': 'anterior',
      'next': 'siguiente'
    }
              }
      }
            );
      $('#MarkersTable_paginate').addClass('pagination justify-content-center');
      $('#MarkersTable_previous').addClass('paginate-previous');
      $('#MarkersTable_next').addClass('paginate-next');
      $('#MarkersTable_filter').addClass('float-left');
      $('#MarkersTable_length').addClass('float-right');
      $("#MarkersTable_filter input[type=search]").addClass('form-control');
      $("#MarkersTable_length select[name=MarkersTable_length]").addClass('form-control');
      $('#datatable').DataTable();


}