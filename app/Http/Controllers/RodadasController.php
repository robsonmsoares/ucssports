<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRodadasRequest;
use App\Http\Requests\UpdateRodadasRequest;
use App\Repositories\RodadasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class RodadasController extends AppBaseController
{
    /** @var  RodadasRepository */
    private $rodadasRepository;

    public function __construct(RodadasRepository $rodadasRepo)
    {
        $this->rodadasRepository = $rodadasRepo;
    }

    /**
     * Display a listing of the Rodadas.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $rodadas = $this->rodadasRepository->all();

        return view('rodadas.index')->with('rodadas', $rodadas);
    }

    /**
     * Show the form for creating a new Rodadas.
     *
     * @return Response
     */
    public function create()
    {
        return view('rodadas.create');
    }

    /**
     * Store a newly created Rodadas in storage.
     *
     * @param CreateRodadasRequest $request
     *
     * @return Response
     */
    public function store(CreateRodadasRequest $request)
    {
        $input = $request->all();

        $rodadas = $this->rodadasRepository->create($input);

        Flash::success('Rodada salva com sucesso.');

        return redirect(route('rodadas.index'));
    }

    /**
     * Display the specified Rodadas.
     *
     * @param int $rodada
     *
     * @return Response
     */
    public function show($rodada)
    {
        $rodadas = $this->rodadasRepository->find($rodada);

        if (empty($rodadas)) {
            Flash::error('Rodada não encontrada.');

            return redirect(route('rodadas.index'));
        }

        return view('rodadas.show')->with('rodadas', $rodadas);
    }

    /**
     * Show the form for editing the specified Rodadas.
     *
     * @param int $rodada
     *
     * @return Response
     */
    public function edit($rodada)
    {
        $rodadas = $this->rodadasRepository->find($rodada);

        if (empty($rodadas)) {
            Flash::error('Rodada não encontrada.');

            return redirect(route('rodadas.index'));
        }

        return view('rodadas.edit')->with('rodadas', $rodada);
    }

    /**
     * Update the specified Rodadas in storage.
     *
     * @param int $rodada
     * @param UpdateRodadasRequest $request
     *
     * @return Response
     */
    public function update($rodada, UpdateRodadasRequest $request)
    {
        $rodadas = $this->rodadasRepository->find($rodada);

        if (empty($rodadas)) {
            Flash::error('Rodada não encontrada.');

            return redirect(route('rodadas.index'));
        }

        $rodadas = $this->rodadasRepository->update($request->all(), $rodada);

        Flash::success('Rodada alterada com sucesso.');

        return redirect(route('rodadas.index'));
    }

    /**
     * Remove the specified Rodadas from storage.
     *
     * @param int $rodada
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($rodada)
    {
        $rodadas = $this->rodadasRepository->find($rodada);

        if (empty($rodadas)) {
            Flash::error('Rodada não encontrada.');

            return redirect(route('rodadas.index'));
        }

        $this->rodadasRepository->delete($rodada);

        Flash::success('Rodada excluída com sucesso.');

        return redirect(route('rodadas.index'));
    }
}
