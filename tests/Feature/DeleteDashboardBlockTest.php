<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use App\Models\DashboardBlock;

class DeleteDashboardBlockTest extends TestCase
{
    use RefreshDatabase;

    public function test_dashboard_block_can_be_deleted()
    {
        // Maak gebruiker aan
        $user = User::factory()->create();
        $this->actingAs($user);

        // Maak block aan
        $block = DashboardBlock::create([
            'name' => 'Te verwijderen Widget',
            'block' => 'App\\Livewire\\RevenueWidget',
            'width' => 3,
            'order' => 2,
        ]);

        // Check dat hij bestaat
        $this->assertDatabaseHas('dashboard_blocks', [
            'id' => $block->id,
        ]);

        // Verwijder block
        $block->delete();

        // Check dat hij weg is
        $this->assertDatabaseMissing('dashboard_blocks', [
            'id' => $block->id,
        ]);
    }
}
