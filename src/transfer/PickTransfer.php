<?php

namespace Yosmy\Recharge;

/**
 * @di\service()
 */
interface PickTransfer
{
    /**
     * @param string $id
     *
     * @return Transfer
     */
    public function pick(
        string $id
    ): Transfer;
}
