<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pengajuan;
use Illuminate\Http\Request;
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
        //$pengajuan = Pengajuan::where('status', 1)->get();
        $pengajuan = Pengajuan::all()->sortBy("status");
        $konselors_l = User::where([
            'role' => 2,
            'jk' => 'Laki-laki'
        ]);

        $konselors_p = User::where([
            'role'=> 2,
            'jk' => 'Perempuan'
        ]);
        return view('tim-konseling.persetujuan',[
            'pengajuans' =>  $pengajuan,
            'title' => 'Pendaftaran',
            'user' => 'Tim Konseling'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        return view('konseli.pendaftaran-konseli',[
            'title' => 'Pendaftaran',
            'user' => 'Konseli'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function buatPengajuan(StorePengajuanRequest $request)
    {        
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
        Pengajuan::create($validatedData);
        return redirect('/konseli');
    }

    // public function approve(Request $request, Pengajuan $pengajuan){
    //     $validatedData = $request->validate([
    //         'nama_konseli' => ['required'],
    //         'nama_konselor' => ['required'],
    //         'waktu' => ['required'],
    //         'ruang' => ['required']
    //     ]);
    //     $validatedData['status'] = 2;
    //     Pengajuan::where('id', $pengajuan->id)->update($validatedData);
    //     return redirect('/tim');
    // }

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
        $validatedData = $request->validate([
            'nama_konseli' => ['required'],
            'nama_konselor' => ['required'],
            'hari' => ['required'],
            'ruang' => ['required']
        ]);
        $validatedData['status'] = 2;
        Pengajuan::where('id',$pengajuan->id)->update($validatedData);
        return redirect('/tim');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengajuan $pengajuan)
    {
        Pengajuan::destroy($pengajuan->id);
        return redirect('/tim-pengajuan');
    }
}
