<?php

namespace App\Classes;

class FakeData
{
    public static function getRevenueData()
    {
        return rand(1000, 10000);
    }

    public static function getReturnsData()
    {
        return rand(1000, 10000);
    }

    public static function getNewCustomersData()
    {
        return rand(1000, 10000);
    }

    public static function getConversionRateData()
    {
        return rand(1000, 10000);
    }

    public static function getVisitorsData()
    {
        return rand(1000, 10000);
    }

    public static function getWeekOrdersChartData(): array
    {
        $labels = ['Ma', 'Di', 'Wo', 'Do', 'Vr', 'Za', 'Zo'];
        $data = [];

        foreach ($labels as $label) {
            $data[] = rand(5, 20); // Simuleer willekeurige bestellingen per dag
        }

        return [
            'labels' => $labels,
            'data' => $data,
        ];
    }
}
