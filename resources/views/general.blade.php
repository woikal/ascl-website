<!DOCTYPE html>
<html lang="de-DE">

<head>
    <title>@yield('title') - Airsoft Sport Club Linz</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed@1&display=swap" rel="stylesheet">

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head>

<body>

<a class="skip2content" href="#content">Weiter zum Seiteninhalt</a>

<nav id="main-navigation" class="wrapper">
    <div class="main-navigation">
        <img src="{{ asset('/img/site-logo.png') }}" alt="Vereinslogo des Airsoft Sport Club Linz">
        <ul>
            <li><a href="#">Link 1</a></li>
            <li><a href="#">Gallerie</a></li>
            <li><a href="#">Airsoft</a></li>
            <li><a href="#">Events</a></li>
        </ul>
    </div>
</nav>

<a id="back-to-top" class="go-top" href="#top"></a>

<header class="page-heading">

    <h2>@yield('title')</h2>

    @hasSection('subtitle')
        <p>@yield('subtitle')</p>
    @endif

</header>
<nav class="card-navigation">
    <div class="card-link"></div>
    <div class="card-link"></div>
    <div class="card-link"></div>
    <div class="card-link"></div>
</nav>
<main id="content" class="content wrapper">
    <div>
        @section('content')
            <section>

                Main page content
                <h1>Cards</h1>
                <div class="cards">
                    <a href="/" class="card">
                        <img src="/media/teaser.png" alt="{{-- card.img_description --}}">
                        <h2>Title</h2>
                        <p class="teaser">Some description ...</p>
                    </a>
                    <a href="/" class="card">
                        <img src="/media/teaser.png" alt="{{-- card.img_description --}}">
                        <h2>Title</h2>
                        <p class="teaser">Some description ...</p>
                    </a>
                    <a href="/" class="card">
                        <!-- if !img then !border-img -->
                        <img src="/media/teaser.png" alt="{{-- card.img_description --}}">
                        <h2>Title</h2>
                        <p class="teaser">Some description ...</p>
                    </a>
                </div>
            </section>
            <section>

                <h1>H1 Headline</h1>
                <h2>H2 Headline</h2>
                <h3>H3 Headline</h3>
                <h4>H4 Headline</h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut molestiae numquam alias recusandae
                    porro,
                    sunt quam rem ipsam vitae temporibus.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat sequi ab recusandae sunt at
                    impedit.</p>
                <h2>H2 Heading</h2>
                <ul>
                    <li>unsorted list entry #1</li>
                    <li>unsorted list entry #2</li>
                    <li>unsorted list entry #3</li>
                    <li>unsorted list entry #4</li>
                    <li>unsorted list entry #5</li>
                </ul>
                <ol>
                    <li>sorted list entry</li>
                    <li>sorted list entry</li>
                    <li>sorted list entry</li>
                    <li>sorted list entry</li>
                    <li>sorted list entry</li>
                </ol>
                <table>
                    <thead>
                    <tr class="">
                        <th class=""></th>
                        <th class=""></th>
                        <th class=""></th>
                        <th class=""></th>
                        <th class=""></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="">
                        <td class=""></td>
                        <td class=""></td>
                        <td class=""></td>
                        <td class=""></td>
                        <td class=""></td>
                    </tr>
                    <tr class="">
                        <td class=""></td>
                        <td class=""></td>
                        <td class=""></td>
                        <td class=""></td>
                        <td class=""></td>
                    </tr>
                    <tr class="">
                        <td class=""></td>
                        <td class=""></td>
                        <td class=""></td>
                        <td class=""></td>
                        <td class=""></td>
                    </tr>
                    </tbody>
                </table>
            </section>
            <section>
                <h2>Form elements</h2>

                @include('_general.form-elements.all')
            </section>
        @show
    </div>
</main>

<footer class="footer">
    <nav class="footer-navigation wrapper">
        <ul>
            <li><a href="#">Media</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Imprint</a></li>
        </ul>
    </nav>
    <p class="copyright">&copy; ASCL {{ today()->year }} - All rights reserved</p>
</footer>

<script src="{{ asset('/js/site.js') }}"></script>
</body>

</html>