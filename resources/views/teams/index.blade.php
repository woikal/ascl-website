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
                <td>{{ $team->akronym }}</td>
                <td>{{ $team->name }}</td>
                <td>{{ $team->zvr ?? __('unbekannt') }}</td>
                <td>{{-- $team->participants()->count ?? '-' --}}</td>
                <td>
                    @dump($team)
                    @if($team->show)
                        <form action="{{ route('teams.hide', ['team'=> $team]) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="show" value="0">
                            <button type="submit"
                                    value="hide"
                                    class="btn btn-primary">
                                <i class="bi bi-eye"></i></button>
                        </form>
                    @else
                        <form action="{{ route('teams.show', ['team'=> $team]) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="show" value="1">
                            <button type="submit"
                                    value="show"
                                    class="btn btn-outline-primary">
                                <i class="bi bi-eye"></i></button>
                        </form>
                    @endif

                    <a href="{{ route('teams.edit', ['team'=> $team]) }}"
                       class="btn btn-outline-primary">
                        <i class="bi bi-pen"></i></a>


                    <form action="{{ route('teams.destroy', ['team'=> $team]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                value="X"
                                class="btn btn-danger">
                            <i class="bi bi-eye"></i></button>
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
