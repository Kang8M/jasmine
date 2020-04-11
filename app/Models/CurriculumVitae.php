<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CurriculumVitae extends Model
{
    /**
     * Table Name
     *
     * @var string
     */
    protected $table = 'curriculum_vitae';

    /**
     * Properties of StatusLogHistory table
     *
     * @var array
     */
    protected $attributes = [
        'id',
        'contact_date',
        'first_name',
        'last_name',
        'birth_year',
        'phone',
        'email',
        'other_email',
        'skype',
        'linked_in',
        'facebook',
        'position',
        'programing_language',
        'company',
        'english',
        'sending_email',
        'inbox',
        'skype_chat',
        'call',
        'receive_cv',
        'pv_one',
        'pv_two',
        'source_id',
        'status_id'
    ];
}
