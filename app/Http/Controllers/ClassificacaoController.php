<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateClassificacaoRequest;
use App\Http\Requests\UpdateClassificacaoRequest;
use App\Models\Campeonatos;
use App\Models\Rodadas;
use App\Repositories\ClassificacaoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ClassificacaoController extends AppBaseController
{
    /** @var  ClassificacaoRepository */
    private $classificacaoRepository;

    public function __construct(ClassificacaoRepository $classificacaoRepo)
    {
        $this->classificacaoRepository = $classificacaoRepo;
    }

    /**
     * Display a listing of the Classificacao.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $campeonatosDropDown = Campeonatos::all();

        $rodadasDropDown = Rodadas::all();

        $classificacao = $this->classificacaoRepository->all();

        return view('classificacao.index', ['classificacao' => $classificacao, 'campeonatosDropDown' => $campeonatosDropDown, 'rodadasDropDown' => $rodadasDropDown]);
    }

    /**
     * Show the form for creating a new Classificacao.
     *
     * @return Response
     */
    public function create()
    {
        return view('classificacao.create');
    }

    /**
     * Store a newly created Classificacao in storage.
     *
     * @param CreateClassificacaoRequest $request
     *
     * @return Response
     */
    public function store(CreateClassificacaoRequest $request)
    {
        $input = $request->all();

        $classificacao = $this->classificacaoRepository->create($input);

        Flash::success('Classificação salva com sucesso.');

        return redirect(route('classificacao.index'));
    }

    /**
     * Display the specified Classificacao.
     *
     * @param int $classificationId
     *
     * @return Response
     */
    public function show($classificationId)
    {
        $classificacao = $this->classificacaoRepository->find($classificationId);

        if (empty($classificacao)) {
            Flash::error('Classificação não encontrada');

            return redirect(route('classificacao.index'));
        }

        return view('classificacao.show')->with('classificacao', $classificacao);
    }

    /**
     * Show the form for editing the specified Classificacao.
     *
     * @param int $classificationId
     *
     * @return Response
     */
    public function edit($classificationId)
    {
        $classificacao = $this->classificacaoRepository->find($classificationId);

        if (empty($classificacao)) {
            Flash::error('Classificação não encontrada');

            return redirect(route('classificacao.index'));
        }

        return view('classificacao.edit')->with('classificacao', $classificacao);
    }

    /**
     * Update the specified Classificacao in storage.
     *
     * @param int $classificationId
     * @param UpdateClassificacaoRequest $request
     *
     * @return Response
     */
    public function update($classificationId, UpdateClassificacaoRequest $request)
    {
        $classificacao = $this->classificacaoRepository->find($classificationId);

        if (empty($classificacao)) {
            Flash::error('Classificação não encontrada');

            return redirect(route('classificacao.index'));
        }

        $classificacao = $this->classificacaoRepository->update($request->all(), $classificationId);

        Flash::success('Classificação alterada com sucesso.');

        return redirect(route('classificacao.index'));
    }

    /**
     * Remove the specified Classificacao from storage.
     *
     * @param int $classificationId
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($classificationId)
    {
        $classificacao = $this->classificacaoRepository->find($classificationId);

        if (empty($classificacao)) {
            Flash::error('Classificação não encontrada');

            return redirect(route('classificacao.index'));
        }

        $this->classificacaoRepository->delete($classificationId);

        Flash::success('Classificação excluída com sucesso.');

        return redirect(route('classificacao.index'));
    }
}
