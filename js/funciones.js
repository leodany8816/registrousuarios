
$.datepicker.regional['es'] = {
    closeText: 'Cerrar',
    prevText: '<Ant',
    nextText: 'Sig>',
    currentText: 'Hoy',
    monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
    monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
    dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
    dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
    dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
    weekHeader: 'Sm',
    dateFormat: 'yy-mm-dd',
    firstDay: 1,
    isRTL: false,
    showMonthAfterYear:false,
    yearSuffix: ''
   };
$.datepicker.setDefaults($.datepicker.regional['es']);

$(function(){
    $("#fnacimiento").datepicker({
        changeMonth: true,
        changeYear: true,
    });
});

$(document).ready(function() {
    // console.log("3");
    $('#btnRegister').click(function(e) {
      e.preventDefault();
      //console.log('ya hicimos click');
      var nombre = $('#nombre').val();
      var app = $('#apellidop').val();
      var apm = $('#apellidom').val();
      var fnan = $("#fnacimiento").val();
      var email = $("#correo").val();
      var telefono = $("#telefono").val();
      var contra = $("#password").val();
      var contra2 = $("#password2").val();

      if(nombre == ""){
        $.notify({
            title:"Lo sentimos:",
            message: "Falta Nombre"
        },{
           type: 'danger'
        });
      }
      else if(app == ""){
        $.notify({
            title:"Lo sentimos:",
            message: "Falta Apellido Paterno"
        },{
           type: 'danger'
        });
      }
      else if(apm == ""){
        $.notify({
            title:"Lo sentimos:",
            message: "Falta Apellido Materno"
        },{
           type: 'danger'
        });
      }
      else if(fnan == ""){
        $.notify({
            title:"Lo sentimos:",
            message: "Falta Fecha de Nacimiento"
        },{
           type: 'danger'
        });
      }
      else if(email == ""){
        $.notify({
            title:"Lo sentimos:",
            message: "Falta correo electrónico (email)"
        },{
           type: 'danger'
        });
      }else if(email.indexOf('@', 0) == -1 || email.indexOf('.', 0) == -1) {
        $.notify({
            title:"Lo sentimos:",
            message: "El e-mail que ingresaste es incorrecto"
        },{
           type: 'danger'
        });       
     }
      else if(telefono == ""){
        $.notify({
            title:"Lo sentimos:",
            message: "Falta telefono"
        },{
           type: 'danger'
        });
      }else if(isNaN(parseInt(telefono))){
        $.notify({
            title:"Lo sentimos:",
            message: "El campo telefono solo acepta numeros"
        },{
           type: 'danger'
        });         
      }
      else if(contra == ""){
        $.notify({
            title:"Lo sentimos:",
            message: "Falta contraseña"
        },{
           type: 'danger'
        });
      }
      else if(contra != contra2){
        $.notify({
            title:"Lo sentimos:",
            message: "Las contraseñas no coinciden"
        },{
           type: 'danger'
        });
      }
      else{
          //console.log('listo');
          $('#btnRegister').html('ESPERE, ESTAMOS PROCESANDO');
          $('#btnRegister').prop('disabled', true);
          $.ajax({
            type: "POST",
            url: "acciones/guardar_usuario.php",
            data: {
                nombre:nombre,
                app:app,
                apm:apm,
                fnan:fnan,
                email:email,
                telefono: telefono,
                contra: contra
            },
            success:function(msg){
                if(msg == 'a'){
                    $.notify({
                        title:"Listo!",
                        message: "Te has registrado correctamente"
                    },{
                       type: 'success'
                    });
                    $('#nombre').val('');
                    $('#apellidop').val('');
                    $('#apellidom').val('');
                    $("#fnacimiento").val('');
                    $("#correo").val('');
                    $("#telefono").val('');
                    $("#password").val('');
                    $("#password2").val('');
                    $('#btnRegister').html('REGISTRARME');
                    $('#btnRegister').prop('disabled', false);
                }else{
                    $('#btnRegister').html('REGISTRARME');
                    $('#btnRegister').prop('disabled', false);
                    $.notify({
                        title:"Error:",
                        message: "Tenemos problemas a guardar la información"
                    },{
                       type: 'danger'
                    });
                }
            }
          });
      }

  });
});