@extends('layout.general')

@section('title', __('Veranstaltungsorte'))


@section('content')

    @foreach($locations as $location)

        <div class="location row">
            <div class="col-3">
                @dump($location)
            </div>
        </div>
    @endforeach

    {{-- todo: auth --}}

    <a href="{{ route('locations.create') }}">Neuen Veranstaltungort anlegen</a>
@endsection
