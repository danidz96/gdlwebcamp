var api = 'AIzaSyBS6-FiwivqOyOVi-XP5JpYs1ZHVTaglsg';

function initMap() {
    var myLatLng = {
        lat: 41.3166368,
        lng: 2.0835794
    };
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 15,
        center: myLatLng
    });

    var contenido = '<h2>PRUEBA</h2>' +
        '<p>Del 10 al 12</p>';

    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map
    });
    var informacion = new google.maps.InfoWindow({
        content: contenido
    });
    marker.addListener('click', function() {
        informacion.open(map, marker);
    });
}






$(function() {

    //Lettering

    $('.nombre-sitio').lettering();

    //Agregar clase a Menú
    $('body.conferencia .navegacion-principal a:contains("Conferencia")').addClass('activo');
    $('body.calendario .navegacion-principal a:contains("Calendario")').addClass('activo');
    $('body.invitados .navegacion-principal a:contains("Invitados")').addClass('activo');

    // Menú fijo

    var windowHeight = $(window).height();
    var barraAltura = $('.barra').innerHeight();

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll > windowHeight) {
            $('.barra').addClass('fixed');
            $('body').css({
                'margin-top': barraAltura + 'px'
            });
        } else {
            $('.barra').removeClass('fixed');
            $('body').css({
                'margin-top': '0px'
            });
        }

    });

    //Menú Responsive

    $('.menu-movil').on('click', function() {
        $('.navegacion-principal').slideToggle();
    });

    //Programa conferencias
    $('.programa-evento .info-curso:first').show();
    $('.menu-programa a:first').addClass('activo');
    $('.menu-programa a').on('click', function() {
        $('.menu-programa a').removeClass();
        $(this).addClass('activo');
        $('.ocultar').hide();
        var enlace = $(this).attr('href');
        $(enlace).fadeIn(600);
        return false;
    });

    //Animaciones numeros

    var resumenLista = $('.resumen-evento');
    if (resumenLista.length > 0) {
        $('.resumen-evento').waypoint(function() {
            $('.resumen-evento li:nth-child(1) p').animateNumber({
                number: 6
            }, 1200);
            $('.resumen-evento li:nth-child(2) p').animateNumber({
                number: 15
            }, 1300);
            $('.resumen-evento li:nth-child(3) p').animateNumber({
                number: 3
            }, 1400);
            $('.resumen-evento li:nth-child(4) p').animateNumber({
                number: 9
            }, 1500);
        }, {
            offset: '60%'
        });
    }

    // Cuenta atrás

    $('.cuenta-regresiva').countdown('2020/06/01 10:00:00', function(event) {
        $('#dias').html(event.strftime('%D'));
        $('#horas').html(event.strftime('%H'));
        $('#minutos').html(event.strftime('%M'));
        $('#segundos').html(event.strftime('%S'));
    });

    //colorbox

    $('.invitado-info').colorbox({
        inline: true,
        width: "50%"
    });

    $('.boton_newsletter').colorbox({
      inline: true,
      width: "50%"
    });

});
