<?php

namespace Tests\Feature;

use Spectator\Spectator;
use Tests\TestCase;

class SampleTest extends TestCase
{
    public function test_spec_get_sample_200()
    {
        Spectator::using('openapi.yml');
        $this->getJson("/api/sample")
            ->assertValidResponse(200);
    }

    public function test_spec_post_sample_200()
    {
        Spectator::using('openapi.yml');
        $this->postJson('/api/sample', ['id' => 1])
            ->assertValidRequest()
            ->assertValidResponse(200);
    }
}
