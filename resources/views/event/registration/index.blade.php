@extends('general')

@section('title', __('Eventanmeldungen'))

@isset($event)
    @section('subtitle', $event->name.', '.$event->date->format(__('d. M Y')))
@endif

@section('content')

    @forelse($registrations as $registration)
        @dump($registration)

        <table>
            <tr>
                <td></td>
            </tr>
        </table>
    @empty
        No entries
    @endforelse
@endsection