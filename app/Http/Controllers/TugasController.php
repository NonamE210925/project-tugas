<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Atasan;
use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function index()
    {
        $pageName   = "Tugas";
        $tugas  = Tugas::all();

        return view('pages.tugas.index', compact('pageName', 'tugas'));
    }

    public function add()
    {
        $pageName   = "Form Buat Tugas";
        $pegawai  = Pegawai::all();
        $atasan   = Atasan::all();

        return view('pages.tugas.tambah', compact('pageName','pegawai',''));
    }

    public function store(Request $request)
    {
        // dd($request);
        $validated = $request->validate([
            'nama_kelurahan' => 'required',
            'kecamatan_id'   => 'required',
        ], [
            'nama_kelurahan.required'   => 'Harap mengisi data',
            'kecamatan_id.required'     => 'Harap mengisi data',
        ]);

        $data = $request->all();
        $store = Kelurahan::create($data);

        session()->flash('success', 'Data Berhasil Ditambahkan!.');
        return redirect()->route('kelurahan');
    }

    public function edit($id)
    {
        $pageName   = "Form Edit Data";
        $data       = Kelurahan::findOrFail($id);
        $kecamatan  = Kecamatan::all();

        return view('pages.kelurahan.edit', compact('pageName', 'data','kecamatan'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_kelurahan' => 'required',
            'kecamatan_id'   => 'required',
        ], [
            'nama_kelurahan.required'   => 'Harap mengisi data',
            'kecamatan_id.required'     => 'Harap mengisi data',
        ]);

        $data = $request->all();

        $kelurahan = Kelurahan::findOrFail($id);
        $update = $kelurahan->update($data);

        session()->flash('success', 'Data Berhasil Diupdate!.');
        return redirect()->route('kelurahan');
    }

    public function destroy($id)
    {
        $kelurahan = Kelurahan::findOrFail($id);
        $delete = $kelurahan->delete();

        session()->flash('error', 'Data Berhasil Dihapus!.');
        return redirect()->route('kelurahan');

    }
}
