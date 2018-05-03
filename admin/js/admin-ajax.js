$(document).ready(function () {
  $('#crear-admin').on('submit', function (e) {
    e.preventDefault();
    var datos = $(this).serializeArray();

    $.ajax({
      type: $(this).attr('method'),
      data: datos,
      url: $(this).attr('action'),
      dataType: 'json',
      success: function (data) {
        var resultado = data;
        if (resultado.respuesta == 'exito') {
          swal(
            'Correcto',
            'El administrador se creo correctamente',
            'success'
          );
        }else {
          swal({
            type: 'error',
            title: 'Oops...',
            text: 'Something went wrong!',
            footer: '<a href>Why do I have this issue?</a>',
          });
        }
      }
    });
  });
});
