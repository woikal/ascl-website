{{-- Main navigation bar --}}

<nav class="top-navigation">
    <div class="wrapper">

        <nav class="site-logo">
            <a href="{{ route('home') }}">
                <img src="{{ asset('/img/site-logo.png') }}"
                     alt="Vereinslogo des Airsoft Sport Club Linz"
                ></a>
        </nav>

        <nav class="main-menu">
            <div class="menu-item"><a href="#">Airsoft</a></div>
            <div class="menu-item">Der Verein
                <div class="submenu">
                    <div class="menu-subitem"><a href="{{ route('home') }}">Über uns</a></div>
                    <div class="menu-subitem"><a href="{{ route('home') }}">Das Team</a></div>
                    <div class="menu-subitem"><a href="{{ route('home') }}">Mitmachen</a></div>
                </div>
            </div>
            <div class="nav-item"><a href="#">Veranstaltungen</a></div>
            <div class="nav-item">Mitmachen</div>
        </nav>

        <nav class="auth">@include('layout.auth')</nav>
    </div>
</nav>
