<?php

namespace Tests\Feature;

use Tests\TestCase;

class ProfilePageTest extends TestCase
{
    public function test_profil_page_contains_company_history_and_structure() {
        $response = $this->get('/profil');

        $response->assertStatus(200)
            ->assertSee('Company History')
            ->assertSee('Organization Structure')
            ->assertSee('Office Location');
    }
}
