<!DOCTYPE html>
<html lang="en">
<head>
    @include('_includes/head')
    @include('_includes/scripts')
</head>

<body>

    <div id="layout">
        @include('_includes/flash')
        @include('_includes/navigation')
        @yield('content')
    </div>

    @include('_includes/analytics')
</body>
</html>
