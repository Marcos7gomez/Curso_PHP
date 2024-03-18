<?php
/*
$arregloIndexado= ["manzana", "pera", "sandia", "durazno"];
$arregloDeArreglos = [
    ["Daniel", "Juan", "Pedro", "Maria"], //0
    ["manzana", "pera", "sandia", "durazno"], //1
    ["Youtube", "Udemy", "Coder House"], //2
];

$asociativo1 = ['nombre' =>'Marcos', 'edad' => 25, 'sexo' => 'masculino', 'vehiculo' => 'gol trend' ];
print_r($asociativo1);

 Variables globales, variables que estan en el flujo 
principal del script 
$nombre = 'Marcos';
$edad = 23;
// No se pueden acceder a variables globales desde una funcion
function imprimirValores(){
    $variableLocal = 'Marcos - local scope';

    echo $variableLocal;
    echo $nombre;
    echo $edad;

    $GLOBALS['nombre'];
    echo $GLOBALS['nombre'];
    echo '<br>';
    echo $GLOBALS['edad'];
    * $GLOBALS Para acceder a variables globales desde una funcion
    pero dentro del scrpit  
}

imprimirValores();


Si neceseitamos usar una " y marca error se usa "\"  
$comillasSimples = 'Marcos';

echo $comillasSimples;

echo "<br>";

$valorNull = Null;
if(true){
    echo "valor verdadero";
};

$valor = 'sandia';
if ($valor == 'manzana'){
    echo 'es una fruta, manzana';
}else if ($valor == 'pera'){
    echo 'es una fruta, pera';
}else if ($valor == 'sandia'){
    echo 'es una fruta, sandia';
}else{
    echo 'es otra cosa';
}
comparacion ==
asigancion =


function hazAlgo($valor, $valor2){
    return $valor + $valor2;
}

$valor = hazAlgo(2, 6);
echo $valor;
echo '<br>';
/* Formato iso 
$año = date('d-m-Y H:i:s');
print $año;
*/
/*echo y print tienen diferencias minimas mientras los uses 
para imprimir un solo valor
print_r es para imprimir arreglos */
/*
$nombre = 'marcos';

/*<?= es evivalente a <?php echo */
/* Si escribimos codigo en html dentro php
se va a ejecutar como htm si lo imprimimos con print y echo */
/*ERRORES parse error:error de sintaxis
deprecated: funciones de php que estab obseletas o los erán
strict: se estan suando malas prácticas
notice: errores leves, fatal error: se deben corregir si o si
warning: importacion de archivos, variables no declaradas*/

/*
$arreglo = [1, 2, 3];
$arregloAsociativo = ['nombre' => 'Marcos', 'edad' => 25, 'cantidad_dinero' => 3000 ];
$arregloVacio = [];
$arregloMultidimensional = [
    [
        'perro', 'perrito'
    ],
    [
        'gato', 'gatito'
    ],
    [
        'pajaro', 'pajarito'
    ]
];

print_r($arregloVacio);
echo '<br>';
print_r($arregloAsociativo);
echo '<br>';
print_r($arregloMultidimensional);


$unFalso = false;
$unverdadero = true;

if (true) {
    echo 'verdadero';
} else {
    echo 'falso';
}

$fruta = 'pera';
switch ($fruta) {
    case 'durazno':
        echo 'la fruta es durazno';
        break;
    case 'pera':
        echo 'la fruta es pera';
        break;
    case 'sandia':
        echo 'la fruta es sandia';
        break;
    default:
        echo 'no es una fruta';
        break;
}


/*Si no se cumple la condicion no entra ninguna vez */
/*
$i = 101;
while ($i <= 100) {
    echo "I: {$i}<br>";
    $i++;
}
Si no se cumple la condicion entra 1 vez solamente 
do {
    echo "I: {$i}<br>";
    $i++;
} while ($i <= 100);


for ($i=1; $i <=100; $i++) { 
    echo "{$i}<br>";
}
*/

$paises = ['Argentina', 'Brasil', 'Perú'];

foreach($paises as $key => $pais){
    echo "Pais: {$pais} Key:{$key} <br>";
}
// Key para mostrar el lugar que ocupa en el arreglo

?>
