<?php

namespace Yosmy\Recharge;

use Yosmy\Mongo;

class Transfers extends Mongo\Collection
{
    /**
     * @var Transfer[]
     */
    protected $cursor;
}
