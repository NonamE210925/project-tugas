<?php

namespace App\Http\Controllers;

use File;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BannerController extends Controller
{
    public function index()
    {
        $pageName = "Banner";
        $banner = Banner::all();
        // dd($kecamatan);
        return view('pages.banner.index', compact('pageName', 'banner'));
    }

    public function add($id)
    {
        $pageName   = "Form Tambah Banner";
        $data       = Banner::all();
        $user    = User::all();

        return view('pages.banner.tambah', compact('pageName','data','banner','user'));
    }

    public function store(Request $request)
    {
        // dd($request);
        $validated = $request->validate([
            'kategori' => 'required',
            'judul' => 'required',
            'file' => 'required',
            'url' => 'required',
            'published' => 'required',
        ], [
            'kategori.required' => 'Harap mengisi data',
            'judul.required' => 'Harap mengisi data',
            'file.required' => 'Harap mengisi data',
            'url.required' => 'Harap mengisi data',
            'published.required' => 'Harap mengisi data',
        ]);

        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $store = Banner::create($data);

        session()->flash('success', 'Data Berhasil Ditambahkan!.');
        return redirect()->route('banner');
    }

    public function edit($id)
    {
        $pageName = "Form Edit Data";
        $data = Banner::findOrFail($id);
        $user = User::all();
        return view('pages.banner.edit', compact('pageName', 'data','user'));
    }

    public function update(Request $request, $id, $slug)
    {
        $validated = $request->validate([
            'kategori' => 'required',
            'judul' => 'required',
            'file' => 'required',
            'url' => 'required',
            'published' => 'required',
        ], [
            'kategori.required' => 'Harap mengisi data',
            'judul.required' => 'Harap mengisi data',
            'file.required' => 'Harap mengisi data',
            'url.required' => 'Harap mengisi data',
            'published.required' => 'Harap mengisi data',
        ]);

        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $banner = Banner::findOrFail($id);

        $update = $banner->update($data);

        session()->flash('success', 'Data Berhasil Diupdate!.');
        return redirect()->route('banner');
    }

    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);
        $delete = $banner->delete();

        session()->flash('error', 'Data Berhasil Dihapus!.');
        return redirect()->route('banner');

    }
}
