
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
  var customerid = $('#customerid').val()
  var name = $('#name').val()
  var lastname = $('#lastname').val()
  var email = $('#email').val()
  var phone = $('#phone').val()
  var creditcard = $('#creditcard').val()
  var update = $('#update').val()

  $.ajax({
    type:'POST',
    url:'save',
    data:{
      'id':customerid,
      'name':name,
      'lastname': lastname,
      'email': email,
      'phone': phone,
      'creditcard': creditcard,
      'update': update,
      '_token': token
    },
    success: function(data){
        console.log(data)
        if (data.save === true) {
          console.log('Guardado')

          if (update == 'save') {
            var newrow = `<tr><td>${name}</td><td>${lastname}</td><td>${email}</td><td>${phone}</td><td>${creditcard}</td><td></td><td></td></tr>`
            $('table tbody').append(newrow)
          }

          $('#addModal').modal('hide')
          
        } else {
          alert(data.msg)
        }
        
    }
  })
});


$('#addModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var save = button.data('save')
  var modal = $(this)

  if (save == 'update') {
    var customerid = button.data('id')
    var name = button.data('name')
    var lastname = button.data('lastname')
    var email = button.data('email')
    var phone = button.data('phone')
    var creditcard = button.data('creditcard')

    modal.find('#customerid').val(customerid)
    modal.find('#name').val(name)
    modal.find('#lastname').val(lastname)
    modal.find('#email').val(email)
    modal.find('#phone').val(phone)
    modal.find('#creditcard').val(creditcard)
    modal.find('#update').val('update')
  } else {
    modal.find('#customerid').val('')
    modal.find('#name').val('')
    modal.find('#lastname').val('')
    modal.find('#email').val('')
    modal.find('#phone').val('')
    modal.find('#creditcard').val('')
    modal.find('#update').val('save')
  }

})