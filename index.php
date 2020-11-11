<?php 

require __DIR__ .'/vendor/autoload.php';
use App\Validate;


/**
 * validando un email
 */
$email = Validate::email('juan@gmail.com');
var_dump($email);
$email2 = Validate::email('juangmail.com');
var_dump($email2);


/**
 * validando url
 */

$url = Validate::url('https://solati.com');
var_dump($url);

$url2 = Validate::url('solati.com');
var_dump($url2);

/**
 * validando password
 */

 $pass = Validate::password('Solati123*');
 var_dump($pass);

$pass2 = Validate::password('123456');
var_dump($pass2); 
