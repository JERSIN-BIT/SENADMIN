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

    public function test_a_registered_user_is_redirected_to_the_admin_dashboard(): void
    {
        $response = $this->post('/register', [
            'name' => 'Administrador Demo',
            'email' => 'admin@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $response->assertRedirect(route('admin.dashboard'));
        $this->assertAuthenticatedAs(User::where('email', 'admin@example.com')->first());
    }

    public function test_authenticated_users_can_access_administration_routes(): void
    {
        $user = User::factory()->create();

        $this->actingAs($user)
            ->get(route('apprentice.index'))
            ->assertOk();
    }

    public function test_formations_are_publicly_visible(): void
    {
        $this->get(route('course.index'))
            ->assertOk();
    }
}
