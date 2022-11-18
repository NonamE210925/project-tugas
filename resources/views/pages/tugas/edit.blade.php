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
                    <form action="{{ route('tugas.update', $data->id) }}" method="POST" class="forms-sample" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="pegawai">Pegawai</label>->
                            <select class="js-example-basic-single w-100" name="pegawai_id">
                                <option>-- Pilih Pegawai --</option>
                                @foreach($pegawai as $pe)
                                <option  value="{{ $pe->pegawai->id}}" {{ $pe->pegawai->id == $data->pegawai_id ? 'selected' : ''}}>{{ $pe->pegawai->name}}</option>
                                @endforeach
                            </select>
                            @error('pegawai')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul"
                                name="judul" placeholder="judul" value="{{ old('judul') ?? $data->judul }}">
                            @error('judul')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="isi">Isi</label>
                            <input type="text" class="form-control @error('isi') is-invalid @enderror" id="isi"
                                name="isi" placeholder="isi" value="{{ old('isi') ?? $data->isi  }}">
                            @error('isi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="file">File</label>
                            <input type="hidden" name="filelama" value="{{ old('file') ?? $data->file}}">
                            <input type="file" class="form-control @error('file') is-invalid @enderror" id="file"
                                name="file" value="{{ old('file') ?? $data->d }}">
                            @error('file')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value=""> -Pilih Status- </option>
                                <option value="Draft" {{ old('status') == 'Draft' || $data->status == "Draft" ? 'selected' : '' }}>Draft</option>
                                <option value="Diterima" {{ old('status') == 'Diterima' || $data->status == "Diterima" ? 'selected' : '' }}>Diterima</option>
                                <option value="Dalam Pengerjaan" {{ old('status') == 'Dalam Pengerjaan' || $data->status == "Dalam Pengerjaan" ? 'selected' : '' }}>Dalam  Pengerjaan</option>
                                <option value="Selesai" {{ old('status') == 'Selesai' || $data->status == "Selesai" ? 'selected' : '' }}>Selesai</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tpt">Tanggal Pembuatan</label>
                            <input type="date" class="form-control @error('tpt') is-invalid @enderror" id="tpt"
                                name="tpt" value="{{ old('tpt') ?? $data->tpt }}">
                            @error('tpt')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tst">Tanggal Selesai</label>
                            <input type="date" class="form-control @error('tst') is-invalid @enderror" id="tst"
                                name="tst" value="{{ old('tst') ?? $data->tst }}">
                            @error('tst')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Update</button>
                        <a href="{{ route('tugas') }}" class="btn btn-success me-2">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('before-styles')
    <link rel="stylesheet" href="{{ asset('assets/vendors/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">
@endpush

@push('after-scripts')
    <script src="{{ asset('assets/vendors/select2/select2.min.js') }}"></script>
    <script>
        $(document).ready(() => {
            $(".js-example-basic-single").select2();

            // preview image
            $('#foto').change(function() {
                const file = this.files[0];
                console.log(file);
                if (file) {
                    let reader = new FileReader();
                    reader.onload = function(event) {
                        console.log(event.target.result);
                        $('#imgPreview').attr('src', event.target.result);
                    }
                    reader.readAsDataURL(file);
                }
            });
        });
    </script>
@endpush
