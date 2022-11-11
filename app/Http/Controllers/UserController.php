<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function index()
    {
        $pageName = "Data Atasan/Pegawai";
        $user = User::all();

        return view('pages.user.index', compact('pageName', 'user'));
    }

    public function add($id)
    {
        $pageName   = "Form Tambah Data";
        $data       = User::all();

        return view('pages.banner.tambah', compact('pageName','data'));
    }

    public function store(Request $request)
    {
        // dd($request);
        $validated = $request->validate([
            'name' => 'required',
            'nik' => 'required',
            'alamat' => 'required',
            'foto' => 'required',
            'nama_jabatan' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ], [
            'name.required' => 'Harap mengisi data',
            'nik.required' => 'Harap mengisi data',
            'alamat.required' => 'Harap mengisi data',
            'foto.required' => 'Harap mengisi data',
            'nama_jabatana.required' => 'Harap mengisi data',
            'email.required' => 'Harap mengisi data',
            'password.required' => 'Harap mengisi data',
            'role.required' => 'Harap mengisi data',
        ]);

        if($request->file('foto')){
            $validated['foto'] = $request->file('foto')->store('uploads/banner');
        }

        $store = User::create($validated);
        // $data = $request->all();
        // $store = User::create($data);

        session()->flash('success', 'Data Berhasil Ditambahkan!.');
        return redirect()->route('user');
    }

    public function edit($id)
    {
        $pageName = "Form Edit Data";
        $data = User::findOrFail($id);
        return view('pages.user.edit', compact('pageName', 'data'));
    }
    public function update(Request $request, $id, $slug)
    {
        $validated = $request->validate([
            'name' => 'required',
            'nik' => 'required',
            'alamat' => 'required',
            'foto' => 'required',
            'nama_jabatan' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ], [
            'name.required' => 'Harap mengisi data',
            'nik.required' => 'Harap mengisi data',
            'alamat.required' => 'Harap mengisi data',
            'foto.required' => 'Harap mengisi data',
            'nama_jabatana.required' => 'Harap mengisi data',
            'email.required' => 'Harap mengisi data',
            'password.required' => 'Harap mengisi data',
            'role.required' => 'Harap mengisi data',
        ]);

        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $banner = Banner::findOrFail($id);

        $update = $banner->update($data);

        session()->flash('success', 'Data Berhasil Diupdate!.');
        return redirect()->route('banner');
    }
}
