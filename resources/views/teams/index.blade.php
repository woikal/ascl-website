@extends('layout.general')

@section('title', __('Teams'))


@section('content')

    <table class="table">
        <thead>

        <tr>
            <th>@lang('Akronym')</th>
            <th>@lang('Name')</th>
            <th>@lang('ZVR*')</th>
            <th>@lang('# Spieler')</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @forelse($teams as $team)
            <tr>
                <td>{{ $team->acronym }}</td>
                <td>{{ $team->name }}</td>
                <td>{{ $team->zvr ?? __('unbekannt') }}</td>
                <td>{{-- $team->participants()->count ?? '-' --}}</td>
                <td>
                    <div class="btn-group" role="group">
                        @if($team->show)
                            <button type="submit"
                                    form="visibility"
                                    value="toggle"
                                    class="btn btn-warning">
                                <i class="bi bi-eye">ausblenden</i></button>
                        @else
                            <button type="submit"
                                    form="visibility"
                                    value="show"
                                    class="btn btn-outline-warning">
                                <i class="bi bi-eye">einblenden</i></button>
                        @endif

                        <a href="{{ route('teams.edit', ['team'=> $team]) }}"
                           class="btn btn-outline-primary">
                            <i class="bi bi-pen">bearbeiten</i></a>
                    </div>
                    <form action="{{ route('teams.visibility', ['team'=> $team]) }}" method="POST" id="visibility">
                        @csrf
                        @method('PATCH')
                        @if($team->show)
                            <input type="hidden" name="show" value="0">
                        @else
                            <input type="hidden" name="show" value="1">
                        @endif
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Keine Teams gefunden</td>
            </tr>
        @endforelse
        </tbody>
    </table>

    <a href="{{ route('teams.create') }}" class="btn btn-primary">Neues Team hinterlegen</a>

@endsection
