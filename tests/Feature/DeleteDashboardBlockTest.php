<?php


namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use App\Models\Blocks;

// class DeleteDashboardBlockTest extends TestCase

//    use RefreshDatabase;

    public function test_dashboard_block_can_be_deleted()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $block = Blocks::create([
            'title' => 'Te verwijderen widget',
            'widget_class' => 'App\\Livewire\\RevenueWidget',
            'order' => 2,
        ]);

        $response = $this->delete('/admin/dashboard-blocks/' . $block->id);

        $response->assertStatus(302);
        $this->assertDatabaseMissing('dashboard_blocks', [
            'id' => $block->id,
        ]);
    }


