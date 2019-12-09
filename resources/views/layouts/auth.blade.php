<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@section('head')
    @include('shared.head')
@show
<body>
    <div id="app">
        @yield('content')
        @section('footer')
            @include('shared.footer')
        @show
    </div>
</body>
</html>
