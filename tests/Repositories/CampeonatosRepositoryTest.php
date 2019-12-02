<?php namespace Tests\Repositories;

use App\Models\Campeonatos;
use App\Repositories\CampeonatosRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class CampeonatosRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var CampeonatosRepository
     */
    protected $campeonatosRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->campeonatosRepo = \App::make(CampeonatosRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_campeonatos()
    {
        $campeonatos = factory(Campeonatos::class)->make()->toArray();

        $createdCampeonatos = $this->campeonatosRepo->create($campeonatos);

        $createdCampeonatos = $createdCampeonatos->toArray();
        $this->assertArrayHasKey('id', $createdCampeonatos);
        $this->assertNotNull($createdCampeonatos['id'], 'Created Campeonatos must have id specified');
        $this->assertNotNull(Campeonatos::find($createdCampeonatos['id']), 'Campeonatos with given id must be in DB');
        $this->assertModelData($campeonatos, $createdCampeonatos);
    }

    /**
     * @test read
     */
    public function test_read_campeonatos()
    {
        $campeonatos = factory(Campeonatos::class)->create();

        $dbCampeonatos = $this->campeonatosRepo->find($campeonatos->id);

        $dbCampeonatos = $dbCampeonatos->toArray();
        $this->assertModelData($campeonatos->toArray(), $dbCampeonatos);
    }

    /**
     * @test update
     */
    public function test_update_campeonatos()
    {
        $campeonatos = factory(Campeonatos::class)->create();
        $fakeCampeonatos = factory(Campeonatos::class)->make()->toArray();

        $updatedCampeonatos = $this->campeonatosRepo->update($fakeCampeonatos, $campeonatos->id);

        $this->assertModelData($fakeCampeonatos, $updatedCampeonatos->toArray());
        $dbCampeonatos = $this->campeonatosRepo->find($campeonatos->id);
        $this->assertModelData($fakeCampeonatos, $dbCampeonatos->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_campeonatos()
    {
        $campeonatos = factory(Campeonatos::class)->create();

        $resp = $this->campeonatosRepo->delete($campeonatos->id);

        $this->assertTrue($resp);
        $this->assertNull(Campeonatos::find($campeonatos->id), 'Campeonatos should not exist in DB');
    }
}
