<?php


namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use App\Models\Blocks;

class LoadDashboardWidgetsTest extends TestCase
{
    use RefreshDatabase;

    public function test_widgets_load_on_dashboard()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        Blocks::create([
            'title' => 'Omzet van vandaag',
            'widget_class' => 'App\\Livewire\\RevenueWidget',
            'order' => 1,
        ]);

        $response = $this->get('/admin');

        $response->assertStatus(200);
        $response->assertSee('Omzet van vandaag');
    }
}

