<?php

namespace Rbarden\Hello\Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;

use Rbarden\Hello\Models\Submission;
use Rbarden\Hello\Tests\TestCase;

class DeleteSubmissionTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function canDeleteSubmission()
    {
        $submission = factory(Submission::class)->create();

        $this->assertCount(1, Submission::all());

        $response = $this->delete(route('hello.destroy', ['submission' => $submission->id]));

        $response->assertRedirect(route('hello.index'));
        $this->assertCount(0, Submission::all());
    }

}
