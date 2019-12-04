<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateJogosRequest;
use App\Http\Requests\UpdateJogosRequest;
use App\Repositories\JogosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class JogosController extends AppBaseController
{
    /** @var  JogosRepository */
    private $jogosRepository;

    public function __construct(JogosRepository $jogosRepo)
    {
        $this->jogosRepository = $jogosRepo;
    }

    /**
     * Display a listing of the Jogos.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $jogos = $this->jogosRepository->all();

        return view('jogos.index')
            ->with('jogos', $jogos);
    }

    /**
     * Show the form for creating a new Jogos.
     *
     * @return Response
     */
    public function create()
    {
        return view('jogos.create');
    }

    /**
     * Store a newly created Jogos in storage.
     *
     * @param CreateJogosRequest $request
     *
     * @return Response
     */
    public function store(CreateJogosRequest $request)
    {
        $input = $request->all();

        $jogos = $this->jogosRepository->create($input);

        Flash::success('Jogo salvo com sucesso.');

        return redirect(route('jogos.index'));
    }

    /**
     * Display the specified Jogos.
     *
     * @param int $jogosId
     *
     * @return Response
     */
    public function show($jogosId)
    {
        $jogos = $this->jogosRepository->find($jogosId);

        if (empty($jogos)) {
            Flash::error('Jogo não encontrado.');

            return redirect(route('jogos.index'));
        }

        return view('jogos.show')->with('jogos', $jogos);
    }

    /**
     * Show the form for editing the specified Jogos.
     *
     * @param int $jogosId
     *
     * @return Response
     */
    public function edit($jogosId)
    {
        $jogos = $this->jogosRepository->find($jogosId);

        if (empty($jogos)) {
            Flash::error('Jogo não encontrado.');

            return redirect(route('jogos.index'));
        }

        return view('jogos.edit')->with('jogos', $jogos);
    }

    /**
     * Update the specified Jogos in storage.
     *
     * @param int $jogosId
     * @param UpdateJogosRequest $request
     *
     * @return Response
     */
    public function update($jogosId, UpdateJogosRequest $request)
    {
        $jogos = $this->jogosRepository->find($jogosId);

        if (empty($jogos)) {
            Flash::error('Jogo não encontrado.');

            return redirect(route('jogos.index'));
        }

        $jogos = $this->jogosRepository->update($request->all(), $jogosId);

        Flash::success('Jogo alterado com sucesso.');

        return redirect(route('jogos.index'));
    }

    /**
     * Remove the specified Jogos from storage.
     *
     * @param int $jogosId
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($jogosId)
    {
        $jogos = $this->jogosRepository->find($jogosId);

        if (empty($jogos)) {
            Flash::error('Jogo não encontrado.');

            return redirect(route('jogos.index'));
        }

        $this->jogosRepository->delete($jogosId);

        Flash::success('Jogo excluído com sucesso.');

        return redirect(route('jogos.index'));
    }
}
