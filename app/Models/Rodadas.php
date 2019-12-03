<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rodadas extends Model
{
    use SoftDeletes;

    public $table = 'rodadas';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public $fillable = [
        'rodada',
        'campId',
        'dataJogo',
        'horaJogo',
        'localJogo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'rodada' => 'integer',
        'campId' => 'integer',
        'dataJogo' => 'date',
        'horaJogo' => 'dateTime',
        'localJogo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'rodada' => 'required',
        'campId' => 'required',
        'dataJogo' => 'required',
        'horaJogo' => 'required',
        'localJogo' => 'required'
    ];


}
