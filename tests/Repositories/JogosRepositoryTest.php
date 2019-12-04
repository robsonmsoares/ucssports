<?php namespace Tests\Repositories;

use App\Models\Jogos;
use App\Repositories\JogosRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class JogosRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var JogosRepository
     */
    protected $jogosRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->jogosRepo = \App::make(JogosRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_jogos()
    {
        $jogos = factory(Jogos::class)->make()->toArray();

        $createdJogos = $this->jogosRepo->create($jogos);

        $createdJogos = $createdJogos->toArray();
        $this->assertArrayHasKey('id', $createdJogos);
        $this->assertNotNull($createdJogos['id'], 'Created Jogos must have id specified');
        $this->assertNotNull(Jogos::find($createdJogos['id']), 'Jogos with given id must be in DB');
        $this->assertModelData($jogos, $createdJogos);
    }

    /**
     * @test read
     */
    public function test_read_jogos()
    {
        $jogos = factory(Jogos::class)->create();

        $dbJogos = $this->jogosRepo->find($jogos->id);

        $dbJogos = $dbJogos->toArray();
        $this->assertModelData($jogos->toArray(), $dbJogos);
    }

    /**
     * @test update
     */
    public function test_update_jogos()
    {
        $jogos = factory(Jogos::class)->create();
        $fakeJogos = factory(Jogos::class)->make()->toArray();

        $updatedJogos = $this->jogosRepo->update($fakeJogos, $jogos->id);

        $this->assertModelData($fakeJogos, $updatedJogos->toArray());
        $dbJogos = $this->jogosRepo->find($jogos->id);
        $this->assertModelData($fakeJogos, $dbJogos->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_jogos()
    {
        $jogos = factory(Jogos::class)->create();

        $resp = $this->jogosRepo->delete($jogos->id);

        $this->assertTrue($resp);
        $this->assertNull(Jogos::find($jogos->id), 'Jogos should not exist in DB');
    }
}
