<!DOCTYPE html>
<html lang="en">
<head>
    @include('_includes/head')
    @include('_includes/scripts')
</head>

<body>

    <div class="main">
        @yield('content')
    </div>

    @include('_includes/analytics')
</body>
</html>
