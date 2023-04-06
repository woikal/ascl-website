<!DOCTYPE html>
<html lang="de-DE">

@include('administration.layout._head')

<body>
<nav class="sidebar">
    @include('administration.layout._sidebar')
</nav>

<div class="content">
    <nav class="top">
        @include('administration.layout._top')
    </nav>

    <main class="main">
        <h2>@yield('title')</h2>

        @section('content')
        @show
    </main>

    <footer class="footer">
        @include('administration.layout._footer')
    </footer>
</div>

<script src="{{ asset('/js/admin.js') }}"></script>
</body>

</html>
