<?php 

/**
 * funcion basica
 * palabra clave funciotn
 * nombre funciton
 * parametros nombre
 */


 //VALORES
function saludar($nombre)
{
    $msg = "Hola, $nombre";
    return $msg;
}

echo saludar('Felipe');

//REFERENCIAS
$curso= 'PHP';
function path($curso)
{
    /**
     * quiero cambiarle el nombre al curso
     */
    $curso = 'LARAVEL';
    echo $curso;
}

path($curso);
echo $curso;

/**
 * bueno segun veo en este ejemplo imprime tanto el valor por fuera de la funcion
 * tnto como el de adentro
 * si queremos que el valor de afuera se re declare agragamos
 * antes del parametro
 * &
 */


 //parametro por referencia
$curso2 = 'Js';
function path2(&$curso2)
{
    /**
     * quiero cambiarle el nombre al curso
     */
    $curso2 = 'Nodejs';
    echo $curso2;
}

path2($curso2);
echo $curso2;


//prederminado

function saludo2($name='user default'){
    return "Hola, $name <br>";
}

echo saludo2();
echo saludo2("Pipe");