<?php

namespace Rbarden\Hello\Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Rbarden\Hello\Tests\TestCase;
use Rbarden\Hello\Models\Submission;

class SubmissionTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function aSubmissionHasProperties()
    {
        $submission = factory(Submission::class)->create([
            'name' => 'Name Here',
            'email' => 'example@example.com',
            'message' => 'A test message goes here'
        ]);

        $this->assertEquals('Name Here', $submission->name);
        $this->assertEquals('example@example.com', $submission->email);
        $this->assertEquals('A test message goes here', $submission->message);
    }
}
