<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use App\Models\DashboardBlock;

class LoadDashboardBlockTest extends TestCase
{
    use RefreshDatabase;

    public function test_dashboard_block_is_visible_on_dashboard_page()
    {
        // Maak gebruiker aan (zonder is_admin)
        $user = User::factory()->create();

        $this->actingAs($user);

        DashboardBlock::create([
            'name' => 'Test Widget',
            'block' => 'App\\Livewire\\RevenueWidget',
            'width' => 3,
            'order' => 1,
        ]);

        $response = $this->get('/admin');
        $response->assertStatus(200);
        $response->assertSee('Test Widget');
    }
}
