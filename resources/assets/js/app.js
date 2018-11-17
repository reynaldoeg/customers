
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');


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

// ----- Modal Save ----------
$('#save').on('click', function(){
  var name = $('#name').val()
  var lastname = $('#lastname').val()
  var email = $('#email').val()
  var phone = $('#phone').val()
  var creditcard = $('#creditcard').val()

  $.ajax({
    type:'POST',
    url:'save',
    data:{
      'name':name,
      'lastname': lastname,
      'email': email,
      'phone': phone,
      'creditcard': creditcard,
      '_token': token
    },
    success: function(data){
        console.log(data)
        if (data.save === true) {
          console.log('Guardado')

          var newrow = `<tr><td>${name}</td><td>${lastname}</td><td>${email}</td><td>${phone}</td><td></td><td></td></tr>`

          $('#addModal').modal('hide')
          $('table tbody').append(newrow)
        } else {
          alert(data.msg)
        }
        
    }
  })
});
