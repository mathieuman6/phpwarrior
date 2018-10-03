<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.head')
</head>
<body>
    <div id="app">
        @include('layouts.menu')

        <div>
            @yield('content')
        </div>

        @include('layouts.footer')
    </div>
</body>
</html>
@include('layouts.foot')
