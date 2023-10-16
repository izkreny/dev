<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AddBook extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example()
    {
        $data = [
            'title' => 'Bible',
            'author' => 'God',
            'published' => 0,
        ];
    };

    $response = $this->post('/books', $data);

    $response->assertRedirect('/books');
    $this->assertDatabaseHas('books', $data);
}
