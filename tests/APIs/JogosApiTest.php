<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Jogos;

class JogosApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_jogos()
    {
        $jogos = factory(Jogos::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/jogos', $jogos
        );

        $this->assertApiResponse($jogos);
    }

    /**
     * @test
     */
    public function test_read_jogos()
    {
        $jogos = factory(Jogos::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/jogos/'.$jogos->id
        );

        $this->assertApiResponse($jogos->toArray());
    }

    /**
     * @test
     */
    public function test_update_jogos()
    {
        $jogos = factory(Jogos::class)->create();
        $editedJogos = factory(Jogos::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/jogos/'.$jogos->id,
            $editedJogos
        );

        $this->assertApiResponse($editedJogos);
    }

    /**
     * @test
     */
    public function test_delete_jogos()
    {
        $jogos = factory(Jogos::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/jogos/'.$jogos->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/jogos/'.$jogos->id
        );

        $this->response->assertStatus(404);
    }
}
