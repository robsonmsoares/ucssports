<?php namespace Tests\Repositories;

use App\Models\Rodadas;
use App\Repositories\RodadasRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class RodadasRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var RodadasRepository
     */
    protected $rodadasRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->rodadasRepo = \App::make(RodadasRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_rodadas()
    {
        $rodadas = factory(Rodadas::class)->make()->toArray();

        $createdRodadas = $this->rodadasRepo->create($rodadas);

        $createdRodadas = $createdRodadas->toArray();
        $this->assertArrayHasKey('id', $createdRodadas);
        $this->assertNotNull($createdRodadas['id'], 'Created Rodadas must have id specified');
        $this->assertNotNull(Rodadas::find($createdRodadas['id']), 'Rodadas with given id must be in DB');
        $this->assertModelData($rodadas, $createdRodadas);
    }

    /**
     * @test read
     */
    public function test_read_rodadas()
    {
        $rodadas = factory(Rodadas::class)->create();

        $dbRodadas = $this->rodadasRepo->find($rodadas->id);

        $dbRodadas = $dbRodadas->toArray();
        $this->assertModelData($rodadas->toArray(), $dbRodadas);
    }

    /**
     * @test update
     */
    public function test_update_rodadas()
    {
        $rodadas = factory(Rodadas::class)->create();
        $fakeRodadas = factory(Rodadas::class)->make()->toArray();

        $updatedRodadas = $this->rodadasRepo->update($fakeRodadas, $rodadas->id);

        $this->assertModelData($fakeRodadas, $updatedRodadas->toArray());
        $dbRodadas = $this->rodadasRepo->find($rodadas->id);
        $this->assertModelData($fakeRodadas, $dbRodadas->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_rodadas()
    {
        $rodadas = factory(Rodadas::class)->create();

        $resp = $this->rodadasRepo->delete($rodadas->id);

        $this->assertTrue($resp);
        $this->assertNull(Rodadas::find($rodadas->id), 'Rodadas should not exist in DB');
    }
}
