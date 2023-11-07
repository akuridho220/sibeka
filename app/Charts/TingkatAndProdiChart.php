<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class TingkatAndProdiChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        return $this->chart->barChart()
            ->setTitle('Sebaran Berdasarkan Tingkat dan Prodi')
            ->addData('D4 Statistika', [6, 9, 3, 4])
            ->addData('D4 Komputasi Statistik', [2, 8, 3, 5])
            ->addData('D3 Statistika', [7, 3, 8])
            ->setXAxis(['Tingkat 1', 'Tingkat 2', 'Tingkat 3', 'Tingkat 4']);
    }
}
