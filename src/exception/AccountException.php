<?php

namespace Yosmy\Recharge;

class AccountException extends KnownException
{
    /**
     */
    public function __construct()
    {
        parent::__construct("Por favor revisa que el número de teléfono esté bien");
    }
}