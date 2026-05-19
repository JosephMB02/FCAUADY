<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_unknown_urls_show_the_formatted_not_found_page(): void
    {
        $response = $this->get('/ruta-inexistente');

        $response
            ->assertStatus(404)
            ->assertSee('Página no encontrada');
    }

    public function test_secondary_pages_render_successfully(): void
    {
        $response = $this->get('/aspirantes');

        $response
            ->assertStatus(200)
            ->assertSee('Aspirantes')
            ->assertSee('Da el siguiente paso');
    }
}
