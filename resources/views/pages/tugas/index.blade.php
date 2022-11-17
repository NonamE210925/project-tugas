@extends('layouts.app')

@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <h3 class="m-3">{{ $pageName }}</h3>
        </div>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session()->get('error') }}
        </div>
    @endif

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('tugas.tambah') }}" class="btn btn-warning btn-rounded btn-fw">Tambah Data</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="table_id">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Atasan</th>
                                <th>Pegawai</th>
                                <th>Judul</th>
                                <th>Isi</th>
                                <th>File</th>
                                <th>Status</th>
                                <th>Tanggal Pembuatan Tugas</th>
                                <th>Tanggal Selesai Tugas</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($tugas as $no => $tu)
                            <tr>
                                <td>{{$no+1}}</td>
                                <td>{{$tu->atasan->name}}</td>
                                <td>{{$tu->pegawai->name}}</td>
                                <td>{{$tu->judul }}</td>
                                <td>{{$tu->isi }}</td>
                                <td><button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-file-earmark-pdf"></i>File</button></td>
                                <td>{{$tu->status }}</td>
                                <td>{{Carbon\Carbon::parse($tu->tpt)->isoFormat('D MMMM Y') }} </td>
                                <td>{{ Carbon\Carbon::parse($tu->tst)->isoFormat('D MMMM Y') }}</td>
                                <td>
                                    <a href="{{ route('tugas.edit', $tu->id) }}"><span
                                            class="badge badge-primary my-2">Edit</span></a>
                                    <form action="{{ route('tugas.destroy', $tu->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            onclick="return confirm('Anda yakin ingin menghapus data ?')" class="badge
                                            badge-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                         <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div  class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h2 class="modal-title fs-5" id="exampleModalLabel">PDF</h2>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <embed type="application/pdf" src="{{ asset ( 'storage/'. $tu->file) }}" width="450" height="300"></embed>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                        </div>
                    </div>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('before-styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
@endpush
@push('after-scripts')
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#table_id').DataTable({
                responsive: true
            });
        });
    </script>
@endpush
