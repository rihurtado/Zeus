<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@section('head')
    @include('shared.head')
@show
<body>
    <div id="app">
        <div class="wrapper">
            @section('sidebar')
                @include('shared.sidebar')
            @show
            <div class="main-panel">
                 <!-- Navbar -->
                 @section('navbar')
                    @include('shared.navbar')
                @show
                 <!-- End Navbar -->
                 <div class="content">
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                 </div>
                 @section('footer')
                    @include('shared.footer')
                @show
            </div>
        </div>
    </div>
    @section('scripts')
        @include('shared.scripts')
    @show
</body>
</html>
