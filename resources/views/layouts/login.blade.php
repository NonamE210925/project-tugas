<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @stack('before-styles')
    @include('includes.styles')
    @stack('after-style')
</head>

<body>
    <div id="app">
        @yield('content')
    </div>

    @stack('before-scripts')
    @include('includes.scripts')
    @stack('after-scripts')
</body>

</html>
