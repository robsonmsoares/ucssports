<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Classificacao;

class ClassificacaoApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_classificacao()
    {
        $classificacao = factory(Classificacao::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/classificacao', $classificacao
        );

        $this->assertApiResponse($classificacao);
    }

    /**
     * @test
     */
    public function test_read_classificacao()
    {
        $classificacao = factory(Classificacao::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/classificacao/'.$classificacao->id
        );

        $this->assertApiResponse($classificacao->toArray());
    }

    /**
     * @test
     */
    public function test_update_classificacao()
    {
        $classificacao = factory(Classificacao::class)->create();
        $editedClassificacao = factory(Classificacao::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/classificacao/'.$classificacao->id,
            $editedClassificacao
        );

        $this->assertApiResponse($editedClassificacao);
    }

    /**
     * @test
     */
    public function test_delete_classificacao()
    {
        $classificacao = factory(Classificacao::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/classificacao/'.$classificacao->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/classificacao/'.$classificacao->id
        );

        $this->response->assertStatus(404);
    }
}
