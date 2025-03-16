<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Employer;
use App\Models\Job;
use Illuminate\Foundation\Testing\TestCase;

class JobTest extends TestCase
{

    use RefreshDatabase; // This will refresh the database for each test

    /**
     * A basic unit test example.
     */
    // public function test_example(): void
    // {
    //     $this->assertTrue(true);
    // }


    // it('can access the employer of the job', function () {
    //     //arrange
    //     $employer = Employer::factory()->create();
    //     $job = Job::factory()->create([
    //         'employer-id' => $employer->id,
    //     ]);

    //     //act and assert
    //     expect($job->employer->is($employer))->toBeTrue();
    // });



    public function test_example(): void
    {
        $this->createApplication(); // Bootstrap the Laravel application

        //arrange
        $employer = Employer::factory()->create();
        $job = Job::factory()->create([
            'employer_id' => $employer->id,
        ]);

        //act and assert
        $this->assertTrue($job->employer->is($employer));
    }



    public function test_example1(): void
    {
        $this->createApplication(); // Bootstrap the Laravel application

        // test for tags
        //arrange
        $job = Job::factory()->create();
        $job->tag('Frontend');

        //act and assert
        // act and assert
        $this->assertEquals('Frontend', $job->tags->first()->name);
        $this->assertCount(1, $job->tags);
    }
}
