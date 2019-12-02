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

        return $this->sendResponse($times->toArray(), 'Times retrieved successfully');
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

        return $this->sendResponse($times->toArray(), 'Times saved successfully');
    }

    /**
     * Display the specified Times.
     * GET|HEAD /times/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Times $times */
        $times = $this->timesRepository->find($id);

        if (empty($times)) {
            return $this->sendError('Times not found');
        }

        return $this->sendResponse($times->toArray(), 'Times retrieved successfully');
    }

    /**
     * Update the specified Times in storage.
     * PUT/PATCH /times/{id}
     *
     * @param int $id
     * @param UpdateTimesAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTimesAPIRequest $request)
    {
        $input = $request->all();

        /** @var Times $times */
        $times = $this->timesRepository->find($id);

        if (empty($times)) {
            return $this->sendError('Times not found');
        }

        $times = $this->timesRepository->update($input, $id);

        return $this->sendResponse($times->toArray(), 'Times updated successfully');
    }

    /**
     * Remove the specified Times from storage.
     * DELETE /times/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Times $times */
        $times = $this->timesRepository->find($id);

        if (empty($times)) {
            return $this->sendError('Times not found');
        }

        $times->delete();

        return $this->sendSuccess('Times deleted successfully');
    }
}
