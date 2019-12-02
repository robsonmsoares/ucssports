<?php

namespace App\Repositories;

use App\Models\Campeonatos;
use App\Repositories\BaseRepository;

/**
 * Class CampeonatosRepository
 * @package App\Repositories
 * @version December 2, 2019, 6:17 pm -03
*/

class CampeonatosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nome',
        'ano',
        'qtdTimes',
        'casaFora',
        'dataInicio'
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
        return Campeonatos::class;
    }
}
