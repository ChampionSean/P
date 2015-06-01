<DOCTYPE html5>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="format.css">
  <title>PoloCase</title>
  <div id="regis">
  <img src="PoloCase.jpg" style="width:895x;height:130px">
  </div>
  <div id="bar">
    <ul>
       <li><a href="Admin.php">Home</a></li>
       <li><a href="ListaDeUsuarios.php">Lista de clientes registrados</a></li>
       <li><a href="CatalogoAdmin.php">Catálogo</a></li>
        <li><a href="ContAdmin.php">Agregar administrador</a></li>
       </ul>
     </div>
   </head>
   <body>
     <br>
     <h2>
       Clientes
     </h2>
     <br>
     <?php
     session_start();
     include 'DataBase.php';
     $myBase = new DataBase("colonelsupercof1", "PoloCaseDB");

     echo "<div class='"."ta"."'>";
     echo "<table>";
     echo "<tr>";
     echo "<td>";
     echo "Tipo";
     echo "</td>";
     echo "<td>";
     echo "Nombre";
     echo "</td>";
     echo "<td>";
     echo "Email";
     echo "</td>";
     echo "<td>";
     echo "Casa o celular";
     echo "</td>";
     echo "<td>";
     echo "Número telefonico";
     echo "</td>";
     echo "<td>";
     echo "Dirección";
     echo "</td>";
     echo "<td>";
     echo "RFC";
     echo "</td>";
     echo "</tr>";
     $co = 1;
     for($i = 1; ($all = $myBase->findElementName("id", "Clientes", $i)) != false; $i++){
       if($co == 1){
         $co =2;
         $white = "white";
       }
       else{
         $co = 1;
         $white = "blueg";
       }
     echo "<tr class='".$white."'>";
     echo "<td>";
     echo "".$all['tipo'];
     echo "</td>";
     echo "<td>";
     echo "".$all['nombre'];
     echo "</td>";
     echo "<td>";
     echo "".$all['email'];
     echo "</td>";
     echo "<td>";
     echo "".$all['TipTel'];
     echo "</td>";
     echo "<td>";
     echo "".$all['telefono'];
     echo "</td>";
     echo "<td>";
     echo "".$all['direccion'];
     echo "</td>";
     echo "<td>";
     echo "".$all['rfc'];
     echo "</td>";
     echo "</tr>";
     }


echo "</table>";
     echo "</div>";



     ?>
    <footer>
      <p>Desarrollado por Marco Antonio Estrada Robles</p>
      <p>Todos los derechos reservados</p>
    </footer>

  </body>
  </html>
