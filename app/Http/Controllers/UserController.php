<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use App\Charts\TopikChart;
use App\Charts\GenderChart;
use Illuminate\Http\Request;
use App\Charts\TingkatAndProdiChart;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home(GenderChart $genderChart, TopikChart $topikChart, TingkatAndProdiChart $tingkatProdiChart)
    {
        return view('tim-konseling.home-tim-konseling', [
            'genderChart' => $genderChart->build(),
            'topikChart' => $topikChart->build(),
            'tingkatProdiChart' => $tingkatProdiChart->build(),
            'title' => "Home",
            'user' => "Tim Konseling"
        ]);
    }
    public function konseli(){
        $lastPengajuan = Pengajuan::where('konseli_id', auth()->id())->get()->last();
        if($lastPengajuan != null){
            return view('konseli.home', [
                'lastPengajuan' => $lastPengajuan,
                'user' => 'Konseli',
                'title' => 'Home'
            ]);
        } else {
            return view('konseli.home-konseli-2',[
                'user' => 'Konseli',
                'title' => 'Home'
            ]);
        }
    }

    public function konselor(){
        $id = Auth::user()->id;
        $pengajuan = Pengajuan::where([
            'konselor_id' => $id,
            'status' => 2
        ])->get()->last();
        if($pengajuan != null){
            return view('konselor.home-konselor', [
                'pengajuan' => $pengajuan,
                'user' => 'Konselor',
                'title' => 'Home'
            ]);
        } else {
            return view('konselor.home-nojadwal',[
                'user' => 'Konselor',
                'title' => 'Home'
            ]);
        }
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
