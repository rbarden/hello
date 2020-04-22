<?php

namespace Rbarden\Hello\Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;

use Rbarden\Hello\Models\Submission;
use Rbarden\Hello\Tests\TestCase;

class CreateSubmissionTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function canCreateSubmission()
    {
        $this->assertCount(0, Submission::all());

        $submission = factory(Submission::class)->make();

        $response = $this->post(route('hello.store'), $submission->toArray());

        $response->assertRedirect(route('hello.create'));
        $response->assertSessionHasNoErrors();
        $this->assertCount(1, Submission::all());
    }

    /** @test */
    function aSubmissionRequiresAllProperties()
    {
        $this->assertCount(0, Submission::all());

        $submission = factory(Submission::class)->make([
            'name' => '',
        ]);

        $response = $this->post(route('hello.store'), $submission->toArray());
        $response->assertSessionHasErrors('name');

        $submission = factory(Submission::class)->make([
            'email' => '',
        ]);

        $response = $this->post(route('hello.store'), $submission->toArray());
        $response->assertSessionHasErrors('email');


        $submission = factory(Submission::class)->make([
            'message' => '',
        ]);

        $response = $this->post(route('hello.store'), $submission->toArray());
        $response->assertSessionHasErrors('message');

        $this->assertCount(0, Submission::all());
    }
}
