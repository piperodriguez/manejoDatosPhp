<?php

namespace App;

class Validate
{
    /**
     * validacion para un emai
     */
    public static function email($email)
    {
        return (bool) filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}
