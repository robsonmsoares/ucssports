<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCampeonatosRequest;
use App\Http\Requests\UpdateCampeonatosRequest;
use App\Repositories\CampeonatosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CampeonatosController extends AppBaseController
{
    /** @var  CampeonatosRepository */
    private $campeonatosRepository;

    public function __construct(CampeonatosRepository $campeonatosRepo)
    {
        $this->campeonatosRepository = $campeonatosRepo;
    }

    /**
     * Display a listing of the Campeonatos.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $campeonatos = $this->campeonatosRepository->all();

        return view('campeonatos.index')
            ->with('campeonatos', $campeonatos);
    }

    /**
     * Show the form for creating a new Campeonatos.
     *
     * @return Response
     */
    public function create()
    {
        return view('campeonatos.create');
    }

    /**
     * Store a newly created Campeonatos in storage.
     *
     * @param CreateCampeonatosRequest $request
     *
     * @return Response
     */
    public function store(CreateCampeonatosRequest $request)
    {
        $input = $request->all();

        $campeonatos = $this->campeonatosRepository->create($input);

        Flash::success('Campeonato salvo com sucesso.');

        return redirect(route('campeonatos.index'));
    }

    /**
     * Display the specified Campeonatos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $campeonatos = $this->campeonatosRepository->find($id);

        if (empty($campeonatos)) {
            Flash::error('Campeonato não encontrado');

            return redirect(route('campeonatos.index'));
        }

        return view('campeonatos.show')->with('campeonatos', $campeonatos);
    }

    /**
     * Show the form for editing the specified Campeonatos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $campeonatos = $this->campeonatosRepository->find($id);

        if (empty($campeonatos)) {
            Flash::error('Campeonato não encontrado');

            return redirect(route('campeonatos.index'));
        }

        return view('campeonatos.edit')->with('campeonatos', $campeonatos);
    }

    /**
     * Update the specified Campeonatos in storage.
     *
     * @param int $id
     * @param UpdateCampeonatosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCampeonatosRequest $request)
    {
        $campeonatos = $this->campeonatosRepository->find($id);

        if (empty($campeonatos)) {
            Flash::error('Campeonato não encontrado');

            return redirect(route('campeonatos.index'));
        }

        $campeonatos = $this->campeonatosRepository->update($request->all(), $id);

        Flash::success('Campeonato alterado com sucesso.');

        return redirect(route('campeonatos.index'));
    }

    /**
     * Remove the specified Campeonatos from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $campeonatos = $this->campeonatosRepository->find($id);

        if (empty($campeonatos)) {
            Flash::error('Campeonato não encontrado');

            return redirect(route('campeonatos.index'));
        }

        $this->campeonatosRepository->delete($id);

        Flash::success('Campeonato excluído com sucesso.');

        return redirect(route('campeonatos.index'));
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
