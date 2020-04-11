<?php

namespace App\Repositories\Status;

use App\Models\Status;
use App\Repositories\BaseRepository;

class StatusRepository extends BaseRepository implements StatusRepositoryInterface
{
    /**
     * StatusRepository constructor.
     *
     * @param Status $model
     */
    public function __construct(Status $model)
    {
        parent::__construct($model);
    }
}