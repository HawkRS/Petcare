module.exports = function(){

      $('#MarkersTable').DataTable();
      $('#MarkersTable_paginate').addClass('pagination justify-content-center');
      $('#MarkersTable_previous').addClass('paginate-previous');
      $('#MarkersTable_next').addClass('paginate-next');
      $('#MarkersTable_filter').addClass('float-left');
      $('#MarkersTable_length').addClass('float-right');
      $("#MarkersTable_filter input[type=search]").addClass('form-control');
      $("#MarkersTable_length select[name=MarkersTable_length]").addClass('form-control');
      $('#datatable').DataTable();


}