<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primer documento con Php y html</title>
</head>
<body>

<h1>Introducción a Php - <?php echo "miweb.com"; ?></h1>

</body>
</html>
<?="<h2>Bienvenidos al  módulo de PHP</h2>" ?>
<?php       
echo "<h3>Listado de opciones:</h3>";
$primera_var="String de texto, o literal";
$primer_numero=50;
$otro_numero=50.26;
$segundo_numero="50";
$verdadero_o_no=true;
$nulo=null;
$mi_nombre[]="Pepe Perolillos";
$mi_nombre[]="Pepon Perolillos";
$mi_nombre[]="Pepillo Perolillos";
// constantes clásicas de php
define('nombre', 'Òscar');
define('APELLIDO', 'Peroles');

const  OTRO="Carlos"; // constante para usar dentro de objetos o en la raíz de la app

echo '<p>'.nombre.' '.APELLIDO.'  y '.OTRO.' </p>';




echo $primera_var. " - ".$primer_numero." - ".$segundo_numero." - ".$verdadero_o_no. " - ".$nulo."<br />";

echo gettype($segundo_numero);
echo "<br />";
var_dump($primer_numero);
echo "<br />";
var_dump($mi_nombre);


echo "<ul>"
."<li>Opción 1</li>"
."<li>Opción 2</li>"
."<li>Opción 3</li>"
."<li>Opción 4</li>"
."</ul>";

echo "Primer texto en php sin html<br />";
echo "<h2> hola Mundo</h2>";

$num1=40;
$num2=26;

echo 'Suma: '.($num1+$num2).'<br />' ;
echo 'Resta: '.($num1-$num2).'<br />' ;
echo 'Multiplicación '.($num1*$num2).'<br />' ;
echo 'División: '.($num1/$num2).'<br />' ;
echo 'Resto: '.($num1%$num2).'<br />' ;



?>