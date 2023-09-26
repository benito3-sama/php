<?php
if(isset($_REQUEST)){
 $operacion = $_REQUEST['operacion'];
 $valor_1 = $_REQUEST['valor1'];
 $valor_2 = $_REQUEST['valor2']
 ;
  validar_numero($valor_1);
  validar_numero($valor_2);
  calcular($valor_1,$valor_2,$operacion);
  print(calcular($valor_1 , $valor_2 , $operacion));
}
?>
<?php
function validar_numero($x){
  if($x == "" || $x ==NULL){
    header('Location:index.php');
    exit();    
  }
}
function calcular($x,$y,$operacion){
    if ($operacion == 'suma'){
        return $x + $y;
    } else if($operacion == 'resta'){
        return $x - $y;
    }
}
