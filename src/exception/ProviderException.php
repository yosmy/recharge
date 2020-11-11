<?php

namespace Yosmy\Recharge;

class ProviderException extends KnownException
{
    /**
     */
    public function __construct()
    {
        parent::__construct("La operadora de teléfono devolvió un error. Por favor intenta más tarde");
    }
}