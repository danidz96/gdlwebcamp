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

         botonRegistro.disabled = true;

        //Extras

        var camisas = document.getElementById('camisa_evento');
        var etiquetas = document.getElementById('etiquetas');

        if (document.getElementById('calcular')) {
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
        }


        function validarCampos() {
            if (this.value == '') {
                errorDiv.style.display = 'block';
                errorDiv.innerHTML = "Este campo no puede estar vacio";
                errorDiv.style.border = '2px solid red';
                this.style.border = '2px solid red';
            } else {
                errorDiv.style.display = 'none';
                this.style.border = '1px solid  #cccccc';
            }
        }

        function validarMail() {
            if (this.value.indexOf('@') > -1) {
                errorDiv.style.display = 'none';
                this.style.border = '1px solid  #cccccc';
            } else {
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

                var totalPagar = (entradaDia * 30) + (entrada2dias * 45) + (entradaCompleto * 50) + (cantCamisas * 10) * 0.93 + (cantEtiquetas * 2);

                var listadoProductos = [];

                if (entradaDia >= 1) {
                    listadoProductos.push(entradaDia + ' Pases por día');
                }
                if (entrada2dias >= 1) {
                    listadoProductos.push(entrada2dias + ' Pases por 2 dias');
                }
                if (entradaCompleto >= 1) {
                    listadoProductos.push(entradaCompleto + ' Pases completos');
                }
                if (cantCamisas >= 1) {
                    listadoProductos.push(cantCamisas + ' Camisetas');
                }
                if (cantEtiquetas >= 1) {
                    listadoProductos.push(cantEtiquetas + ' Etiquetas');
                }
                lista_productos.style.display = 'block';
                lista_productos.innerHTML = '';
                for (var i = 0; i < listadoProductos.length; i++) {
                    lista_productos.innerHTML += listadoProductos[i] + '<br/>';
                }

                suma.innerHTML = '$ ' + totalPagar.toFixed(2);

                botonRegistro.disabled = false;
                document.getElementById('total_pedido').value = totalPagar;
            }
        }

        function mostrarDias() {
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
                diasElegidos.push('viernes', 'sabado', 'domingo');
            }
            for (var i = 0; i < diasElegidos.length; i++) {
                document.getElementById(diasElegidos[i]).style.display = 'block';
            }
        }


    }); //DOM CONTENT LOADED
})();
(function() {
    "use strict";

    var regalo = document.getElementById('regalo');
    document.addEventListener('DOMContentLoaded', function(){

        // Campos Datos usuario
        var nombre = document.getElementById('nombre');
        var apellido =document.getElementById('apellido');
        var email =document.getElementById('email');

        // Campos pases
        var pase_dia =document.getElementById('pase_dia');
        var pase_dosdias =document.getElementById('pase_dosdias');
        var pase_completo =document.getElementById('pase_completo');

        //Botones y divs
        var calcular = document.getElementById('calcular');
        var errorDiv = document.getElementById('error');
        var botonRegistro = document.getElementById('btnRegistro');
        var lista_productos = document.getElementById('lista-productos');
        var suma = document.getElementById('suma-total');

        // Extras
        var camisas =document.getElementById('camisa_evento');
        var etiquetas = document.getElementById('etiquetas');

        botonRegistro.disabled = true;

  if(document.getElementById('calcular')) {



        calcular.addEventListener('click', calcularMontos);

        pase_dia.addEventListener('input', mostrarDias);
        pase_dosdias.addEventListener('input', mostrarDias);
        pase_completo.addEventListener('input', mostrarDias);

        nombre.addEventListener('blur', validarCampos);
        apellido.addEventListener('blur', validarCampos);
        email.addEventListener('blur', validarCampos);
        email.addEventListener('blur', validarMail);

        var formulario_editar = document.getElementsByClassName('editar-registrado');
        if(formulario_editar.length > 0) {
            if(pase_dia.value || pase_dosdias.value || pase_completo.value ) {
                mostrarDias();
            }
        }



        function validarCampos() {
          if(this.value == '') {
            errorDiv.style.display= 'block';
            errorDiv.innerHTML ="este campo es obligatorio";
            this.style.border = '1px solid red';
            errorDiv.style.border = '1px solid red';
          } else {
            errorDiv.style.display = 'none';
            this.style.border = '1px solid #cccccc';
          }
        }

        function validarMail() {
          if(this.value.indexOf("@") > -1) {
            errorDiv.style.display = 'none';
            this.style.border = '1px solid #cccccc';
          } else {
            errorDiv.style.display= 'block';
            errorDiv.innerHTML ="debe tener al menos una @";
            this.style.border = '1px solid red';
            errorDiv.style.border = '1px solid red';
          }
        }



        function calcularMontos(event){
            event.preventDefault();
            if(regalo.value === '') {
              alert("Debes elegir un regalo");
              regalo.focus();
            } else {
               var entradaDia = parseInt(pase_dia.value, 10)|| 0,
                   entrada2Dias = parseInt(pase_dosdias.value, 10)|| 0,
                   boletoCompleto = parseInt(pase_completo.value, 10)|| 0,
                   cantCamisas = parseInt(camisas.value, 10)|| 0,
                   cantEtiquetas =parseInt(etiquetas.value, 10)|| 0;


              var totalPagar = (entradaDia * 30) +  (entrada2Dias * 45) + (boletoCompleto * 50) + ((cantCamisas * 10) * .93) + (cantEtiquetas * 2);

              var listadoProductos = [];

              if(entradaDia >= 1) {
                listadoProductos.push(entradaDia + ' Pases por día');
              }
              if(entrada2Dias >= 1) {
                listadoProductos.push(entrada2Dias + ' Pases por 2 días');
              }
              if(boletoCompleto >= 1) {
                listadoProductos.push(boletoCompleto + ' Pases Completos');
              }
              if(cantCamisas >= 1) {
                listadoProductos.push(cantCamisas + ' Camisas');
              }
              if(cantEtiquetas >= 1) {
                listadoProductos.push(cantEtiquetas + ' Etiquetas');
              }
              lista_productos.style.display = "block";
              lista_productos.innerHTML = '';
              for(var i = 0; i< listadoProductos.length; i++) {
                lista_productos.innerHTML += listadoProductos[i] + '<br/>';
              }
              suma.innerHTML = "$ " + totalPagar.toFixed(2);

              botonRegistro.disabled = false;
              document.getElementById('total_pedido').value = totalPagar;

            }
        }

        function mostrarDias(){
          var entradaDia = parseInt(pase_dia.value, 10)|| 0,
              entrada2Dias = parseInt(pase_dosdias.value, 10)|| 0,
              boletoCompleto = parseInt(pase_completo.value, 10)|| 0;

              console.log(boletoCompleto);

              var diasElegidos = [];

              if(entradaDia > 0){
                diasElegidos.push('viernes');
                console.log(diasElegidos);
              }
              if(entrada2Dias>0) {
                diasElegidos.push('viernes','sabado');
                console.log(diasElegidos);
              }
              if(boletoCompleto>0) {
                diasElegidos.push('viernes', 'sabado', 'domingo');
                console.log(diasElegidos);
              }
              console.log(diasElegidos.length);

              for(var i = 0; i < diasElegidos.length; i++) {
                  document.getElementById(diasElegidos[i]).style.display = 'block';
              }

              if(diasElegidos.length == 0 ) {
                  var todosDias = document.getElementsByClassName('contenido-dia');
                  for(var i = 0; i < todosDias.length; i++) {
                     todosDias[i].style.display = 'none';
                  }
              }

        }

        }


    }); // DOM CONTENT LOADED
})();
