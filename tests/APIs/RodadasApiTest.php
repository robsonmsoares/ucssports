<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Rodadas;

class RodadasApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_rodadas()
    {
        $rodadas = factory(Rodadas::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/rodadas', $rodadas
        );

        $this->assertApiResponse($rodadas);
    }

    /**
     * @test
     */
    public function test_read_rodadas()
    {
        $rodadas = factory(Rodadas::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/rodadas/'.$rodadas->id
        );

        $this->assertApiResponse($rodadas->toArray());
    }

    /**
     * @test
     */
    public function test_update_rodadas()
    {
        $rodadas = factory(Rodadas::class)->create();
        $editedRodadas = factory(Rodadas::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/rodadas/'.$rodadas->id,
            $editedRodadas
        );

        $this->assertApiResponse($editedRodadas);
    }

    /**
     * @test
     */
    public function test_delete_rodadas()
    {
        $rodadas = factory(Rodadas::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/rodadas/'.$rodadas->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/rodadas/'.$rodadas->id
        );

        $this->response->assertStatus(404);
    }
}
