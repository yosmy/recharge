<?php

namespace Yosmy\Recharge;

interface Transfer
{
    /**
     * @return string
     */
    public function getId(): string;

    /**
     * @return string
     */
    public function getUser(): string;

    /**
     * @return string
     */
    public function getRid(): string;

    /**
     * @return string
     */
    public function getAccount(): string;

    /**
     * @return string
     */
    public function getProduct(): string;

    /**
     * @return float
     */
    public function getAmount(): float;

    /**
     * @return string
     */
    public function getReceive(): string;

    /**
     * @return string
     */
    public function getCurrency(): string;

    /**
     * @return float
     */
    public function getProfit(): float;

    /**
     * @return int
     */
    public function getDate(): int;
}