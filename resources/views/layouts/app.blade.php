<!doctype html>
@include('layouts.style')
<body class="fix-header fix-sidebar card-no-border">

    <!-- Pre-loader -->
    @include('layouts.pre-loader')

    <div id="main-wrapper">
            @yield('content')
</div>
@include('layouts.script')
</body>
</html>
