@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <h3 class="m-3">{{ $pageName }}</h3>
            </div>
        </div>
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('user.update', $data->id) }}" method="POST" class="forms-sample"   enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" placeholder="name" value="{{ old('name') ?? $data->name }}">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik"
                                name="nik" placeholder="nik" value="{{ old('nik') ?? $data->nik }}">
                            @error('nik')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat"
                                name="alamat" placeholder="alamat" value="{{ old('alamat') ?? $data->alamat  }}">
                            @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="foto">foto </label>
                            <input type="hidden" name="filelama" value="{{ old('foto') ?? $data->foto}}">
                            <input type="file" class="form-control @error('foto') is-invalid @enderror" id="foto"
                                name="foto" placeholder="foto" value="{{ old('foto')  ?? $data->foto }}">
                            @error('foto')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama_jabatan">Nama Jabatan </label>
                            <input type="text" class="form-control @error('nama_jabatan') is-invalid @enderror" id="nama_jabatan"
                                name="nama_jabatan" placeholder="nama jabatan" value="{{ old('nama_jabatan') ?? $data->nama_jabatan }}">
                            @error('nama_jabatan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                name="email" placeholder="email" value="{{ old('email') ?? $data->email }}">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">password</label>
                            <br>
                            <span class="badge badge-danger">Jika Tidak Ada Perubahan Password Harap Dikosongkan</span>
                            <br>
                            <input type="hidden" value="{{ $data->password }}" name="pwlama"   >
                            <br>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                                name="password" placeholder="password" value="">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="role">Role</label>
                            <select name="role" id="role" class="form-control">
                                <option value=""> -Pilih- </option>
                                <option value="Admin" {{ old('role') == 'Admin' || $data->role == "Admin" ? 'selected' : '' }}>Admin</option>
                                <option value="Atasan" {{ old('role') == 'Atasan' || $data->role == 'Atasan' ? 'selected' : '' }}>Atasan</option>
                                <option value="Pegawai" {{ old('role') == 'Pegawai' || $data->role ==  'Pegawai' ? 'selected' : '' }}>Pegawai</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Update</button>
                        <a href="{{ route('user') }}" class="btn btn-success me-2">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
