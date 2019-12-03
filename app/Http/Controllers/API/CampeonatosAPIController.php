<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateCampeonatosAPIRequest;
use App\Http\Requests\API\UpdateCampeonatosAPIRequest;
use App\Models\Campeonatos;
use App\Repositories\CampeonatosRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class CampeonatosController
 * @package App\Http\Controllers\API
 */

class CampeonatosAPIController extends AppBaseController
{
    /** @var  CampeonatosRepository */
    private $campeonatosRepository;

    public function __construct(CampeonatosRepository $campeonatosRepo)
    {
        $this->campeonatosRepository = $campeonatosRepo;
    }

    /**
     * Display a listing of the Campeonatos.
     * GET|HEAD /campeonatos
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $campeonatos = $this->campeonatosRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($campeonatos->toArray(), 'Campeonato recuperado com sucesso.');
    }

    /**
     * Store a newly created Campeonatos in storage.
     * POST /campeonatos
     *
     * @param CreateCampeonatosAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateCampeonatosAPIRequest $request)
    {
        $input = $request->all();

        $campeonatos = $this->campeonatosRepository->create($input);

        return $this->sendResponse($campeonatos->toArray(), 'Campeonato salvo com sucesso.');
    }

    /**
     * Display the specified Campeonatos.
     * GET|HEAD /campeonatos/{campId}
     *
     * @param int campId
     *
     * @return Response
     */
    public function show($campId)
    {
        /** @var Campeonatos $campeonatos */
        $campeonatos = $this->campeonatosRepository->find($campId);

        if (empty($campeonatos)) {
            return $this->sendError('Campeonato não encontrado.');
        }

        return $this->sendResponse($campeonatos->toArray(), 'Campeonato recuperado com sucesso.');
    }

    /**
     * Update the specified Campeonatos in storage.
     * PUT/PATCH /campeonatos/{campId}
     *
     * @param int $campId
     * @param UpdateCampeonatosAPIRequest $request
     *
     * @return Response
     */
    public function update($campId, UpdateCampeonatosAPIRequest $request)
    {
        $input = $request->all();

        /** @var Campeonatos $campeonatos */
        $campeonatos = $this->campeonatosRepository->find($campId);

        if (empty($campeonatos)) {
            return $this->sendError('Campeonato não encontrado.');
        }

        $campeonatos = $this->campeonatosRepository->update($input, $campId);

        return $this->sendResponse($campeonatos->toArray(), 'Campeonato alterado com sucesso.');
    }

    /**
     * Remove the specified Campeonatos from storage.
     * DELETE /campeonatos/{campId}
     *
     * @param int $campId
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($campId)
    {
        /** @var Campeonatos $campeonatos */
        $campeonatos = $this->campeonatosRepository->find($campId);

        if (empty($campeonatos)) {
            return $this->sendError('Campeonato não encontrado.');
        }

        $campeonatos->delete();

        return $this->sendSuccess('Campeonato excluído com sucesso.');
    }

    /**
     * Include times on camp.
     *
     * @param int $campId
     *
     * @throws \Exception
     *
     * @return Response
     *
    public function include($campId)
    {

    }*/

    /**
     * Sort rodadas.
     *
     * @param int $campId
     *
     * @throws \Exception
     *
     * @return Response
     *
    public function sort($campId)
    {

    }*/

    /**
     * Include results.
     *
     * @param int $campId
     *
     * @throws \Exception
     *
     * @return Response
     *
    public function results($campId)
    {

    }*/
}
