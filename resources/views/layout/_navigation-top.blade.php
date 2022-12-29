{{-- Main navigation bar --}}

<nav class="top-navigation">
    <div class="wrapper">

        <nav class="site-logo"><a href="{{ route('home') }}">
                <img src="{{ asset('/img/site-logo.png') }}"
                     alt="Vereinslogo des Airsoft Sport Club Linz"
                ></a></nav>

        <ul>
            <li><a href="#">Airsoft</a></li>
            <li>Der Verein
                <ul>
                    <li><a href="{{ route('home') }}">Über uns</a></li>
                    <li><a href="{{ route('home') }}">Das Team</a></li>
                    <li><a href="{{ route('home') }}">Mitmachen</a></li>
                </ul>
            </li>
            <li><a href="#">Veranstaltungen</a></li>
            <li>Mitmachen</li>
        </ul>
        <nav class="auth">Login</nav>
    </div>
</nav>
