<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function index()
    {
        $pageName = "Data Atasan/Pegawai";
        $data = User::all();

        return view('pages.user.index', compact('pageName', 'data'));
    }

    public function add()
    {
        $pageName   = "Form Tambah Data";
        return view('pages.user.tambah', compact('pageName'));
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

        $validated ['password'] = Hash::make($validated['password']);
        if ($request->file('foto')) {
            $validated['foto'] = $request->file('foto')->store('uploads/foto');
        }

        $store = User::create($validated);
        // $data = $request->all();
        // $store = User::create($data);

        session()->flash('success', 'Data Berhasil Ditambahkan!.');
        return redirect()->route('user');
    }

    public function detail($id)
    {
        $pageName = "Profil";
        $data = User::findOrFail($id);
        return view('pages.user.detail', compact('pageName', 'data'));
    }
    public function edit($id)
    {
        $pageName = "Form Edit Data";
        $data = User::findOrFail($id);
        return view('pages.user.edit', compact('pageName', 'data'));
    }
    public function update(Request $request, $id)
    {
    $validated = $request->validate([
        'name' => 'required',
        'nik' => 'required',
        'alamat' => 'required',
        'nama_jabatan' => 'required',
        'email' => 'required',
        'role' => 'required',
    ], [
        'name.required' => 'Harap mengisi data',
        'nik.required' => 'Harap mengisi data',
        'alamat.required' => 'Harap mengisi data',
        'nama_jabatana.required' => 'Harap mengisi data',
        'email.required' => 'Harap mengisi data',
        'role.required' => 'Harap mengisi data',
    ]);

    $data = $request->all();
    $user = User::findOrFail($id);

    // jika file/foto ingin dihapus
    if ($request->hasFile('foto')) {
        // delete old image
        if ($user->filelama) {
            // File::delete('storage/' . $user->filelama);
            Storage::delete($request->filelama);
        }
        $data['foto'] = $request->file('foto')->store('uploads/foto');
    } else {
        $data['foto'] = $user->foto; //ambil data dari sebelum perubahan
    }

       if(! $request->input('password')){
        $data ['password'] = $user->password;
       }

       $data ['password'] = Hash::make($data['password']);

       $update = $user->update($data);

       session()->flash('success', 'Data Berhasil Diupdate!.');
       return redirect()->route('user');
    }
    public function destroy($id)
    {
        $user = user::findOrFail($id);
        $delete = $user->delete();

        session()->flash('error', 'Data Berhasil Dihapus!.');
        return redirect()->route('user');

    }
}
