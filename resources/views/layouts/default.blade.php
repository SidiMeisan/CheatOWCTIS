<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.Part.head')
</head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        @include('layouts.Part.header')

        @yield('content')
    </div>
</body>
<script type="text/javascript" src="{{url('/assets/scripts/main.js')}}"></script>
</html>