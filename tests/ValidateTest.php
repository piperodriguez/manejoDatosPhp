<?php

use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase
{
    public function testEmail()
    {
        $email = Validate::email('juanfelipe@gmail.com');
        $this->assertTrue($email);
    }
}
