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
                    <form action="{{ route('tugas.store') }}" method="POST" class="forms-sample"  enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="pegawai_id">Pegawai</label>->
                            <select class="js-example-basic-single w-100" name="pegawai_id">
                                <option>-- Pilih Pegawai --</option>
                                @foreach($pegawai as $pe)
                                <option value="{{ $pe->pegawai->id}}">{{ $pe->pegawai->name}}</option>
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
                                name="judul" placeholder="judul" value="{{ old('judul') }}">
                            @error('judul')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="isi">Isi</label>
							<textarea class="form-control @error('isi') is-invalid @enderror" id="exampleTextarea1" rows="4"
                                        name="isi">{{ old('isi') }}</textarea>
                            @error('isi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
						</div>

                        <div class="form-group">
                            <label for="file">file</label>
                            <input type="file" class="form-control @error('file') is-invalid @enderror" id="file"
                                name="file"  value="{{ old('file') }}">
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
                                <option value="Draft" {{ old('status') == 'Draft' ? 'selected' : '' }}>Draft</option>
                                <option value="Diterima" {{ old('status') == 'Diterima' ? 'selected' : '' }}>Diterima</option>
                                <option value="Dalam Pengerjaan" {{ old('status') == 'Dalam Pengerjaan' ? 'selected' : '' }}>Dalam  Pengerjaan</option>
                                <option value="Selesai" {{ old('status') == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tpt">Tanggal Pembuatan Tugas</label>
                            <input type="date" class="form-control @error('tpt') is-invalid @enderror" id="tpt"
                                name="tpt"  value="{{ old('tpt') }}">
                            @error('tpt')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tst">Tanggal Selesai Tugas</label>
                            <input type="date" class="form-control @error('tst') is-invalid @enderror" id="tst"
                                name="tst"  value="{{ old('tst') }}">
                            @error('tst')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Simpan</button>
                        <button type="reset" class="btn btn-light">Reset</button>
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
     <script type="text/javascript">
		CKEDITOR.replace('isi');
    </script>
@endpush
