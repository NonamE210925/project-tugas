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

            </div>
            <div class="card-body">
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="examples/invoice.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Invoice</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="examples/profile.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Profile</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="examples/e-commerce.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>E-commerce</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="examples/projects.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Projects</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="examples/project-add.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Project Add</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="examples/project-edit.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Project Edit</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="examples/project-detail.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Project Detail</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="examples/contacts.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Contacts</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="examples/faq.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>FAQ</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="examples/contact-us.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Contact us</p>
                      </a>
                    </li>
                  </ul>
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
