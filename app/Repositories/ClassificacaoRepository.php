<?php

namespace App\Repositories;

use App\Models\Classificacao;
use App\Repositories\BaseRepository;

/**
 * Class ClassificacaoRepository
 * @package App\Repositories
 * @version December 3, 2019, 9:23 pm -03
*/

class ClassificacaoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        return Classificacao::class;
    }
}
