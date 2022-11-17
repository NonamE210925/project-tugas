<?php

namespace App\Http\Controllers;

use File;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Struktur;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class StrukturController extends Controller
{
    public function index()
    {
        $pageName = "Struktur";
        $struktur = Struktur::all();
        // dd($kecamatan);
        return view('pages.struktur.index', compact('pageName', 'struktur'));
    }

    public function add()
    {
        $pageName   = "Form Tambah Struktur";
        $atasan    = User::Where('role','atasan')->get();
        $pegawai    = User::Where('role','pegawai')->get();

        return view('pages.struktur.tambah', compact('pageName','atasan','pegawai'));
    }

    public function store(Request $request)
    {
        // dd($request);
        $validated = $request->validate([
            'atasan_id' => 'required',
            'pegawai_id' => 'required',
        ], [
            'atasan_id.required' => 'Harap mengisi data',
            'pegawai_id.required' => 'Harap mengisi data',
        ]);

        $data = $request->all();

        $store = Struktur::create($data);

        session()->flash('success', 'Data Berhasil Ditambahkan!.');
        return redirect()->route('struktur');
    }

    public function edit($id)
    {
        $pageName = "Form Edit Data";
        $data = Struktur::findOrFail($id);
        $atasan    = User::Where('role','atasan')->get();
        $pegawai    = User::Where('role','pegawai')->get();

        return view('pages.struktur.edit', compact('pageName', 'data','atasan','pegawai'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'atasan_id' => 'required',
            'pegawai_id' => 'required',
        ], [
            'atasan_id.required' => 'Harap mengisi data',
            'pegawai_id.required' => 'Harap mengisi data',
        ]);

        $data = $request->all();
        $struktur = Struktur::findOrFail($id);

        $update = $struktur->update($data);

        session()->flash('success', 'Data Berhasil Diupdate!.');
        return redirect()->route('struktur');
    }

    public function destroy($id)
    {
        $struktur = Struktur::findOrFail($id);
        $delete = $struktur->delete();

        session()->flash('error', 'Data Berhasil Dihapus!.');
        return redirect()->route('struktur');

    }
}
