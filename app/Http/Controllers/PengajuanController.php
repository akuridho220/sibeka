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
        $konselor_l = User::where([
            'role' => 2,
            'jk' => 'Laki-laki'
        ])->get();
        $konselor_p = User::where([
            'role' => 2,
            'jk' => 'Perempuan'
        ])->get();
        $konselor = User::where('role', 2)->get();
        return view('tim-konseling.persetujuan',[
            'pengajuans' =>  $pengajuan,
            'title' => 'Pendaftaran',
            'user' => 'Tim Konseling',
            'konselors' => $konselor,
            'konselors_l' => $konselor_l,
            'konselors_p'=> $konselor_p 
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
    public function store(StorePengajuanRequest $request)
    {        
        $validatedData = $request->validate([
            'nama_konseli' => ['required'],
            'nim_konseli' => ['required'],
            'jk_konseli' => ['required'],
            'kelas_konseli' => ['required'],
            'nomor_hp' => ['required'],
            'hari_1' => ['required'],
            'hari_2'=> ['required'],
            'waktu_1'=> ['required',''],
            'waktu_2'=> ['required'],
            'jk_konselor'=> ['required',''],
            'opsi_ditemani'=> ['required']
        ]);
        $validatedData['tingkat_konseli'] = substr($validatedData['kelas_konseli'], 0, 1);
        $prodi = substr($validatedData['nim_konseli'],0,2);
        if($prodi == '11'){
            $validatedData['prodi_konseli'] = 'D3 Statistika';
        } else if($prodi == '21'){
            $validatedData['prodi_konseli'] = 'D4 Statistika';
        } else if($prodi == '22'){
            $validatedData['prodi_konseli'] = 'D4 Komputasi Statistik';
        }
        $validatedData['konseli_id'] = Auth::id();
        Pengajuan::create($validatedData);
        return redirect('/konseli');
    }

    public function approve(Request $request, $id){
        $p = Pengajuan::find($id);
        $validatedData = $request->validate([
            'nama_konseli' => ['required'],
            'konselor_id' => ['required'],
            'hari' => ['required'],
            'ruang' => ['required']
            
        ]);
        if($validatedData['hari'] == $p['hari_1']){
            $validatedData['waktu'] = $p['waktu_1'];
        } else {
            $validatedData['waktu'] = $p['waktu_2'];
        }
        
        $validatedData['status'] = 2;
        Pengajuan::where('id',$id)->update($validatedData);
        return redirect('/tim');
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
        return view('konseli.update',[
            'title' => 'Pendaftaran',
            'user' => 'Konseli',
            'pengajuan' => $pengajuan
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePengajuanRequest $request, Pengajuan $pengajuan)
    {
        $validatedData = $request->validate([
            'nama_konseli' => ['required'],
            'nim_konseli' => ['required'],
            'jk_konseli' => ['required'],
            'kelas_konseli' => ['required'],
            'nomor_hp' => ['required'],
            'hari_1' => ['required'],
            'waktu_1'=> ['required',''],
            'jk_konselor'=> ['required',''],
            'opsi_ditemani'=> ['required']
        ]);
        $validatedData['tingkat_konseli'] = substr($validatedData['kelas_konseli'], 0, 1);
        $prodi = substr($validatedData['nim_konseli'],0,2);
        if($prodi == '11'){
            $validatedData['prodi_konseli'] = 'D3 Statistika';
        } else if($prodi == '21'){
            $validatedData['prodi_konseli'] = 'D4 Statistika';
        } else if($prodi == '22'){
            $validatedData['prodi_konseli'] = 'D4 Komputasi Statistik';
        }
        Pengajuan::where('id',$pengajuan->id)->update($validatedData);
        return redirect('/konseli');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengajuan $pengajuan)
    {
        Pengajuan::destroy($pengajuan->id);
        return redirect('/tim-pengajuan');
    }

    public function resubmit($id){
        $data['status'] = 4;
        Pengajuan::where('id',$id)->update($data);
        return redirect('/tim');
    }
}
