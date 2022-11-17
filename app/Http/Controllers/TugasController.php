<?php

namespace App\Http\Controllers;

use App\Models\Struktur;
use App\Models\User;
use App\Models\Tugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;

class TugasController extends Controller
{
    public function index()
    {
        $pageName   = "Tugas";
        Carbon::setLocale('id');
        $tugas  = Tugas::all();

        return view('pages.tugas.index', compact('pageName', 'tugas'));
    }

    public function add()
    {
        $iduser = auth()->user()->id;
        $pageName   = "Form Buat Tugas";
        $pegawai  = Struktur::where('atasan_id', '=', $iduser)->get();

        return view('pages.tugas.tambah', compact('pageName','pegawai'));
    }

    public function store(Request $request)
    {
        // dd($request);
        $validated = $request->validate([
            'pegawai_id'   => 'required',
            'judul' => 'required',
            'isi'   => 'required',
            'file' => 'required',
            'status'   => 'required',
            'tpt'   => 'required',
            'tst' => 'required',
        ], [
            'pegawai_id.required'     => 'Harap mengisi data',
            'judul.required'   => 'Harap mengisi data',
            'isi.required'     => 'Harap mengisi data',
            'file.required'   => 'Harap mengisi data',
            'status.required'     => 'Harap mengisi data',
            'tpt.required'     => 'Harap mengisi data',
            'tst.required'   => 'Harap mengisi data',
        ]);

        if ($request->file('file')) {
            $validated['file'] = $request->file('file')->store('uploads/file');
        }

        $validated['atasan_id'] = auth()->user()->id;

        $store = Tugas::create($validated);

        session()->flash('success', 'Data Berhasil Ditambahkan!.');
        return redirect()->route('tugas');
    }

    public function edit($id)
    {
        $iduser = auth()->user()->id;
        $pageName   = "Form Edit Tugas";
        $data       = Tugas::findOrFail($id);
        $pegawai  = Struktur::where('atasan_id', '=', $iduser)->get();

        return view('pages.tugas.edit', compact('pageName', 'data','pegawai'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'pegawai_id'   => 'required',
            'judul' => 'required',
            'isi'   => 'required',
            'status'   => 'required',
            'tpt'   => 'required',
            'tst' => 'required',
        ], [
            'pegawai_id.required'     => 'Harap mengisi data',
            'judul.required'   => 'Harap mengisi data',
            'isi.required'     => 'Harap mengisi data',
            'status.required'     => 'Harap mengisi data',
            'tpt.required'     => 'Harap mengisi data',
            'tst.required'   => 'Harap mengisi data',
        ]);

        $data = $request->all();
        $tugas = Tugas::findOrFail($id);

        if ($request->hasFile('file')) {
            // delete old image
         if ($tugas->filelama) {
             File::delete('storage/' . $tugas->filelama);
             // Storage::delete($request->filelama);
            }
            $data['file'] = $request->file('file')->store('uploads/file');
        } else{
            $data['file'] = $tugas->file; //ambil data dari sebelum perubahan
        }

        $data['atasan_id'] = auth()->user()->id;

        $update = $tugas->update($data);

        session()->flash('success', 'Data Berhasil Diupdate!.');
        return redirect()->route('tugas');
    }

    public function destroy($id)
    {
        $tugas = Tugas::findOrFail($id);
        $delete = $tugas->delete();

        session()->flash('error', 'Data Berhasil Dihapus!.');
        return redirect()->route('tugas');

    }
}
