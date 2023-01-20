module.exports = function(){

      $('#BlogTable').DataTable({      
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
      $('#BlogTable_paginate').addClass('pagination justify-content-center');
      $('#BlogTable_previous').addClass('paginate-previous');
      $('#BlogTable_next').addClass('paginate-next');
      $('#BlogTable_filter').addClass('float-left');
      $('#BlogTable_length').addClass('float-right');
      $("#BlogTable_filter input[type=search]").addClass('form-control');
      $("#BlogTable_length select[name=MarkersTable_length]").addClass('form-control');
      $('#datatable').DataTable();


}