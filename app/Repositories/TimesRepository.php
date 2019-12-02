<?php

namespace App\Repositories;

use App\Models\Times;
use App\Repositories\BaseRepository;

/**
 * Class TimesRepository
 * @package App\Repositories
 * @version December 2, 2019, 6:15 pm -03
*/

class TimesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nome',
        'estado',
        'apelido',
        'dataFundacao',
        'nomeEstadio'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Times::class;
    }
}
