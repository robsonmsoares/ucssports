<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateJogosAPIRequest;
use App\Http\Requests\API\UpdateJogosAPIRequest;
use App\Models\Jogos;
use App\Repositories\JogosRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class JogosController
 * @package App\Http\Controllers\API
 */

class JogosAPIController extends AppBaseController
{
    /** @var  JogosRepository */
    private $jogosRepository;

    public function __construct(JogosRepository $jogosRepo)
    {
        $this->jogosRepository = $jogosRepo;
    }

    /**
     * Display a listing of the Jogos.
     * GET|HEAD /jogos
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $jogos = $this->jogosRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($jogos->toArray(), 'Jogos retrieved successfully');
    }

    /**
     * Store a newly created Jogos in storage.
     * POST /jogos
     *
     * @param CreateJogosAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateJogosAPIRequest $request)
    {
        $input = $request->all();

        $jogos = $this->jogosRepository->create($input);

        return $this->sendResponse($jogos->toArray(), 'Jogos saved successfully');
    }

    /**
     * Display the specified Jogos.
     * GET|HEAD /jogos/{$jogosId}
     *
     * @param int $jogosId
     *
     * @return Response
     */
    public function show($jogosId)
    {
        /** @var Jogos $jogos */
        $jogos = $this->jogosRepository->find($jogosId);

        if (empty($jogos)) {
            return $this->sendError('Jogo não encontrado.');
        }

        return $this->sendResponse($jogos->toArray(), 'Jogo recuperado com sucesso.');
    }

    /**
     * Update the specified Jogos in storage.
     * PUT/PATCH /jogos/{$jogosId}
     *
     * @param int $jogosId
     * @param UpdateJogosAPIRequest $request
     *
     * @return Response
     */
    public function update($jogosId, UpdateJogosAPIRequest $request)
    {
        $input = $request->all();

        /** @var Jogos $jogos */
        $jogos = $this->jogosRepository->find($jogosId);

        if (empty($jogos)) {
            return $this->sendError('Jogo não encontrado.');
        }

        $jogos = $this->jogosRepository->update($input, $jogosId);

        return $this->sendResponse($jogos->toArray(), 'Jogo alterado com sucesso.');
    }

    /**
     * Remove the specified Jogos from storage.
     * DELETE /jogos/{$jogosId}
     *
     * @param int $jogosId
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($jogosId)
    {
        /** @var Jogos $jogos */
        $jogos = $this->jogosRepository->find($jogosId);

        if (empty($jogos)) {
            return $this->sendError('Jogo não encontrado.');
        }

        $jogos->delete();

        return $this->sendSuccess('Jogo excluído com sucesso.');
    }
}
