/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

   $(document).ready(function(){
   $("#miModal").on('hidden.bs.modal', function () {
     $(location).attr("href","clientes.jsp");
   });
 });
$(function() {
 $("form[name='AgregarUsuario']").validate({
   rules: {
     nombre: {
       required: true,
       minlength: 3
     },
     apellido: {
       required: true,
       minlength: 3
     },
     telefono: {
       required: true,
       minlength: 8,
       number: true
     },
     correo: {
       required: true,
       email: true
     },
     DUI: {
       required: true,
       minlength: 5,
       number: true
     }
   },
   messages: {
     nombre: {
       required: "Por favor, introduzca su nombre",
       minlength: "Su nombre debe contener 3 letras como minimo"
     },
     apellido: {
       required: "Por favor, introduzca su nombre",
       minlength: "Su apellido debe contener 3 letras como minimo"
     },
     telefono: {
       required: "Por favor, introduzca su telefono",
       minlength: "Su telefono debe contener 8 numero como minimo",
       number: "Escriba un numero de telefono valido"
     },
     correo: {
       required: "Por favor proporcione un correo",
       minlength: "El correo debe tener al menos 5 caracteres."
     },
     DUI: {
         required: "Por favor, introduce un numero de DUI",
         number: "Solo se permiten numeros"
     }
     
   },
   invalidHandler: function(event, validator) {
   $("#modalError").modal("show");
  },
  submitHandler: function(form) {
    //form.submit();
    $("#miModal").modal("show");
    }
  });
});