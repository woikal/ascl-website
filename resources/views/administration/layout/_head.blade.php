<head>
    <title>
        @hasSection('title')
            @yield('title') -
        @endif
        ASCL Admin Panel
    </title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{--
    @googlefonts('roboto')
    @googlefonts('roboto-condensed')
    --}}

    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
</head>
