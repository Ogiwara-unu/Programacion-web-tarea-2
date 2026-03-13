<?php

namespace Tests\Feature;

use Tests\TestCase;

class ContactTest extends TestCase
{
    public function test_contact_page_contains_title(): void
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
        $response->assertSee('Formulario de Contacto');
    }

    public function test_contact_form_submits_successfully(): void
    {
        $response = $this->post('/contact', [
            'name' => 'Juan Perez',
            'phone' => '88887777',
            'address' => 'San Jose',
            'email' => 'juan@email.com',
            'status' => 'Soltero'
        ]);

        $response->assertRedirect('/result');
    }

    public function test_contact_form_validation(): void
    {
        $response = $this->post('/contact', []);

        $response->assertSessionHasErrors([
            'name',
            'phone',
            'address',
            'email',
            'status'
        ]);
    }

    public function test_result_page_displays_session_data(): void
    {
        $response = $this->withSession([
            'name' => 'Juan Perez',
            'phone' => '88887777',
            'address' => 'San Jose',
            'email' => 'juan@email.com',
            'status' => 'Soltero'
        ])->get('/result');

        $response->assertStatus(200);
        $response->assertSee('Juan Perez');
    }
}
