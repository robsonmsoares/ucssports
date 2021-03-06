<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateClassificacaoAPIRequest;
use App\Http\Requests\API\UpdateClassificacaoAPIRequest;
use App\Models\Classificacao;
use App\Repositories\ClassificacaoRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class ClassificacaoController
 * @package App\Http\Controllers\API
 */

class ClassificacaoAPIController extends AppBaseController
{
    /** @var  ClassificacaoRepository */
    private $classificacaoRepository;

    public function __construct(ClassificacaoRepository $classificacaoRepo)
    {
        $this->classificacaoRepository = $classificacaoRepo;
    }

    /**
     * Display a listing of the Classificacao.
     * GET|HEAD /classificacao
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $classificacao = $this->classificacaoRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($classificacao->toArray(), 'Classificação recuperada com sucesso');
    }

    /**
     * Store a newly created Classificacao in storage.
     * POST /classificacao
     *
     * @param CreateClassificacaoAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateClassificacaoAPIRequest $request)
    {
        $input = $request->all();

        $classificacao = $this->classificacaoRepository->create($input);

        return $this->sendResponse($classificacao->toArray(), 'Classificação salva com sucesso');
    }

    /**
     * Display the specified Classificacao.
     * GET|HEAD /classificacao/{$classificationId}
     *
     * @param int $classificationId
     *
     * @return Response
     */
    public function show($classificationId)
    {
        /** @var Classificacao $classificacao */
        $classificacao = $this->classificacaoRepository->find($classificationId);

        if (empty($classificacao)) {
            return $this->sendError('Classificação não encontrada');
        }

        return $this->sendResponse($classificacao->toArray(), 'Classificacao recuperada com sucesso');
    }

    /**
     * Update the specified Classificacao in storage.
     * PUT/PATCH /classificacao/{$classificationId}
     *
     * @param int $id
     * @param UpdateClassificacaoAPIRequest $request
     *
     * @return Response
     */
    public function update($classificationId, UpdateClassificacaoAPIRequest $request)
    {
        $input = $request->all();

        /** @var Classificacao $classificacao */
        $classificacao = $this->classificacaoRepository->find($classificationId);

        if (empty($classificacao)) {
            return $this->sendError('Classificação não encontrada');
        }

        $classificacao = $this->classificacaoRepository->update($input, $classificationId);

        return $this->sendResponse($classificacao->toArray(), 'Classificacao alterada com sucesso');
    }

    /**
     * Remove the specified Classificacao from storage.
     * DELETE /classificacao/{$classificationId}
     *
     * @param int $classificationId
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($classificationId)
    {
        /** @var Classificacao $classificacao */
        $classificacao = $this->classificacaoRepository->find($classificationId);

        if (empty($classificacao)) {
            return $this->sendError('Classificação não encontrada');
        }

        $classificacao->delete();

        return $this->sendSuccess('Classificação excluída com sucesso');
    }
}
