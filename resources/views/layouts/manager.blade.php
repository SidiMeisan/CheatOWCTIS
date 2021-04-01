<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.Part.manager.head')
</head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        @include('layouts.Part.header')
        <div class="app-main">
            @include('layouts.Part.manager.sidebar')
            @yield('content')
        </div>
    </div>
</body>
<script type="text/javascript" src="{{url('/assets/scripts/main.js')}}"></script>
</html>