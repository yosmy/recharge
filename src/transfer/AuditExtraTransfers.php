<?php

namespace Yosmy\Recharge;

use Yosmy;
use Traversable;

/**
 * @di\service()
 */
class AuditExtraTransfers
{
    /**
     * @var ManageTransferCollection
     */
    private $manageTransferCollection;

    /**
     * @param ManageTransferCollection $manageTransferCollection
     */
    public function __construct(
        ManageTransferCollection $manageTransferCollection
    ) {
        $this->manageTransferCollection = $manageTransferCollection;
    }

    /**
     * @param Yosmy\Mongo\ManageCollection $manageCollection
     *
     * @return Traversable
     */
    public function audit(
        Yosmy\Mongo\ManageCollection $manageCollection
    ): Traversable
    {
        return $this->manageTransferCollection->aggregate(
            [
                [
                    '$lookup' => [
                        'localField' => 'user',
                        'from' => $manageCollection->getName(),
                        'as' => 'parent',
                        'foreignField' => '_id',
                    ]
                ],
                [
                    '$match' => [
                        'parent._id' => [
                            '$exists' => false
                        ]
                    ],
                ]
            ]
        );
    }
}