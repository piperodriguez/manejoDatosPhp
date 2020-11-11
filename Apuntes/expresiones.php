<?php

//$passsword = '123456';

/**
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

//$validacion1 = (bool)preg_match('/^[0-9]{6,9}$/', $passsword);

if (isset($_POST['password'])) {
    $validacion1 = (bool)preg_match('/^[0-9]{6,9}$/', $_POST['password']);
    if ($validacion1 == true) {
        echo "OK";
    } else {
        $msg = "su contraseña solo puede contener caracteres numericos";
        echo "FAIL -> $msg";
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Expresiones regulares php</title>
</head>

<body>
    <header>
        <h3>Expresiones regulares</h3>
    </header>
    <form action="#" method="POST">
        <label for="password">Ingresa tu contraseña : </label>
        <input type="password" name="password">
        <br>
        <input type="submit" value="send">
    </form>
</body>

</html>