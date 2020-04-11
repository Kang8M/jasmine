<?php

namespace App\Models;

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

    /**
     * @var array
     */
    protected $fillable = [
        'name'
    ];
}
