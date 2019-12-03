<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jogos extends Model
{
    use \Illuminate\Database\Eloquent\SoftDeletes;

    public $table = 'rodadas';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    const DELETED_AT = 'deleted_at';

    public $fillable = [
        'jogosId',
        'campId',
        'rodada',
        'timeCasaId',
        'timeForaId',
        'golsTimeCasa',
        'golsTimeFora',
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
        'jogosId' => 'required',
        'campId' => 'required',
        'rodada' => 'required',
        'timeCasaId' => 'required',
        'timeForaId' => 'required',
        'golsTimeCasa' => 'required',
        'golsTimeFora' => 'required'
];
}
