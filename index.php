
<?php
$name = "Miguel";
$name = 239 . 1;
$age = (int) "efef";
$isDev = true;

// var_dump($name);

define('name', 'nameess');
const NOMBRE = 'queso';
// echo (NOMBRE);

$isOld = true;
$isDev = true;
$isRed = true;

// terniario
// echo($isOld 
//     ? "--terniaria viejo--"
//     : "--ternaria no viejo--"
// ); 


//match
$age = 54;
$outputAge = match (true) {
    $age < 10  =>" -- MATCH  bebe",
    $age < 40 => "MATCH edad media",
    default => " -- MATCH no bebe"
};
// echo ($outputAge)


//ARRAY
$bestLanguages= ["php", "java", "python", 2 ];
$bestLanguages[] = "añado otro al final";
$bestLanguages[1]= "sustituyo la posicion X en este caso la 1";
// echo( $bestLanguages[0]);
?>

<?php //recorrer array ?>
<ul>
    <?php foreach ($bestLanguages as $language) : ?>
        <!-- <li><?= $language ?></li> -->
    <?php endforeach; ?>
</ul>

<?php // objetos ?>

<?php 
    $objeto =[
        "propiedad1" => "valor 1",
        "propiedad2" => "valor 2",
    ];
    // echo ($objeto["propiedad1"])
?>



<?php //llamadas a API ?>
<?php
const API_URL = "https://whenisthenextmcufilm.com/api";
// Iniciamos sesion de CURL (CH= curl handler)
$ch = curl_init(API_URL);

// Indicar que queremos recibir el resultado de la petición pero no mostrarla en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);


/* Ejecutar peticion y guardar resultado */
$result = curl_exec($ch);

// Verifica si hubo un error durante la ejecución de cURL


curl_close($ch);

// Intenta decodificar el JSON
$data = json_decode($result, true);

?>
<head>
<title>proxima peli</title>

<!-- Centered viewport -->
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
>
</head>
<main>
    <pre>
        <?php var_dump($data) ?>
    </pre>
    <section>
        <p><?php echo($data["poster_url"])?></p>
<img src="<?= $data["poster_url"]; ?> alt="">
    </section>
    
</main>


<?php ?>
<?php ?>


<!-- <?php if ($isOld) : echo("viejo") ?> <h2>hola</h2>
<?php elseif ($isDev) : "dev" ?> "dev"
<?php elseif ($isRed) : "red" ?>
<?php endif; ?> -->




