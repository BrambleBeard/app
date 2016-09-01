
<!-- Menu toggle -->
<a href="#menu" id="menuLink" class="menu-link">
    <!-- Hamburger icon -->
    <span></span>
</a>

<div id="menu">
    <div class="pure-menu">
        <a class="pure-menu-heading" href="{{ route('home') }}">
            <img src="{{ asset('/assets/img/logo.png') }}" alt="{{ Config::get('app.site_title') }}" class="pure-img-responsive pure-img-logo" title="{{ Config::get('app.site_title') }}">
        </a>

        <ul class="pure-menu-list">
            <li class="pure-menu-item
                @if ($page_active == 'home')
                    active
                @endif
                ">
                <a href="{{ route('home') }}" class="pure-menu-link">Home</a>
            </li>
            <li class="pure-menu-item
                @if ($page_active == 'about')
                    active
                @endif
                ">
                <a href="{{ route('about') }}" class="pure-menu-link">About</a>
            </li>
            <li class="pure-menu-item
                @if ($page_active == 'contact')
                    active
                @endif
                ">
                <a href="{{ route('contact') }}" class="pure-menu-link">Contact</a>
            </li>
            <li class="pure-menu-item
                @if ($page_active == 'auth')
                    active
                @endif
                " class="menu-item-divided pure-menu-selected">
                <a href="{{ route('login') }}" class="pure-menu-link">Sign-in</a>
            </li>
        </ul>
    </div>
</div>
