module.exports = function(){

      $('#BlogTable').DataTable();
      $('#BlogTable_paginate').addClass('pagination justify-content-center');
      $('#BlogTable_previous').addClass('paginate-previous');
      $('#BlogTable_next').addClass('paginate-next');
      $('#BlogTable_filter').addClass('float-left');
      $('#BlogTable_length').addClass('float-right');
      $("#BlogTable_filter input[type=search]").addClass('form-control');
      $("#BlogTable_length select[name=MarkersTable_length]").addClass('form-control');
      $('#datatable').DataTable();


}