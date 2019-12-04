<?php

namespace App\Repositories;

use App\Models\Jogos;
use App\Repositories\BaseRepository;

/**
 * Class JogosRepository
 * @package App\Repositories
 * @version December 4, 2019, 10:01 am -03
*/

class JogosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'campId',
        'rodada',
        'timeCasaId',
        'timeForaId',
        'golsTimeCasa',
        'golsTimeFora'
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
        return Jogos::class;
    }
}
