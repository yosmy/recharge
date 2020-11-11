<?php

namespace Yosmy\Recharge;

interface SendTransfer
{
    /**
     * @param string $user
     * @param string $prefix,
     * @param string $account
     * @param string $product
     * @param float  $amount
     *
     * @return Transfer\Receipt
     *
     * @throws Exception
     */
    public function test(
        string $user,
        string $prefix,
        string $account,
        string $product,
        float $amount
    ): Transfer\Receipt;

    /**
     * @param string $user
     * @param string $prefix
     * @param string $account
     * @param string $product
     * @param float  $amount
     *
     * @return Transfer\Receipt
     *
     * @throws Exception
     */
    public function send(
        string $user,
        string $prefix,
        string $account,
        string $product,
        float $amount
    ): Transfer\Receipt;
}
