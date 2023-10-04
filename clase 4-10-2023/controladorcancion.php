<?php
  if(isset($_POST)){

    $autor = $_POST['autor'];
    $titulo = $_POST['titulo'];
    #aqui el nick es estatico porque aun
    #no se implementa sesion
    $nick = 'moios';
  }
?>
<?php
      include "conexion.php";

      $sql_insertar = "insert into cancion values(default,'$autor','$titutlo','$nick');";

      $conexion->query($sql_insertar);

      #una vez insertado, volver al dashboar
      header("Location: //dashboard.php");
      exit;

?>