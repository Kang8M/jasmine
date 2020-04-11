<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
    /**
     * Table Name
     *
     * @var string
     */
    protected $table = 'source';

    /**
     * Properties of Source table
     *
     * @var array
     */
    protected $attributes = [
        'id',
        'name'
    ];
}
