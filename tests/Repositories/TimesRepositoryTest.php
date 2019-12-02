<?php namespace Tests\Repositories;

use App\Models\Times;
use App\Repositories\TimesRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class TimesRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var TimesRepository
     */
    protected $timesRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->timesRepo = \App::make(TimesRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_times()
    {
        $times = factory(Times::class)->make()->toArray();

        $createdTimes = $this->timesRepo->create($times);

        $createdTimes = $createdTimes->toArray();
        $this->assertArrayHasKey('id', $createdTimes);
        $this->assertNotNull($createdTimes['id'], 'Created Times must have id specified');
        $this->assertNotNull(Times::find($createdTimes['id']), 'Times with given id must be in DB');
        $this->assertModelData($times, $createdTimes);
    }

    /**
     * @test read
     */
    public function test_read_times()
    {
        $times = factory(Times::class)->create();

        $dbTimes = $this->timesRepo->find($times->id);

        $dbTimes = $dbTimes->toArray();
        $this->assertModelData($times->toArray(), $dbTimes);
    }

    /**
     * @test update
     */
    public function test_update_times()
    {
        $times = factory(Times::class)->create();
        $fakeTimes = factory(Times::class)->make()->toArray();

        $updatedTimes = $this->timesRepo->update($fakeTimes, $times->id);

        $this->assertModelData($fakeTimes, $updatedTimes->toArray());
        $dbTimes = $this->timesRepo->find($times->id);
        $this->assertModelData($fakeTimes, $dbTimes->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_times()
    {
        $times = factory(Times::class)->create();

        $resp = $this->timesRepo->delete($times->id);

        $this->assertTrue($resp);
        $this->assertNull(Times::find($times->id), 'Times should not exist in DB');
    }
}
