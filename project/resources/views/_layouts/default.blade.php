<!DOCTYPE html>
<html lang="en">
<!-- Default blade template -->
<head>
    @include('_includes/head')
    @include('_includes/scripts')
</head>

<body>

    <div id="layout">
        @include('_includes/navigation')
        @include('_includes/flash')
        @yield('content')
    </div>

    @include('_includes/analytics')
</body>
</html>
