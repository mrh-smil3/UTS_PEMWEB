<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //add query builder 

class JabatanController extends Controller
{
    public function index()
    {
        // mengambil data dari tabel jabatan
        $jabatan['title'] = 'Jabatan';
        $jabatan = DB::table('jabatan')->get();

        // mengirim data jabatan ke view index
        return view('jabatan.index', ['jabatan' => $jabatan]);
    }

    public function tambah()
    {
        return view('jabatan.tambah');
    }

    // method untuk insert data ke table jabatan
    public function store(Request $request)
    {
        //insert data ke table jabatan
        DB::table('jabatan')->insert([
            'nama_jabatan' => $request->jabatan
        ]);

        // mengalihkan halaman ke halaman jabatan
        return redirect('/jabatan');
    }

    // Method untuk edit data jabatan
    public function edit($id)
    {
        // mengambil data jabatan berdasarkan id yang dipilih
        $jabatan = DB::table('jabatan')->where('id', $id)->get();

        // passing data pegawai yang didapat ke view edit.blade.php
        return view('jabatan.edit', ['jabatan' => $jabatan]);
    }

    // update data jabatan
    public function update(Request $request)
    {
        // update data jabatan
        DB::table('jabatan')->where('id', $request->id)->update([
            'id' => $request->id,
            'nama_jabatan' => $request->jabatan
        ]);

        // mengalihkan ke tampilan jabatan
        return redirect('/jabatan');
    }

    // method untuk hapus data jabatan
    public function hapus($id)
    {
        // menghapus data jabatan berdasarkan id yang dipilih
        DB::table('jabatan')->where('id', $id)->delete();

        // alihkan halaman ke halaman jabatan
        return redirect('/jabatan');
    }
}
