<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorePengajuanRequest;
use App\Http\Requests\UpdatePengajuanRequest;

class PengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function buatPengajuan(StorePengajuanRequest $request)
    {
        // $waktu_1 = $request->waktu1.$request;
        $jam1 = substr($request->waktu1, 0, 2);
        $jam2 = substr($request->waktu2, 0, 2);
        $date1 = date_create_from_format("d-M-Y h", $request->tanggal1.' '.$jam1);
        $date2 = date_create_from_format("d-M-Y h", $request->tanggal2.' '.$jam2);
        
        // $request->tanggal1 = $date1;
        // $request->tanggal2 = $date2;
        $validatedData = $request->validate([
            'nama_konseli' => ['required'],
            'nim_konseli' => ['required'],
            'jk_konseli' => ['required'],
            'tingkat_konseli' => ['required'],
            'nomor_hp' => ['required'],
            'hari_1' => ['required'],
            'hari_2'=> ['required'],
            'waktu_1'=> ['required',''],
            'waktu_2'=> ['required'],
            'jk_konselor'=> ['required',''],
            'opsi_ditemani'=> ['required']
        ]);
        $validatedData['user_id'] = Auth::id();        
        //return $request;
        Pengajuan::create($validatedData);
        return redirect('/konseli');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengajuan $pengajuan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengajuan $pengajuan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePengajuanRequest $request, Pengajuan $pengajuan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengajuan $pengajuan)
    {
        //
    }
}
