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
                <a href="{{ route('user.tambah') }}" class="btn btn-warning btn-rounded btn-fw">Tambah Data</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="table_id">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Name</th>
                                <th>NIK</th>
                                <th>Alamat</th>
                                <th>Foto</th>
                                <th> Jabatan</th>
                                <th>Email</th>
                                {{-- <th>Password</th> --}}
                                <th>Role</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $no => $da)
                            <tr>
                                <td>{{$no+1}}</td>
                                <td>{{ $da->name }}</td>
                                <td>{{ $da->nik }}</td>
                                <td>{{$da->alamat}}</td>
                                <td><img src="{{ asset ( 'storage/'. $da->foto) }}" alt=""></td>
                                <td>{{$da->nama_jabatan}}</td>
                                <td>{{$da->email}}</td>
                                {{-- <td>{{$da->password}}</td> --}}
                                <td>{{$da->role}}</td>
                                <td>
                                    <a href="{{ route('user.detail', $da->id) }}"><span
                                        class="badge badge-primary my-2">Detail</span></a>
                                    <a href="{{ route('user.edit', $da->id) }}"><span
                                            class="badge badge-primary my-2">Edit</span></a>
                                    <form action="{{ route('user.destroy', $da->id) }}" method="POST">
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
