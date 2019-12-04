<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Jogos
 * @package App\Models
 * @version December 4, 2019, 10:01 am -03
 *
 * @property integer campId
 * @property integer rodada
 * @property integer timeCasaId
 * @property integer timeForaId
 * @property integer golsTimeCasa
 * @property integer golsTimeFora
 */
class Jogos extends Model
{
    public $table = 'jogos';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    const DELETED_AT = 'deleted_at';

    protected $dates = ['deleted_at'];

    protected $primaryKey = 'jogosId';

    public $fillable = [
        'campId',
        'rodada',
        'timeCasaId',
        'timeForaId',
        'golsTimeCasa',
        'golsTimeFora'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'jogosId' => 'integer',
        'campId' => 'integer',
        'rodada' => 'integer',
        'timeCasaId' => 'integer',
        'timeForaId' => 'integer',
        'golsTimeCasa' => 'integer',
        'golsTimeFora' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'campId' => 'required',
        'rodada' => 'required',
        'timeCasaId' => 'required',
        'timeForaId' => 'required',
        'golsTimeCasa' => 'required',
        'golsTimeFora' => 'required'
    ];


}
