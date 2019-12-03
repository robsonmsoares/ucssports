<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campeonato_times extends Model
{
    use \Illuminate\Database\Eloquent\SoftDeletes;

    public $table = 'times';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public $fillable = [
        'campId',
        'timeId'
];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
    'campId' => 'integer',
    'timeId' => 'string'
];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
    'campId' => 'required',
    'timeId' => 'required'
];
}
