<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateTimesAPIRequest;
use App\Http\Requests\API\UpdateTimesAPIRequest;
use App\Models\Times;
use App\Repositories\TimesRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class TimesController
 * @package App\Http\Controllers\API
 */

class TimesAPIController extends AppBaseController
{
    /** @var  TimesRepository */
    private $timesRepository;

    public function __construct(TimesRepository $timesRepo)
    {
        $this->timesRepository = $timesRepo;
    }

    /**
     * Display a listing of the Times.
     * GET|HEAD /times
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $times = $this->timesRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($times->toArray(), 'Time recuperado com sucesso.');
    }

    /**
     * Store a newly created Times in storage.
     * POST /times
     *
     * @param CreateTimesAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateTimesAPIRequest $request)
    {
        $input = $request->all();

        $times = $this->timesRepository->create($input);

        return $this->sendResponse($times->toArray(), 'Time salvo com sucesso.');
    }

    /**
     * Display the specified Times.
     * GET|HEAD /times/{timeId}
     *
     * @param int $timeId
     *
     * @return Response
     */
    public function show($timeId)
    {
        /** @var Times $times */
        $times = $this->timesRepository->find($timeId);

        if (empty($times)) {
            return $this->sendError('Time não encontrado.');
        }

        return $this->sendResponse($times, 'Time recuperado com sucesso.');
    }

    /**
     * Update the specified Times in storage.
     * PUT/PATCH /times/{timeId}
     *
     * @param int $timeId
     * @param UpdateTimesAPIRequest $request
     *
     * @return Response
     */
    public function update($timeId, UpdateTimesAPIRequest $request)
    {
        $input = $request->all();

        /** @var Times $times */
        $times = $this->timesRepository->find($timeId);

        if (empty($times)) {
            return $this->sendError('Time não encontrado.');
        }

        $times = $this->timesRepository->update($input, $timeId);

        return $this->sendResponse($times->toArray(), 'Time alterado com sucesso.');
    }

    /**
     * Remove the specified Times from storage.
     * DELETE /times/{timeId}
     *
     * @param int $timeId
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($timeId)
    {
        /** @var Times $times */
        $times = $this->timesRepository->find($timeId);

        if (empty($times)) {
            return $this->sendError('Time não encontrado.');
        }

        $times->delete();

        return $this->sendSuccess('Time excluído com sucesso.');
    }
}
