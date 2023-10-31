<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class GenderChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        return $this->chart->pieChart()
            ->setTitle('Proporsi Konseli Berdasar Jenis Kelamin')
            ->setSubtitle('Bulan November 2023')
            ->addData([40, 60])
            ->setLabels(['Laki-laki', 'Perempuan']);
    }
}
