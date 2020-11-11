<?php

namespace Yosmy\Recharge;

use Exception as BaseException;

class KnownException extends BaseException implements Exception
{
    /**
     * @param string $message
     */
    public function __construct(
        string $message
    ) {
        parent::__construct($message);
    }
}