@extends('administration.general')

@section('title', 'Spielfelder')

@section('content')

    <table class="table">
        <tr>
            <th>Name</th>
            <th>Standort</th>
            <th>Zeit</th>
            <th>Teilnehmer</th>
        </tr>

        @foreach($locations as $location)
            <tr>
                <td>{{ $location->name }}</td>
                <td>{{ $location->address }}, {{ $location->zipcode }} {{ $location->commune }} ({{ $location->state }}
                    )
                </td>
                <td>{{ $location->startAt->format('d.m.Y') }},{{ $location->startAt->format('H:i') }}
                    ,{{ $location->EndAt->format('H:i') }}</td>
                <td>{{ $location->participants()->count() }} / {{ $location->maxParticipant }} /</td>
            </tr>
        @endforeach
    </table>

    <p>Spielfelder: {{ $locations->count() }}</p>
    <a href="{{ route('location.create') }}" class="btn">Spielfeld anlegen</a>
@endsection
