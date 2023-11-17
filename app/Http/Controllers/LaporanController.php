<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Laporan;
use App\Models\Pengajuan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreLaporanRequest;
use App\Http\Requests\UpdateLaporanRequest;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $newLaporan = Pengajuan::where('id', $id)->first();
        return view('konselor.laporan', [
            'pengajuan' => $newLaporan,
            'title' => 'Laporan',
            'user' => 'Konselor'
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
    public function store(StoreLaporanRequest $request)
    {
        
    }

    public function createLaporan(StoreLaporanRequest $request, $id)
    {
        $validatedData = $request->validate([
            'nim_konseli' => ['required'], //
            'nama_konseli' => ['required'], //
            'prodi_konseli' => ['required'], //
            'kelas_konseli' => ['required'], //
            'jk_konseli' => ['required'], //
            'nama_konselor' => ['required'], //
            'hari' => ['required'], //
            'waktu' => ['required'], //
            'topik' => ['required'], //
            'hasil' => ['required'], //
            'solusi' => ['required'] //
        ]);
        $validatedData['tingkat_konseli'] = substr($validatedData['kelas_konseli'], 0, 1);
        $validatedData['user_id'] = Auth::id();
        $validatedData['pengajuan_id'] = $id; 

        DB::beginTransaction();
        try{
            Laporan::create($validatedData);
            
            //mengganti status
            Pengajuan::where('id', $id)->update(['status' => 3]);
    
            $pengajuan = Pengajuan::where('id', $id)->first();
    
            //opsi jika ada pertemuan lanjutan
            if($request['opsi_lanjut'] == '2') {
                
                $newPengajuan = [
                    'nim_konseli' => $pengajuan['nim_konseli'],
                    'nama_konseli' => $pengajuan['nama_konseli'],
                    'prodi_konseli' => $pengajuan['prodi_konseli'],
                    'tingkat_konseli' => $pengajuan['tingkat_konseli'],
                    'kelas_konseli' => $pengajuan['kelas_konseli'],
                    'jk_konseli' => $pengajuan['jk_konseli'],
                    'nomor_hp' => $pengajuan['nomor_hp'],
                    'jk_konselor' => $pengajuan['jk_konselor'],
                    'hari_1' => $request['hari_1'],
                    'waktu_1' => $request['waktu_1'],
                    'hari' => $request['hari_1'], //apakah udah fix gini?
                    'waktu' => $request['waktu_1'],
                    'opsi_ditemani' => $pengajuan['opsi_ditemani'],
                    'status' => 2,
                    'konseli_id' => $pengajuan['konseli_id'],
                    'konselor_id' => $pengajuan['konselor_id'],
    
                ];
    
                Pengajuan::create($newPengajuan);
                
            }
            DB::commit();
            return redirect('/konselor-riwayat');
        } catch(\Exception $e) {
            DB::rollback();
            return redirect()->back();
        }

    }

    public function showLaporanKonseli()
    {
        $konseli = User::where('id', Auth::id())->first();
        $laporans = Laporan::where('nim_konseli', $konseli['nim'])->latest()->get();
        return view('konseli.riwayat-konseli', [
            'title' => 'Riwayat',
            'user' => 'Konseli',
            'laporans' => $laporans
        ]);
    }

    public function showLaporanKonselor()
    {
        $laporans = Laporan::where('user_id', Auth::id())->latest()->get();
        return view('konselor.riwayat-konselor', [
            'title' => 'Riwayat',
            'user' => 'Konselor',
            'laporans' => $laporans
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Laporan $laporan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Laporan $laporan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLaporanRequest $request, Laporan $laporan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Laporan $laporan)
    {
        //
    }

    public function buatLaporan($id){
        $pengajuan = Pengajuan::find($id);
        return view('konselor.laporan', [
            'title' => 'Laporan',
            'user' => 'Konselor',
            'pengajuan' => $pengajuan
        ]);
    }
}
