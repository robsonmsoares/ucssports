<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Rodadas
 * @package App\Models
 * @version December 4, 2019, 9:33 am -03
 *
 * @property integer rodada
 * @property integer campId
 * @property string dataJogo
 * @property string|\Carbon\Carbon horaJogo
 * @property string localJogo
 */
class Rodadas extends Model
{
    public $table = 'rodadas';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    const DELETED_AT = 'deleted_at';

    protected $dates = ['deleted_at'];

    protected $primaryKey = 'rodada';

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
        'horaJogo' => 'datetime',
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
