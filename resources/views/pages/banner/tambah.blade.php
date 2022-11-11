@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <h3 class="m-3">{{ $pageName }}</h3>
            </div>
        </div>
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('banner.store') }}" method="POST" class="forms-sample" >
                        @csrf
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control @error('judul') is-invalid @enderror" id="nama_kecamatan"
                                name="judul" placeholder="judl" value="{{ old('judul') }}">
                            @error('judul')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="nama_kecamatan"
                                name="slug" placeholder="kecamatan" value="{{ old('slug') }}">
                            @error('slug')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="file">file</label>
                            <input type="text" class="form-control @error('file') is-invalid @enderror" id="nama_kecamatan"
                                name="file" placeholder="kecamatan" value="{{ old('file') }}">
                            @error('file')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="url">Url</label>
                            <input type="text" class="form-control @error('url') is-invalid @enderror" id="nama_kecamatan"
                                name="url" placeholder="kecamatan" value="{{ old('url') }}">
                            @error('url')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="kategori">kategori</label>->
                            <select class="js-example-basic-single w-100" name="kategori">
                                <option>-- Pilih kategori --</option>
                                @foreach($data as $ban)
                                <option value="{{ $ban->id}}">{{ $ban->kategori}}</option>
                                @endforeach
                            </select>
                            @error('kecamatan_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama_kecamatan">Nama Kecamatan</label>->
                            <select class="js-example-basic-single w-100" name="kecamatan_id">
                                <option>-- Pilih Kecamatan --</option>
                                @foreach($data as $ban)
                                <option value="{{ $ban->id}}">{{ $ban->published}}</option>
                                @endforeach
                            </select>
                            @error('kecamatan_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Tambah</button>
                        <button type="reset" class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
