var api = 'AIzaSyBS6-FiwivqOyOVi-XP5JpYs1ZHVTaglsg';
function initMap() {
  var myLatLng = {lat: 41.3166368, lng: 2.0835794};
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
  marker.addListener('click', function(){
    informacion.open(map, marker)
  });
}

// }

(function() {
    'use strict';

    var regalo = document.getElementById('regalo');
    document.addEventListener('DOMContentLoaded', function() {

        //Campos datos usuarios

        var nombre = document.getElementById('nombre');
        var apellido = document.getElementById('apellido');
        var email = document.getElementById('email');

        //Campos entradas

        var pase_dia = document.getElementById('pase_dia');
        var pase_dosdias = document.getElementById('pase_dosdias');
        var pase_completo = document.getElementById('pase_completo');

        //Botones y divs

        var calcular = document.getElementById('calcular');
        var errorDiv = document.getElementById('error');
        var botonRegistro = document.getElementById('btnRegistro');
        var lista_productos = document.getElementById('lista-productos');
        var suma = document.getElementById('suma-total');

        //Extras

        var camisas = document.getElementById('camisa_evento');
        var etiquetas = document.getElementById('etiquetas');


        calcular.addEventListener('click', calcularTotal);
        pase_dia.addEventListener('blur', mostrarDias);
        pase_dosdias.addEventListener('blur', mostrarDias);
        pase_completo.addEventListener('blur', mostrarDias);


        // nombre.addEventListener('blur', function(){
        //   if (this.value == '') {
        //     errorDiv.style.display = 'block';
        //     errorDiv.innerHTML = "Este campo no puede estar vacio";
        //     errorDiv.style.border = '2px solid red';
        //     this.style.border = '2px solid red'
        //   }
        // });


        nombre.addEventListener('blur', validarCampos);
        apellido.addEventListener('blur', validarCampos);
        email.addEventListener('blur', validarCampos);
        email.addEventListener('blur', validarMail);


        function validarCampos(){
          if (this.value == '') {
            errorDiv.style.display = 'block';
            errorDiv.innerHTML = "Este campo no puede estar vacio";
            errorDiv.style.border = '2px solid red';
            this.style.border = '2px solid red';
          }else{
            errorDiv.style.display = 'none';
            this.style.border ='1px solid  #cccccc';
          }
        };

        function validarMail(){
          if(this.value.indexOf('@') > -1){
            errorDiv.style.display = 'none';
            this.style.border ='1px solid  #cccccc';
          }else{
            errorDiv.style.display = 'block';
            errorDiv.innerHTML = "Usa un email con @";
            errorDiv.style.border = '2px solid red';
            this.style.border = '2px solid red';
          }
        }

        function calcularTotal(event) {
            event.preventDefault();
            if (regalo.value === '') {
                alert('Debes elegir un regalo');
            } else {
                var entradaDia = pase_dia.value,
                    entrada2dias = pase_dosdias.value,
                    entradaCompleto = pase_completo.value,
                    cantCamisas = camisas.value,
                    cantEtiquetas = etiquetas.value;

                var totalPagar = (entradaDia * 30) + (entrada2dias * 45) + (entradaCompleto * 50) + (cantCamisas * 10) * .93 + (cantEtiquetas * 2);

                var listadoProductos = [];

                if(entradaDia >= 1){
                  listadoProductos.push(entradaDia + ' Pases por día');
                }
                if (entrada2dias >= 1) {
                  listadoProductos.push(entrada2dias + ' Pases por 2 dias');
                }
                if(entradaCompleto>=1){
                  listadoProductos.push(entradaCompleto + ' Pases completos');
                }
                if(cantCamisas>=1){
                  listadoProductos.push(cantCamisas + ' Camisetas');
                }
                if(cantEtiquetas>=1){
                  listadoProductos.push(cantEtiquetas + ' Etiquetas');
                }
                lista_productos.style.display = 'block';
                lista_productos.innerHTML = '';
                for (var i = 0; i < listadoProductos.length; i++) {
                  lista_productos.innerHTML += listadoProductos[i] + '<br/>';
                }

                suma.innerHTML = '$ ' + totalPagar.toFixed(2);
            }
        }

        function mostrarDias(){
          var entradaDia = pase_dia.value,
              entrada2dias = pase_dosdias.value,
              entradaCompleto = pase_completo.value;

          var diasElegidos = [];
          if (entradaDia > 0) {
            diasElegidos.push('viernes');
          }
          if (entrada2dias > 0) {
            diasElegidos.push('viernes', 'sabado');
          }
          if (entradaCompleto > 0) {
            diasElegidos.push('viernes','sabado', 'domingo');
          }
          for (var i = 0; i < diasElegidos.length; i++) {
            document.getElementById(diasElegidos[i]).style.display = 'block';
          }
        }


    }); //DOM CONTENT LOADED
})();


$(function(){
  //Programa conferencias
  $('.programa-evento .info-curso:first').show();
  $('.menu-programa a:first').addClass('activo');
  $('.menu-programa a').on('click', function(){
    $('.menu-programa a').removeClass();
    $(this).addClass('activo');
    $('.ocultar').hide();
    var enlace = $(this).attr('href');
    $(enlace).fadeIn(600);
    return false;
  });

});
