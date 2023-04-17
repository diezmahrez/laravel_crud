<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class siacontroller extends Controller
{
    public function index()
    {
        $jadwal = DB::table('jadwalkuliah')->get();

        return view('index',['jadwalkuliah' => $jadwal]);
    }  
    public function tambah()
    {
        return view('tambah');
    }
    public function store(Request $request)
    {
        DB::table('jadwalkuliah')->insert([
            'kd_mkul' => $request->kd_mkul,
            'nama_mkul' => $request->nama_mkul,
            'kd_dosen' => $request->kd_dosen,
            'Jam' => $request->Jam,
            'ruang_kelas' => $request->ruang_kelas,
            'jumlah_mhs' => $request->jumlah_mhs,
            'tanggal_mulai' => $request->tanggal_mulai]
        );

        return redirect('/sia');
    }
    public function edit($kd_mkul)
    { 
        $jadwal = DB::table('jadwalkuliah')->where('kd_mkul',$kd_mkul)->get(); 
        
        return view('edit',['jadwalkuliah' => $jadwal]);
    }
    public function update(Request $request)
    {
        DB::table('jadwalkuliah')->where('kd_mkul',$request->kd_mkul)->update([
            
            'nama_mkul' => $request->nama_mkul,
            'kd_dosen' => $request->kd_dosen,
            'Jam' => $request->Jam,
            'ruang_kelas' => $request->ruang_kelas,
            'jumlah_mhs' => $request->jumlah_mhs,
            'tanggal_mulai' => $request->tanggal_mulai]
        );

        return redirect('/sia');
    }
    public function hapus($kd_mkul)
    {
        DB::table('jadwalkuliah')->where('kd_mkul',$kd_mkul)->delete();
        
        return redirect('/sia');
    }
    public function cetak()
    {
        return view('cetak');
    }
}
