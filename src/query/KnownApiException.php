<?php

namespace Yosmy\Recharge;

use Exception;

class KnownApiException extends Exception
{
    /**
     * @var array
     */
    private $response;

    /**
     * @param array $response
     */
    public function __construct(array $response)
    {
        $this->response = $response;

        parent::__construct();
    }

    /**
     * @return array
     */
    public function getResponse(): array
    {
        return $this->response;
    }

    /**
     * @return array
     */
    public function getFirstError(): array
    {
        return $this->response[0];
    }
}