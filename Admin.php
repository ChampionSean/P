  <DOCTYPE html5>
  <html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="format.css">
    <script src="jquery-1.11.1.js"></script>
    <script>
    $(document).ready(function(){
    $('.button').click(function(){
        var clickBtnValue = $(this).val();
        var ajaxurl = 'Admin.php',
        data =  {'action': clickBtnValue};
        $.post(ajaxurl, data, function (response) {
            // Response div goes here.

        });
    });

});
    </script>
    <title>PoloCase</title>
    <div id="regis">
    <img src="PoloCase.jpg" style="width:895x;height:130px">
    </div>
    <?php
    session_start();
    if(count($_POST) !=0){
    $_SESSION['nombre'] = $_POST['nombre'];
    $_SESSION['pass'] = $_POST['pass'];
  }
    include 'DataBase.php';
    $myBase = new DataBase("colonelsupercof1", "PoloCaseDB");
    $userArr = $myBase->Log($_SESSION['nombre'], $_SESSION['pass'], "Administradores");
    $vacio = "";

    if((($userArr['nombre'] == $_SESSION['nombre']) && ($_SESSION['nombre'] != $vacio)) || ($_SERVER['HTTP_REFERER'] == "http://localhost/PoloCase/ListaDeUsuarios.php")){

echo "<div id='"."bar"."'>";
  echo "<ul>";
    echo "<li><a href='"."Admin.php"."'>Home</a></li>";
    echo "<li><a href='"."ListaDeUsuarios.php"."'>Lista de clientes registrados</a></li>";
    echo "<li><a href='"."CatalogoAdmin.php"."'>Catálogo</a></li>";
    echo  "<li><a href='"."ContAdmin.php"."'>Agregar administrador</a></li>";
    echo "</ul>";
  echo"</div>";
echo "</head>";
echo "<body>";
echo "<div id='"."yolo"."'>";
echo "<div class='"."vision"."'>";
echo "<div class='"."formulario"."'>";
echo "<div id='"."exit"."'>";
echo "<a href='"."LogP.html"."'><input type='"."button"."' class='"."button"."' name='"."name"."' value='"."Terminar sesión"."'></a>";
    echo "</div>";
    echo "<h2>Usuario : ".$_SESSION['nombre']."</h2>";
    echo "<h2>Sistema administrador de <i>POLOCASE</i></h2>";
    echo "<p>Con este sistema el administrador en cuestión podra revisar la información de clientes registrados, buscar clientes registrados por medio de algun campo, visualizar el catálogo para solicitar cambios con el proovedor del sistema, dar de alta o borrar otros administradores (esto último solo si se es el administrador principal)</p>";
    echo "<ul>";
      echo "<li><i>HOME</i> para desplegar esta ventana</li>";
        echo "<br>";
        echo "<li><i>BUSCAR CLIENTE</i> para desplegar una tabla con los usarios y su información</li>";
        echo "<br>";
        echo "<li><i>DAR DE ALTA ADMINISTRADOR</i> despliega un formulario para dar de alta a un administrador</li>";
        echo "<br>";
        echo "<li><i>CATALOGO</i> despliega el catálogo al cual los clientes tiene acceso en el sitio</li>";
      echo "</ul>";
    echo "<p>";
  echo "</div>";
echo "</div>";
echo "</div>";

if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'name':
        session_destroy();
            break;
        case 'name':
        session_destroy();
            break;
    }
}


$myBase->closeDataBase();
}

else{

echo "<div class='"."vision"."'>";
echo  "<div class='"."formulario"."'>";
echo  "<p>Administrador no encontrado</p>";
echo "<a href='"."LogP.html"."'>Regresar</a>";
echo  "</div>";
echo  "</div>";
$myBase->closeDataBase();
}
?>
  <footer>
    <p>Desarrollado por Marco Antonio Estrada Robles</p>
    <p>Todos los derechos reservados</p>
  </footer>

</body>
</html>
