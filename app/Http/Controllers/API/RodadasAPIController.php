<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateRodadasAPIRequest;
use App\Http\Requests\API\UpdateRodadasAPIRequest;
use App\Models\Rodadas;
use App\Repositories\RodadasRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class RodadasController
 * @package App\Http\Controllers\API
 */

class RodadasAPIController extends AppBaseController
{
    /** @var  RodadasRepository */
    private $rodadasRepository;

    public function __construct(RodadasRepository $rodadasRepo)
    {
        $this->rodadasRepository = $rodadasRepo;
    }

    /**
     * Display a listing of the Rodadas.
     * GET|HEAD /rodadas
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $rodadas = $this->rodadasRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($rodadas->toArray(), 'Rodada recuperada com sucesso.');
    }

    /**
     * Store a newly created Rodadas in storage.
     * POST /rodadas
     *
     * @param CreateRodadasAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateRodadasAPIRequest $request)
    {
        $input = $request->all();

        $rodadas = $this->rodadasRepository->create($input);

        return $this->sendResponse($rodadas->toArray(), 'Rodada salva com sucesso.');
    }

    /**
     * Display the specified Rodadas.
     * GET|HEAD /rodadas/{$rodada}
     *
     * @param int $rodada
     *
     * @return Response
     */
    public function show($rodada)
    {
        /** @var Rodadas $rodadas */
        $rodadas = $this->rodadasRepository->find($rodada);

        if (empty($rodadas)) {
            return $this->sendError('Rodada não encontrada.');
        }

        return $this->sendResponse($rodadas->toArray(), 'Rodada recuperada com sucesso.');
    }

    /**
     * Update the specified Rodadas in storage.
     * PUT/PATCH /rodadas/{$rodada}
     *
     * @param int $rodada
     * @param UpdateRodadasAPIRequest $request
     *
     * @return Response
     */
    public function update($rodada, UpdateRodadasAPIRequest $request)
    {
        $input = $request->all();

        /** @var Rodadas $rodadas */
        $rodadas = $this->rodadasRepository->find($rodada);

        if (empty($rodadas)) {
            return $this->sendError('Rodada não encontrada.');
        }

        $rodadas = $this->rodadasRepository->update($input, $rodada);

        return $this->sendResponse($rodadas->toArray(), 'Rodada alterada com sucesso.');
    }

    /**
     * Remove the specified Rodadas from storage.
     * DELETE /rodadas/{$rodada}
     *
     * @param int $rodada
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($rodada)
    {
        /** @var Rodadas $rodadas */
        $rodadas = $this->rodadasRepository->find($rodada);

        if (empty($rodadas)) {
            return $this->sendError('Rodada não encontrada.');
        }

        $rodadas->delete();

        return $this->sendSuccess('Rodada excluída com sucesso.');
    }
}
