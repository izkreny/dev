<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AgeCheckTest extends TestCase
{
    public function testYoungerOf18()
    {
        $response = $this->get('/welcome?age=17');
        $response->assertRedirect('/under18');
    }

    public function testOlderThen18()
    {
        $response = $this->get('/welcome?age=19');
        $response->assertSee('Welcome!');
    }
}
