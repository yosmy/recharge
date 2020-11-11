<?php

namespace Yosmy\Recharge;

use Yosmy\Mongo;
use MongoDB\Model\BSONDocument;

class BaseTransfer extends BSONDocument implements Transfer
{
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->offsetGet('_id');
    }

    /**
     * @return string
     */
    public function getUser(): string
    {
        return $this->offsetGet('user');
    }

    /**
     * @return string
     */
    public function getRid(): string
    {
        return $this->offsetGet('rid');
    }

    /**
     * @return string
     */
    public function getAccount(): string
    {
        return $this->offsetGet('account');
    }

    /**
     * @return string
     */
    public function getProduct(): string
    {
        return $this->offsetGet('product');
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->offsetGet('amount');
    }

    /**
     * @return string
     */
    public function getReceive(): string
    {
        return $this->offsetGet('receive');
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->offsetGet('currency');
    }

    /**
     * @return float
     */
    public function getProfit(): float
    {
        return $this->offsetGet('profit');
    }

    /**
     * @return int
     */
    public function getDate(): int
    {
        return $this->offsetGet('date');
    }

    /**
     * {@inheritdoc}
     */
    public function bsonUnserialize(array $data)
    {
        /** @var Mongo\DateTime $date */
        $date = $data['date'];
        $data['date'] = $date->toDateTime()->getTimestamp();

        parent::bsonUnserialize($data);
    }

    /**
     * {@inheritDoc}
     */
    public function jsonSerialize(): object
    {
        $data = parent::jsonSerialize();

        $data->id = $data->_id;

        unset($data->_id);

        return $data;
    }
}