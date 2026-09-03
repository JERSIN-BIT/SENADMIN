<?php

namespace Tests\Feature;

use App\Models\User;
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

    public function test_a_registered_user_is_redirected_to_the_selected_role_dashboard(): void
    {
        $response = $this->post('/register', [
            'name' => 'Aprendiz Demo',
            'email' => 'aprendiz@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
            'role' => 'aprendiz',
        ]);

        $response->assertRedirect(route('aprendiz.dashboard'));
        $this->assertAuthenticatedAs(User::where('email', 'aprendiz@example.com')->first());
    }

    public function test_non_admin_users_cannot_access_administration_routes(): void
    {
        $user = User::factory()->create(['role' => 'aspirante']);

        $this->actingAs($user)
            ->get(route('apprentice.index'))
            ->assertForbidden();
    }
}
