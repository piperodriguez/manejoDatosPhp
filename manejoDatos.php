<?php

// ALTERAR
echo "<h1><b>ALTERAR</h1><br>";

$text = "PHP es UN LENGUAJE";
echo $text.'<br>';
/**
 * los datos los necesitamos imprimir con un formato
 * minuscula
 */
 echo strtolower($text).'<br>';
/**
 * formato mayuscula
 */
echo strtoupper($text) . '<br>';
/**
 * primer elemento en minuscula
 */
echo lcfirst($text) . '<br>';
/**
 * primer elemento en mayuscua
 */
echo ucfirst($text) . '<br>';

// REMPLAZAR

echo "<h1><b>REMPLAZAR</h1><br>";
/**
* remplazar los espacios por un guin
*/
$text2 = "REPASO Estructura php";

$slug = str_replace(' ','-', $text2);

/**
 * poner todo el texto en minuscula
 */

$slug = strtolower($slug);

echo $slug;

/**
* remplazar una palabra por otra
*/

$remplazo = str_replace('php','javascript', $slug);

echo "<br> $remplazo <br>";

//MODIFICACION
echo "<h1><b>MODIFICACION</h1><br>";
/**
 * ejemplo de como imprimir un cod de barras
 * PRIMER PARAMETRO quiero que tenga 8 valores
 * SEGUNDO PARAMETRO que el restante los cree por el simbolo que le indique
 * TERCER PARAMETRO que le de un buen formato. STR_PAD_BOTH. STR_PAD_LEFT
 */
$code = 39;
$codeHash = str_pad($code, 8, '#', STR_PAD_BOTH);
echo $codeHash;

/**
 * para que en el momento de interactuar con bd
 * elimine las etiquetas las limoie
 * una buena manera de agragar seguridad al aplicativo
 * elimina html del valor de la variable
 * todo lo que tengo < && >
 */

$text3 = "<br><h1>Esto es una texto</h1>";
$text3 = strip_tags($text3);
echo $text3;

/**
 * en mayusculas no respeta ni ñ y tildes
 * existen elemntos monobyte y multibyte
 */

$text4 = "<br> Que se dice, año 2020, programación";
echo strtoupper($text4);// monobbyte
echo mb_strtoupper($text4); // multibyte
