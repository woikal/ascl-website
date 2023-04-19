@extends('layout.general')

@section('title', __('Veranstaltungsort anlegen'))

@section('content')
    @php($states = [
        'bgl'   => __('Burgenland'),
        'k'     => __('Kärnten'),
        'noe'   => __('Niederösterreich'),
        'ooe'   => __('Oberösterreich'),
        's'     => __('Salzburg'),
        'stmk'  => __('Steiermark'),
        't'     => __('Tirol'),
        'vbg'   => __('Vorarlberg'),
        'w'     => __('Wien'),
    ])

    <x-form method="POST" :action="route('locations.store')">
        @bind($location)
        <x-form-input name="name" label="Name"/>
        <x-form-textarea name="description" label="Beschreibung"/>
        <x-form-input type="number" name="max_players" label="Max. Spielerzahl"/>
        <x-form-input name="address" label="Adresse"/>
        <x-form-group>
            <x-form-input type="number" name="zipcode" label="PLZ"/>
            <x-form-input name="city" label="Stadt"/>
            <x-form-select name="state" :options="$states" label="Bundesland"/>
        </x-form-group>

        <x-form-submit>Speichern</x-form-submit>
        @endbind
    </x-form>

    @dump($location)

@endsection
