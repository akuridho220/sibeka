<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class TopikChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        return $this->chart->barChart()
            ->setTitle('Sebaran Berdasarkan Topik')
            ->addData('', [6, 9, 3, 4, 10])
            ->setXAxis(['Akademik', 'Pertemanan', 'Keluarga', 'Ekonomi', 'Asmara'])
            ->setGrid()
            ->setColors(['#E96C6C']);
    }
}
