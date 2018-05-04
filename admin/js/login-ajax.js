$(document).ready(function() {

    $('#login-admin').on('submit', function(e) {
        e.preventDefault();
        var datos = $(this).serializeArray();

        $.ajax({
            type: $(this).attr('method'),
            data: datos,
            url: $(this).attr('action'),
            dataType: 'json',
            success: function(data) {
                var resultado = data;
                console.log(resultado);
                var resultado = data;
                if (resultado.respuesta == 'exito') {
                    swal(
                        'Login Correcto',
                        'Bienvenid@ ' + resultado.usuario + '!!',
                        'success'
                    );
                    setTimeout(function() {
                        window.location.href = 'admin-area.php';
                    }, 2000);
                } else {
                    swal({
                        type: 'error',
                        title: 'Usuario o password incorrectos',
                        text: 'Error!'
                    });
                }
            }
        });
    });
});
