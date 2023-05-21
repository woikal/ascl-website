@extends('layout.general')

@section('title', __('Adressen'))


@section('content')

    <table class="table">
        <thead>

        <tr>
            <th>@lang('ID')</th>
            <th>@lang('Addresse')</th>
            <th>@lang('country')</th>
            <th>@lang('lat / long')</th>
            <th>@lang('route')</th>
            <th>@lang('Referenz')</th>
            <th></th>


        </tr>
        </thead>
        <tbody>
        @forelse($addresses as $address)
            <tr>
                <td>{{ $address->id }}<br>
                <td>{{ $address->address }}<br>
                    {{ $address->zipcode }}&nbsp;{{ $address->city }}</td>
                <td>{{ $address->country }}</td>
                <td><nobr>{{ $address->latitude }} / {{ $address->longitude }}</nobr></td>
                <td>{{ $address->route }}</td>
                <td>{{ $address->addressable()::class ?? '-' }}</td>
                <td>
                    <div class="btn-group" role="group">

                        <a href="{{ route('addresses.edit', ['address' => $address]) }}"
                           class="btn btn-outline-primary">
                            <i class="bi bi-pen">bearbeiten</i></a>

                        <button type="submit"
                                form="delete"
                                value="delete"
                                class="btn btn-danger">
                            <i class="bi bi-trash">löschen</i></button>
                    </div>

                    <form action="{{ route('addresses.destroy', ['address'=> $address]) }}" method="POST" id="delete">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Keine Adressen gefunden</td>
            </tr>
        @endforelse
        </tbody>
    </table>
@endsection
