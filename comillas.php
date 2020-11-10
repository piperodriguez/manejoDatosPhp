<?php

echo 'Un texto de una linea
Varias linesas
Comillas simple \' backslash \\ continuar con mas texto<br>';

$name = 'Felipe';

echo "Mi nombre es $name <br>";

$courses = [
    'backend' => [
        'PHP',
        'Laravel'
    ]
];

//ejemplo para imprimir un dato mas complejo ejemplo php


echo "{$courses['backend'][0]} <br>";


//ejemplp para mostrar un objeto


class User{
    public $name = 'Felipe';
}

$user = new User;

echo "$user->name quiere aprender {$courses['backend'][0]} <br>";


/*que loco wn*/

$teacher = 'italo';
$italo = 'Profesor de php';

echo "$teacher es ${$teacher} <br>";


function getTeacher(){
    return 'profesor';
}

$profesor = 'Felipe';

echo "${getTeacher()} enseña php";

//teoria de variables vairbales