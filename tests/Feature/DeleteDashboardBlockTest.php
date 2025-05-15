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
        $user = User::factory()->create();
        $this->actingAs($user);

        $block = DashboardBlock::create([
            'name' => 'Verwijderbare Widget',
            'block' => 'App\\Livewire\\RevenueWidget',
            'width' => 3,
            'order' => 2,
        ]);

        $this->assertDatabaseHas('dashboard_blocks', ['id' => $block->id]);

        $block->delete();

        $this->assertDatabaseMissing('dashboard_blocks', ['id' => $block->id]);
    }
}
