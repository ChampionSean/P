<DOCTYPE html5>
  <html>
  <head>
    <meta charset="UTF-8">
    <title>PoloCase</title>
    <div id="regis">
    <img src="PoloCase.jpg" style="width:895x;height:130px">
  </div>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="format.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script>
  window.onload = function () {

document.formularioContacto.nombre.focus();

document.formularioContacto.addEventListener('submit', validarFormulario);

}



function validarFormulario(evObject) {

evObject.preventDefault();

var kk = '';
var kkk = '';

var todoCorrecto = true;

var formulario = document.formularioContacto;

for (var i=0; i<formulario.length; i++) {

               if(formulario[i].name != 'rfc') {

                              if (formulario[i].value == null || formulario[i].value.length == 0 || /^\s*$/.test(formulario[i].value)){

                              alert ('No puedes tener campos vacíos solo el RFC es opcional');

                              todoCorrecto=false;

                              }

                              if(formulario[i].name == 'pass'){
                               kk = formulario[i].value;

                              }

                              if(formulario[i].name == 'pass2'){
                                kkk = formulario[i].value;

                              }

               }

               }

if(kk == kkk){

if (todoCorrecto ==true ) {

  formulario.submit();

}}else{ alert ('Las password deben coincidir');}

}
  </script>
  </head>
    <body>



<div id="mmm">
      <div class="vision">
        <div class="formulario">
          <h2>Registro</h2>
<form name="formularioContacto" action="Controller.php" method="POST">
  <br>
  <br>
  <div class="form-group">
  <label for="nombre">Nombre de usuario:</label>
  <input type="text" name="nombre"  placeholder="nombre" maxlength="30">
</div>
  <br>
  <br>
  <br>
  <div class="form-group">
  <label for="apellido">Apellido</label>
  <input type="text" name="apellido"  placeholder="apellidos" maxlength="30">
</div>
  <br>
  <br>
  <br>
  <div class="form-group">
  <label for="pass">Password:</label>
  <input type="text" name="pass"  placeholder="password">
</div>
  <br>
  <br>
  <br>
  <div class="form-group">
  <label for="pass2">Escribe la password otra vez:</label>
  <input type="text" name="pass2"  placeholder="password otra vez">
</div>
  <br>
  <br>
  <br>
  <input type="submit" value="Registrar" class="submit">
  <a href="Admin.php"><input type="button" value="Cancelar" style="position:relative; right:-50px;"></a>
</form>
</div>
</div>
</div>
    <footer>
      <p>Desarrollado por Marco Antonio Estrada Robles</p>
      <p>Todos los derechos reservados</p>
    </footer>

  </body>
      </html>
