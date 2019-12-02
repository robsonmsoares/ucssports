<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Times
 * @package App\Models
 * @version December 2, 2019, 6:15 pm -03
 *
 * @property string nome
 * @property string estado
 * @property string apelido
 * @property string dataFundacao
 * @property string nomeEstadio
 */
class Times extends Model
{
    use SoftDeletes;

    public $table = 'times';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nome',
        'estado',
        'apelido',
        'dataFundacao',
        'nomeEstadio'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'timeId' => 'integer',
        'nome' => 'string',
        'estado' => 'string',
        'apelido' => 'string',
        'dataFundacao' => 'date',
        'nomeEstadio' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nome' => 'required',
        'estado' => 'required',
        'apelido' => 'required',
        'dataFundacao' => 'required',
        'nomeEstadio' => 'required'
    ];

    
}
