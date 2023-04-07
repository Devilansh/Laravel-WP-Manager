<!DOCTYPE html>
<html lang="en" class="js">

<head>
    <base href="../">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/css/dashlite.css') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('/css/theme.css') }}">
</head>

<body class="nk-body bg-lighter npc-default has-sidebar ">
    <div class="nk-app-root">
        <div class="nk-main ">
            @include('sidebar')
            <div class="nk-wrap ">
                @include('header')
                @yield('content')
                @include('footer')
            </div>
        </div>
    </div>
    <script src="{{ asset('js/bundle.js')}}"></script>
    <script src="{{ asset('js/scripts.js')}}"></script>
</body>

</html>