<?php
if ($_REQUEST['operacion'] == "suma") { 
  ($_REQUEST['valor1'] + $_REQUEST['valor2']);
  $suma = $_REQUEST['valor1'] + $_REQUEST['valor2'];
  echo "<h1>La suma es:" .$suma;
} else {
  if ($_REQUEST['operacion'] == "resta") {
    $resta = $_REQUEST['valor1'] - $_REQUEST['valor2'];
    echo "<h1>La resta es:" . $resta;
} else {
  if ($_REQUEST['operacion'] == "multiplicar") {
    $multiplicar = $_REQUEST['valor1'] * $_REQUEST['valor2'];
    echo "<h1>la multiplicacion es:" .$multiplicar;
} else {
    if ($_REQUEST['operacion'] == "dividir") {
      $dividir = $_REQUEST['valor1'] / $_REQUEST['valor2'];
      echo "<h1>la division es:".$dividir;
  }
  }
  }
}
?>