<?php

namespace Yosmy\Recharge;

/**
 * @di\service()
 */
interface CollectTransfers
{
    /**
     * @param string[]|null $ids
     * @param string|null   $user
     * @param string|null   $product
     * @param int|null      $from
     * @param int|null      $to
     * @param int|null      $skip
     * @param int|null      $limit
     * @param array|null    $sort
     *
     * @return Transfers
     */
    public function collect(
        ?array $ids,
        ?string $user,
        ?string $product,
        ?int $from,
        ?int $to,
        ?int $skip,
        ?int $limit,
        ?array $sort
    ): Transfers;
}
