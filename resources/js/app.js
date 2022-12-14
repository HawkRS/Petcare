/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

//require('./bootstrap');
//import Chart from 'chart.js';
import DataTables from 'datatables.net';


window.onload = function() {MainFunction()};

function MainFunction(){
  console.log("prueba1");



  var bodyId = document.body.id;
  console.log(bodyId);

  switch (bodyId) {
    case "Dashboard":{
      var dashboard = require('./landing.js');
      dashboard();
      break;
    }
    case "Encuentranos":{
      console.log('marcadores');
      var finduspage = require('./markers.js');
      finduspage();
      break;
    }
    default:
  }
  //*/
}


(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
