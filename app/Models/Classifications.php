<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Classification extends Model
{
    use SoftDeletes;

    public $table = 'times';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public $fillable = [
        'classificationId',
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
        'classificationId' => 'required',
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
