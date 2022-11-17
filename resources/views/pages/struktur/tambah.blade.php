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
                    <form action="{{ route('struktur.store') }}" method="POST" class="forms-sample"  enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="atasan_id">Atasan</label>->
                            <select class="js-example-basic-single w-100" name="atasan_id">
                                <option>-- Pilih Atasan --</option>
                                @foreach($atasan as $at)
                                <option value="{{ $at->id}}">{{ $at->name}}</option>
                                @endforeach
                            </select>
                            @error('atasan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="pegawai_id">Pegawai</label>->
                            <select class="js-example-basic-single w-100" name="pegawai_id">
                                <option>-- Pilih Pegawai --</option>
                                @foreach($pegawai as $pe)
                                <option value="{{ $pe->id}}">{{ $pe->name}}</option>
                                @endforeach
                            </select>
                            @error('pegawai')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Simpan</button>
                        <button type="reset" class="btn btn-light">Reset</button>
                        <a href="{{ route('struktur') }}" class="btn btn-success me-2">Kembali</a>
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
