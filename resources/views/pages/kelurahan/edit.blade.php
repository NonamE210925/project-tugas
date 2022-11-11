@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <h3 class="m-3">{{ $pageName }}</h3>
            </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('kelurahan.update', $data->id) }}" method="POST" class="forms-sample">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nama_kelurahan">Nama Kelurahan</label>
                            <input type="text" class="form-control @error('nama_kelurahan') is-invalid @enderror" id="nama_kelurahan"
                                name="nama_kelurahan" placeholder="Kelurahan" value="{{ old('nama_kelurahan') ?? $data->nama_kelurahan }}">
                            @error('nama_kelurahan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama_kecamatan">Nama Kecamatan</label>
                            <!-- <input type="text" class="form-control @error('nama_kecamatan') is-invalid @enderror" id="nama_kecamatan"
                                name="nama_kecamatan" placeholder="Kecamatan" value="{{ old('kecamatan_id') ?? $data->kecamatan_id }}"> -->
                            
                            <select class="js-example-basic-single w-100" name="kecamatan_id">
                                <option>-- Pilih Kecamatan --</option>
                                @foreach($kecamatan as $kec)
                                    <option value="{{ $kec->id }}" {{ $kec->id == $data->kecamatan_id ? 'selected' : '' }} >{{ $kec->nama_kecamatan}}</option>
                                @endforeach

                                @error('kecamatan_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </select>
                        </div>
                        
                        <button type="submit" class="btn btn-primary me-2">Update</button>
                        <button type="reset" class="btn btn-light">Cancel</button>
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
