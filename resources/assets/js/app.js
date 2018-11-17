
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

/*Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});*/

// ----- Modal Delete ----------
$('#deleteModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var customerid = button.data('id')
  var name = button.data('name')
  var lastname = button.data('lastname')
  var modal = $(this)
  modal.find('.modal-body').text(`${customerid} .- ${name} ${lastname}`)
  modal.find('.deleteCustomer').data('id', customerid)
})

$('.deleteCustomer').on('click', function(){
  var del_id= $(this).data('id')
  var $row = $('#row-'+del_id)

  $.ajax({
    type:'POST',
    url:'delete',
    data:{
      'id':del_id,
      '_token': token
    },
    success: function(data){
        if (data.delete) {
          $row.fadeOut().remove()
          $('#deleteModal').modal('hide')
        } else {
          alert('No se pudo eliminar el cliente')
        }
        
    }
  })
});
