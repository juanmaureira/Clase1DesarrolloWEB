<?php 
// Declaracion de variables
// El tipo de variable es determinado por el tipo de dato.
$nombre = 'Juan Perez';
$edad = 30;
$sql = 'SELECT * FROM clientes';

echo $nombre;

echo '<br>';

echo 'Hola ' . $nombre . '  la edad ingresada es ' . $edad . ' anos';

if($edad >= 38){
    echo '<br> Usted es mayor de edad';
}else{
    echo '<br> Usted tiene menos de 35 anos';
}

echo '<br>';
echo '<h2> Tabla de Multiplicar <h2>';


for($i=1; $i <10; $i++ ){
    for($j=1; $j<12; $j++){
        echo $i . 'x' .  $j . ' = ' . ($i * $j) . '<br>';
    }
    echo '<br>';
}
// Uso de Arrays
$comunas = array( 'Providencia' , 'Santiago' , 'Nunoa' , 'Las Condes' );
echo '<br>';
echo '<h3>Ejemplo de FOREACH <h3>';
foreach($comunas as $comuna){
    echo $comuna . '<br>' ;
}

?>