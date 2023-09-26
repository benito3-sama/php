<?php
class Automovil {
    public $color;
    public $motor;
    public $marca;

    public function obtener_color()
    {
        return $this->color;
    }
}
//crear 3 objetos de tipo Automovil
$auto1 = new Automovil();
$auto1->color = 'verde';
$auto1->motor = 2.0;
$auto1->marca = 'Toyota';

$auto2 = new Automovil();
$auto2->color = 'gris';
$auto2->motor = 1.5;
$auto2->marca = 'Ford';

$auto3 = new Automovil();
$auto3->color = 'azul';
$auto3->motor = 3.0;
$auto3->marca = 'Hyundai';

//agregar un tercer auto
?>
<h3>Imprimir los colores de autos disponibles</h3>
<?php
    echo "Primer auto: " .$auto1->obtener_color();
    echo "<br>Segundo auto: " .$auto2->obtener_color();
    echo "<br>Tercer auto: " .$auto3->obtener_color();
    ?>