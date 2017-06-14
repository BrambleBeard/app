<nav class="nav">
    <div class="container">
        <div class="nav-left">
            <a class="nav-item" href="/">
                <img src="{{ asset('/assets/img/logo.png') }}" alt="{{ Config::get('app.app_description') }}">
            </a>
        </div>
        <!-- .nav-left -->

        <span class="nav-toggle">
            <span></span>
            <span></span>
            <span></span>
        </span>
        <!-- .nav-toggle -->

        <div class="nav-right nav-menu">
            <a class="nav-item is-tab
                @if($page_active=="new")is-active @endif" href="/new">New</a>
            <a class="nav-item is-tab
                @if($page_active=="saved")is-active @endif" href="/saved">Saved</a>
            <a class="nav-item is-tab
                @if($page_active=="generate")is-active @endif" href="/generate">Password</a>
            <a class="nav-item is-tab
                @if($page_active=="account")is-active @endif" href="/account">{{ Auth::user()->first }} {{ Auth::user()->last }}</a>
        </div>
        <!-- ./nav-right -->
    </div>
    <!-- ./container -->
</nav>
