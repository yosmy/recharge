<?php

namespace Yosmy\Recharge;

use Exception as BaseException;

class UnknownException extends BaseException implements Exception
{
    /**
     */
    public function __construct()
    {
        parent::__construct("Se produjo un error. Por favor intenta más tarde.");
    }
}