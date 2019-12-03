<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTimesRequest;
use App\Http\Requests\UpdateTimesRequest;
use App\Repositories\TimesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TimesController extends AppBaseController
{
    /** @var  TimesRepository */
    private $timesRepository;

    public function __construct(TimesRepository $timesRepo)
    {
        $this->timesRepository = $timesRepo;
    }

    /**
     * Display a listing of the Times.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $times = $this->timesRepository->all();

        return view('times.index')
            ->with('times', $times);
    }

    /**
     * Show the form for creating a new Times.
     *
     * @return Response
     */
    public function create()
    {
        return view('times.create');
    }

    /**
     * Store a newly created Times in storage.
     *
     * @param CreateTimesRequest $request
     *
     * @return Response
     */
    public function store(CreateTimesRequest $request)
    {
        $input = $request->all();

        $times = $this->timesRepository->create($input);

        Flash::success('Time salvo com sucesso.');

        return redirect(route('times.index'));
    }

    /**
     * Display the specified Times.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($timeId)
    {
        $times = $this->timesRepository->find($timeId);

        if (empty($times)) {
            Flash::error('Time não encontrado');

            return redirect(route('times.index'));
        }

        return view('times.show')->with('times', $times);
    }

    /**
     * Show the form for editing the specified Times.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($timeId)
    {
        $times = $this->timesRepository->find($timeId);

        if (empty($times)) {
            Flash::error('Time não encontrado');

            return redirect(route('times.index'));
        }

        return view('times.edit')->with('times', $times);
    }

    /**
     * Update the specified Times in storage.
     *
     * @param int $id
     * @param UpdateTimesRequest $request
     *
     * @return Response
     */
    public function update($timeId, UpdateTimesRequest $request)
    {
        $times = $this->timesRepository->find($timeId);

        if (empty($times)) {
            Flash::error('Time não encontrado');

            return redirect(route('times.index'));
        }

        $times = $this->timesRepository->update($request->all(), $timeId);

        Flash::success('Time alterado com sucesso.');

        return redirect(route('times.index'));
    }

    /**
     * Remove the specified Times from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($timeId)
    {
        $times = $this->timesRepository->find($timeId);

        if (empty($times)) {
            Flash::error('Time não encontrado');

            return redirect(route('times.index'));
        }

        $this->timesRepository->delete($id);

        Flash::success('Time excluído com sucesso.');

        return redirect(route('times.index'));
    }
}
