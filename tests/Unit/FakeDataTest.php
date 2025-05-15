<?php
namespace Tests\Unit;

use Tests\TestCase;
use App\Classes\FakeData;

class FakeDataTest extends TestCase
{
    public function test_orders_per_day_returns_valid_structure()
    {
        $data = FakeData::getWeekOrdersChartData();

        $this->assertIsArray($data);
        $this->assertArrayHasKey('labels', $data);
        $this->assertArrayHasKey('data', $data);
        $this->assertCount(7, $data['labels']);
        $this->assertCount(7, $data['data']);
    }
}
