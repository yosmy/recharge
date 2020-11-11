<?php

namespace Yosmy\Recharge;

interface QueryApi
{
    const METHOD_GET = 'get';
    const METHOD_POST = 'post';

    /**
     * @param string     $method
     * @param string     $uri
     * @param array|null $params
     *
     * @return array
     *
     * @throws KnownApiException|UnknownApiException
     */
    public function query(
        string $method,
        string $uri,
        array $params = []
    ): array;
}