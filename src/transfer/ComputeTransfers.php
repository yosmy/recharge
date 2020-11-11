<?php

namespace Yosmy\Recharge;

/**
 * @di\service()
 */
interface ComputeTransfers
{
    const GROUP_BY_DAY = 'by-day';
    const GROUP_BY_MONTH = 'by-month';
    const GROUP_BY_YEAR = 'by-year';

    /**
     * @param string|null $user
     * @param int|null    $from
     * @param int|null    $to
     * @param string      $timezone
     * @param string|null $group
     *
     * @return array
     */
    public function compute(
        ?string $user,
        ?int $from,
        ?int $to,
        string $timezone,
        ?string $group
    ): array;
}
