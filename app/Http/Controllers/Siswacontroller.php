<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Siswacontroller extends Controller
{
    public function index(Request $request)
    {

        if($request->has('cari')){

            $data_siswa = \App\siswa::where('nama_depan','LIKE','%'.$request->cari.'%')->get();
        }
        else{

            $data_siswa = \App\siswa::all();
        }


        return view('siswa/index',['data_siswa' => $data_siswa]);
    }

    public function create(Request $request)
    {
        \App\siswa::create($request->all());
        return redirect('\siswa')->with('sukses','Data Berhasil Di input');
    }
    public function edit($id)
    {
       $siswa = \App\siswa::find($id);
       return view('siswa/edit',['siswa' => $siswa]);
    }
    public function ubah(Request $request,$id)
    {
       $siswa = \App\siswa::find($id);
       $siswa->update($request->all());
       return redirect('\siswa')->with('ubah','Data Berhasil Di ubah');
    }
    public function hapus($id)
    {
       $siswa = \App\siswa::find($id);
       $siswa->delete($siswa);
       return redirect('\siswa')->with('hapus','Data Berhasil Di hapus');
    }
}
