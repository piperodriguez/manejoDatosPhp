<?php

use PHPUnit\Framework\TestCase;
use App\Validate;

/**
 * CLASE donde se pueden realiza validaciones
 */
class ValidateTest extends TestCase
{
    public function testEmail()
    {
        $email = Validate::email('juanfelipe@gmail.com');
        $this->assertTrue($email);
    }
    public function testUrl()
    {
        $url = Validate::url('https://google.com');
        $this->assertTrue($url);
        $url2 = Validate::url('google.com');
        $this->assertFalse($url2);
    }

    public function testPassword()
    {
        $clave = Validate::password('123456');
        $this->assertTrue($clave);
        $clave = Validate::password('as123456');
        $this->assertFalse($clave);
    }
}
