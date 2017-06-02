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
            <a class="nav-item is-tab" href="/new">New</a>
            <a class="nav-item is-tab" href="/saved">Saved</a>
            <a class="nav-item is-tab" href="/generate">Password</a>
            <a class="nav-item is-tab" href="/account">Derek</a>
            <a class="nav-item is-tab" href="/logout">Sign-Out</a>
        </div>
        <!-- ./nav-right -->
    </div>
    <!-- ./container -->
</nav>
