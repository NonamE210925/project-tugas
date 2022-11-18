<nav class="sidebar-dark sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('home') }}">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        @can('isAdmin')
        <li class="nav-item nav-category">Master</li>
        <li class="nav-item {{ request()->is('jenis-bencana*') ? 'active' : '' }}">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                aria-controls="ui-basic">
                <i class="menu-icon mdi mdi-floor-plan"></i>
                <span class="menu-title">Master</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ request()->is('user*') ? 'show' : '' }}" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('user') }}">Kelola User</a></li>
                </ul>
            </div>
            <div class="collapse {{ request()->is('tugas*') ? 'show' : '' }}" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('tugas') }}">History tugas</a></li>
                </ul>
            </div>
            <div class="collapse {{ request()->is('struktur*') ? 'show' : '' }}" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('struktur') }}">Struktur</a></li>
                </ul>
            </div>
        </li>
        @endcan
        @can('isAtasan')
        <li class="nav-item nav-category">Create Tugas</li>
        <li class="nav-item {{ request()->is('jenis-bencana*') ? 'active' : '' }}">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                aria-controls="ui-basic">
                <i class="menu-icon mdi mdi-floor-plan"></i>
                <span class="menu-title">Create Tugas</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ request()->is('struktur*') ? 'show' : '' }}" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('struktur') }}">Struktur</a></li>
                </ul>
            </div>
            <div class="collapse {{ request()->is('tugas*') ? 'show' : '' }}" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('tugas') }}">Buat Tugas</a></li>
                </ul>
            </div>
            <div class="collapse {{ request()->is('tugas*') ? 'show' : '' }}" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('tugas.status','Draft') }}">Status</a></li>
                </ul>
            </div>
            @endcan
        </li>
    </ul>
</nav>
