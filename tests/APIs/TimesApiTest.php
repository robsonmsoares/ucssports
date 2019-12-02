<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Times;

class TimesApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_times()
    {
        $times = factory(Times::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/times', $times
        );

        $this->assertApiResponse($times);
    }

    /**
     * @test
     */
    public function test_read_times()
    {
        $times = factory(Times::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/times/'.$times->id
        );

        $this->assertApiResponse($times->toArray());
    }

    /**
     * @test
     */
    public function test_update_times()
    {
        $times = factory(Times::class)->create();
        $editedTimes = factory(Times::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/times/'.$times->id,
            $editedTimes
        );

        $this->assertApiResponse($editedTimes);
    }

    /**
     * @test
     */
    public function test_delete_times()
    {
        $times = factory(Times::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/times/'.$times->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/times/'.$times->id
        );

        $this->response->assertStatus(404);
    }
}
