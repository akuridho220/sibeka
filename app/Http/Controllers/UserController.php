<?php

namespace App\Http\Controllers;

use App\Charts\GenderChart;
use App\Charts\TingkatAndProdiChart;
use App\Charts\TopikChart;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(GenderChart $genderChart, TopikChart $topikChart, TingkatAndProdiChart $tingkatProdiChart)
    {
        return view('tim-konseling.home-tim-konseling', [
            'genderChart' => $genderChart->build(),
            'topikChart' => $topikChart->build(),
            'tingkatProdiChart' => $tingkatProdiChart->build(),
            'title' => "Home",
            'user' => "Tim Konseling"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
