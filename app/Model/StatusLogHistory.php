<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class StatusLogHistory extends Model
{
    /**
     * Table Name
     *
     * @var string
     */
    protected $table = 'status_log_history';

    /**
     * Properties of StatusLogHistory table
     *
     * @var array
     */
    protected $attributes = [
        'id',
        'status_id',
        'log_date',
        'note'
    ];
}
