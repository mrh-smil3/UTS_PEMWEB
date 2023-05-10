<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index(Request $request)
    {
        $data['title'] = 'Karyawan';
        $data['k'] = $request->get('k');
        $data['karyawans'] = Karyawan::where('nama', 'like', '%' . $data['k'] . '%')
            ->orWhere('id', 'like', '%' . $data['k'] . '%')
            ->orWhere('jabatan_id', 'like', '%' . $data['k'] . '%')
            ->get();

        return view('karyawan.index', $data);
    }

    public function create()
    {
        $data['title'] = 'Add Karyawan';
        $jabatans = Jabatan::all();
        return view('karyawan.create', $data, compact('jabatans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required',
            'jabatan_id' => 'required',
        ]);

        Karyawan::create($request->all());

        return redirect()->route('karyawan.index')->with('success', 'Karyawan berhasil ditambahkan.');
    }

    public function show(Karyawan $karyawan)
    {
        return view('karyawan.show', compact('karyawan'));
    }

    public function edit(Karyawan $karyawan)
    {
        $data['title'] = 'Edit Karyawan';
        $jabatans = Jabatan::all();
        return view('karyawan.edit', $data, compact('karyawan', 'jabatans'));
    }

    public function update(Request $request, Karyawan $karyawan)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required',
            'jabatan_id' => 'required',
        ]);

        $karyawan->update($request->all());

        return redirect()->route('karyawan.index')->with('success', 'Karyawan berhasil diperbarui.');
    }

    public function destroy(Karyawan $karyawan)
    {
        $karyawan->delete();

        return redirect()->route('karyawan.index')->with('success', 'Karyawan berhasil dihapus.');
    }
}
