<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Campeonatos;

class CampeonatosApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_campeonatos()
    {
        $campeonatos = factory(Campeonatos::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/campeonatos', $campeonatos
        );

        $this->assertApiResponse($campeonatos);
    }

    /**
     * @test
     */
    public function test_read_campeonatos()
    {
        $campeonatos = factory(Campeonatos::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/campeonatos/'.$campeonatos->id
        );

        $this->assertApiResponse($campeonatos->toArray());
    }

    /**
     * @test
     */
    public function test_update_campeonatos()
    {
        $campeonatos = factory(Campeonatos::class)->create();
        $editedCampeonatos = factory(Campeonatos::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/campeonatos/'.$campeonatos->id,
            $editedCampeonatos
        );

        $this->assertApiResponse($editedCampeonatos);
    }

    /**
     * @test
     */
    public function test_delete_campeonatos()
    {
        $campeonatos = factory(Campeonatos::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/campeonatos/'.$campeonatos->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/campeonatos/'.$campeonatos->id
        );

        $this->response->assertStatus(404);
    }
}
