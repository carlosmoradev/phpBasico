<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

/**Array.  es una coleccion de datos */


$pelicula = 'Batman'; /** variable sencilla */
$peliculas = array('Batman', 'Superman', 'boyacoman');
$distribuciones = ['gentoo', 'ubuntu', 'centos', 'puppy']; /**otra forma de declarar arrays */

// var_dump($peliculas[2]);
// var_dump($distribuciones);

echo "El nuevo superheroe es $peliculas[2]";

echo "<h2>Recorrido del array</h2><hr>";

for($i = 0; $i < count($peliculas); $i++){
    echo "$peliculas[$i]<br/>";
}
echo "<hr>";

echo "<h2> Prueba de bucle con foreach </h2>"; /*!El foreach es especial para recorrer arrays */

foreach ($distribuciones as $distro) {
    echo $distro."<br/>";
}

echo "<hr>";

echo "<h2>Arrays asociativos</h2>";

$personas = [
    'nombre' => 'Pedro',
    'apellido' => 'Perez',
    'ciudad' => 'Mariquita',
    'nacimiento' => '04-08-1970',
    
];
var_dump($personas);
echo "<br/>";

function age($edad){
$fechaActual = date('d-m-Y');
global $personas;
$fechaNacimiento = $personas['nacimiento'];
$edad = $fechaActual - $fechaNacimiento;
return $edad;
}

echo "Su nombre completo es: ".$personas['nombre']." ".$personas['apellido']." y su edad es ".age($personas['nacimiento'])."<br/>";

$contactos =[
    [
        'nombre' => 'Carlos',
        'apellido' => 'Mora'
    ],
    [
        'nombre' => 'pedro',
        'apellido' => 'perez'
    ]
    ];

var_dump($contactos);

echo $contactos[0]['apellido'];
?>