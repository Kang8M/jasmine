<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    /**
     * Table Name
     *
     * @var string
     */
    protected $table = 'status';

    /**
     * Properties of Status table
     *
     * @var array
     */
    protected $attributes = [
        'id',
        'name'
    ];
}
