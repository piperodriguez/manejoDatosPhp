<?php

/**
 * una funcion anonima sin nombre
 * se usa cuando una variable requiere logica
 * nos referimos a ella a travez de una variable
 */
/*$saludar = function ($name)
{
    return "Hola, $name";
};

echo $saludar('Felipe');*/


function saludar(Closure $idioma, $nombre){
    return $idioma($nombre);
}

$espanol = function ($nombre){
    return "Hola, $nombre <br>";
};

$ingles = function ($nombre) {
    return "Hello, $nombre <br>";
};

echo saludar($espanol, 'Juan Felipe');


echo saludar($ingles, 'Juan Felipe');