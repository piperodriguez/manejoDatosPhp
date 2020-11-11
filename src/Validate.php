<?php

namespace App;
/**
 * Clase padre de seguridad de los datos
 * @author Felipe Rodríguez
 */
class Validate
{
    /**
     * validacion para un emai
     */
    public static function email($email)
    {
        return (bool) filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    /**
     * validacion para una url
     */
    public static function url($url)
    {
        return (bool) filter_var($url, FILTER_VALIDATE_URL);
    }

    /**
     * verificar contraseña con expresion regular
     * como verifico que la contraseña vaya del 1 al 6
     * bueno l siguiente validacion significa
     * corchetes para el patro solo elementos del 0-9
     * despues la condicion {} minimo 6 elementos maximo 9
     * contraseña solo PARA NUMEROS DE 6 A 9 CARACTARES
     * 
     * si el retorno lo deseo como boolean
     * (bool)preg_match('/^[0-9]{6,9}$/',$passsword)
     * default preg_match('/^[0-9]{6,9}$/',$passsword)
     */
    public static function password($pass)
    {
        return (bool)preg_match('/^[0-9]{6,9}$/', $pass);
    }
}
