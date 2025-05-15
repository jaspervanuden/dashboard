<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use App\Models\DashboardBlock;

class CreateDashboardBlockTest extends TestCase
{
    use RefreshDatabase;

    public function test_dashboard_block_can_be_created_directly()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $block = DashboardBlock::create([
            'name' => 'Test Widget',
            'widget_class' => 'App\\Livewire\\RevenueWidget',
            'order' => 1,
        ]);

        $this->assertDatabaseHas('dashboard_blocks', [
            'name' => 'Test Widget',
            'widget_class' => 'App\\Livewire\\RevenueWidget',
        ]);
    }
}
