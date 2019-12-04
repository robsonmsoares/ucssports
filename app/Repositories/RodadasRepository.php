<?php

namespace App\Repositories;

use App\Models\Rodadas;
use App\Repositories\BaseRepository;

/**
 * Class RodadasRepository
 * @package App\Repositories
 * @version December 4, 2019, 9:33 am -03
*/

class RodadasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'rodada',
        'campId',
        'dataJogo',
        'horaJogo',
        'localJogo'
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
        return Rodadas::class;
    }
}
