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

        return $this->sendResponse($campeonatos->toArray(), 'Campeonatos retrieved successfully');
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

        return $this->sendResponse($campeonatos->toArray(), 'Campeonatos saved successfully');
    }

    /**
     * Display the specified Campeonatos.
     * GET|HEAD /campeonatos/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Campeonatos $campeonatos */
        $campeonatos = $this->campeonatosRepository->find($id);

        if (empty($campeonatos)) {
            return $this->sendError('Campeonatos not found');
        }

        return $this->sendResponse($campeonatos->toArray(), 'Campeonatos retrieved successfully');
    }

    /**
     * Update the specified Campeonatos in storage.
     * PUT/PATCH /campeonatos/{id}
     *
     * @param int $id
     * @param UpdateCampeonatosAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCampeonatosAPIRequest $request)
    {
        $input = $request->all();

        /** @var Campeonatos $campeonatos */
        $campeonatos = $this->campeonatosRepository->find($id);

        if (empty($campeonatos)) {
            return $this->sendError('Campeonatos not found');
        }

        $campeonatos = $this->campeonatosRepository->update($input, $id);

        return $this->sendResponse($campeonatos->toArray(), 'Campeonatos updated successfully');
    }

    /**
     * Remove the specified Campeonatos from storage.
     * DELETE /campeonatos/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Campeonatos $campeonatos */
        $campeonatos = $this->campeonatosRepository->find($id);

        if (empty($campeonatos)) {
            return $this->sendError('Campeonatos not found');
        }

        $campeonatos->delete();

        return $this->sendSuccess('Campeonatos deleted successfully');
    }
}
