<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Book;

class AddBookTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example()
    {
        $response = $this->post('/login', [
            'email' => 'testich@example.com',
            'password' => 'pass',
        ]);

        $data = Book::factory()->make([
            'title' => 'Bible',
            'author' => 'God',
            'published' => 0,
        ]);

        $response = $this->post('/books', $data->toArray());

        $response->assertRedirect('/books');
        $this->assertDatabaseHas('books', $data->toArray());
    }
}
