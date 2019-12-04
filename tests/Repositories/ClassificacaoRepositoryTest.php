<?php namespace Tests\Repositories;

use App\Models\Classificacao;
use App\Repositories\ClassificacaoRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class ClassificacaoRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var ClassificacaoRepository
     */
    protected $classificacaoRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->classificacaoRepo = \App::make(ClassificacaoRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_classificacao()
    {
        $classificacao = factory(Classificacao::class)->make()->toArray();

        $createdClassificacao = $this->classificacaoRepo->create($classificacao);

        $createdClassificacao = $createdClassificacao->toArray();
        $this->assertArrayHasKey('id', $createdClassificacao);
        $this->assertNotNull($createdClassificacao['id'], 'Created Classificacao must have id specified');
        $this->assertNotNull(Classificacao::find($createdClassificacao['id']), 'Classificacao with given id must be in DB');
        $this->assertModelData($classificacao, $createdClassificacao);
    }

    /**
     * @test read
     */
    public function test_read_classificacao()
    {
        $classificacao = factory(Classificacao::class)->create();

        $dbClassificacao = $this->classificacaoRepo->find($classificacao->id);

        $dbClassificacao = $dbClassificacao->toArray();
        $this->assertModelData($classificacao->toArray(), $dbClassificacao);
    }

    /**
     * @test update
     */
    public function test_update_classificacao()
    {
        $classificacao = factory(Classificacao::class)->create();
        $fakeClassificacao = factory(Classificacao::class)->make()->toArray();

        $updatedClassificacao = $this->classificacaoRepo->update($fakeClassificacao, $classificacao->id);

        $this->assertModelData($fakeClassificacao, $updatedClassificacao->toArray());
        $dbClassificacao = $this->classificacaoRepo->find($classificacao->id);
        $this->assertModelData($fakeClassificacao, $dbClassificacao->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_classificacao()
    {
        $classificacao = factory(Classificacao::class)->create();

        $resp = $this->classificacaoRepo->delete($classificacao->id);

        $this->assertTrue($resp);
        $this->assertNull(Classificacao::find($classificacao->id), 'Classificacao should not exist in DB');
    }
}
