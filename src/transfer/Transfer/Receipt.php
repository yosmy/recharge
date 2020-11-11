<?php

namespace Yosmy\Recharge\Transfer;

class Receipt
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var float
     */
    private $commission;

    /**
     * @var float
     */
    private $receive;

    /**
     * @var string
     */
    private $currency;

    /**
     * @param string      $id
     * @param float       $commission
     * @param float|null  $receive
     * @param string|null $currency
     */
    public function __construct(
        string $id,
        float $commission,
        ?float $receive,
        ?string $currency
    ) {
        $this->id = $id;
        $this->commission = $commission;
        $this->receive = $receive;
        $this->currency = $currency;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return float
     */
    public function getCommission(): float
    {
        return $this->commission;
    }

    /**
     * @return float
     */
    public function getReceive(): float
    {
        return $this->receive;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }
}