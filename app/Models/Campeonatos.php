<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Campeonatos
 * @package App\Models
 * @version December 2, 2019, 6:28 pm -03
 *
 * @property string nome
 * @property integer ano
 * @property integer qtdTimes
 * @property string casaFora
 * @property string dataInicio
 */
class Campeonatos extends Model
{
    use SoftDeletes;

    public $table = 'campeonatos';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public $fillable = [
        'nome',
        'ano',
        'qtdTimes',
        'casaFora',
        'dataInicio'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'campId' => 'integer',
        'nome' => 'string',
        'ano' => 'integer',
        'qtdTimes' => 'integer',
        'casaFora' => 'string',
        'dataInicio' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nome' => 'required',
        'ano' => 'required',
        'qtdTimes' => 'required',
        'casaFora' => 'required',
        'dataInicio' => 'required'
    ];


}
