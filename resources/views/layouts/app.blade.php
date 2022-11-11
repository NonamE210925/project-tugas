<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @stack('before-styles')
    @include('includes.styles')
    @stack('after-style')

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
</head>

<body class="sidebar-dark">
    <div class="container-scroller">
        @include('includes.navbar')
        <div class="container-fluid page-body-wrapper">
            @include('includes.setting')
            @include('includes.setting-sidebar')
            @include('includes.sidebar')
            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content')
                </div>
                @include('includes.footer')
            </div>
        </div>
    </div>

    @stack('before-scripts')
    @include('includes.scripts')
    @stack('after-scripts')
</body>

</html>
