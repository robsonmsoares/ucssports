<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Classificacao
 * @package App\Models
 * @version December 3, 2019, 9:23 pm -03
 *
 * @property integer posicao
 * @property integer campId
 * @property integer rodada
 * @property integer timeId
 * @property integer pontos
 * @property integer vitorias
 * @property integer empates
 * @property integer derrotas
 * @property integer golsPro
 * @property integer golsContra
 * @property integer saldoGols
 */
class Classificacao extends Model
{
    public $table = 'classifications';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];

    protected $primaryKey = 'classificationId';

    public $fillable = [
        'posicao',
        'campId',
        'rodada',
        'timeId',
        'pontos',
        'vitorias',
        'empates',
        'derrotas',
        'golsPro',
        'golsContra',
        'saldoGols'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'classificationId' => 'integer',
        'posicao' => 'integer',
        'campId' => 'integer',
        'rodada' => 'integer',
        'timeId' => 'integer',
        'pontos' => 'integer',
        'vitorias' => 'integer',
        'empates' => 'integer',
        'derrotas' => 'integer',
        'golsPro' => 'integer',
        'golsContra' => 'integer',
        'saldoGols' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'posicao' => 'required',
        'campId' => 'required',
        'rodada' => 'required',
        'timeId' => 'required',
        'pontos' => 'required',
        'vitorias' => 'required',
        'empates' => 'required',
        'derrotas' => 'required',
        'golsPro' => 'required',
        'golsContra' => 'required',
        'saldoGols' => 'required'
    ];


}
