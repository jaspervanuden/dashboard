<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use App\Models\DashboardBlock;

class UpdateDashboardBlockTest extends TestCase
{
    use RefreshDatabase;

    public function test_dashboard_block_can_be_updated()
    {
        // Maak gebruiker aan
        $user = User::factory()->create();
        $this->actingAs($user);

        // Maak een bestaand block aan
        $block = DashboardBlock::create([
            'name' => 'Oude Naam',
            'block' => 'App\\Livewire\\RevenueWidget',
            'width' => 3,
            'order' => 1,
        ]);

        // Update het block
        $block->update([
            'name' => 'Nieuwe Naam',
        ]);

        // Controleer of de wijziging is opgeslagen
        $this->assertDatabaseHas('dashboard_blocks', [
            'id' => $block->id,
            'name' => 'Nieuwe Naam',
        ]);
    }
}
