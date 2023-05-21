@extends('layout.general')

@section('title', __('Neues Team anlegen'))

@section('content')
    <x-form method="POST" :action="route('teams.store')">
        <div class="row">
            <div class="col-2">
                <x-form-input name="acronym" label="Abkürzung"/>
            </div>

            <div class="col">
                <x-form-input name="name" label="Name"/>
            </div>

            <div class="col-2">
                <x-form-input type="number" name="zvr" label="ZVR Nr."/>
            </div>

            <div class="col-12">
                <x-form-checkbox name="show" label="In Formularen anzeigen"/>
            </div>

            <div class="col-12">
                <x-form-submit>Speichern</x-form-submit>
            </div>
        </div>
    </x-form>

@endsection
