<!DOCTYPE html>
<html lang="de-DE">

@include('layout.head')

<body>

<a class="skip2content" href="#content">Weiter zum Seiteninhalt</a>

@include('layout.navigation-top')

<header class="site-heading">
    <div class="container">
        <h2>@yield('title')</h2>

        @hasSection('subtitle')
            <p>@yield('subtitle')</p>
        @endif
    </div>
</header>

<main class="content">

    <nav class="card-navigation container">
        <a href="{{ route('home') }}" class="card-link">Airsoft</a>
        <a href="{{ route('home') }}" class="card-link">Der Verein</a>
        <a href="{{ route('home') }}" class="card-link">Veranstaltungen</a>
    </nav>

    <section class="container">
        @section('content')
            <nav class="cards">

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
            </nav>
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

                @include('layout.form-elements.all')
            </section>
        @show
    </section>
</main>

@include('layout.footer')

<a class="go-top" href="#top">^</a>

<script src="{{ asset('/js/site.js') }}"></script>
</body>

</html>
