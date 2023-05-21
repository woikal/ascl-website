@extends('layout.general')

@section('title', __('Adresse bearbeiten'))

@section('content')
    <x-form method="PATCH" :action="route('addresses.update', ['address' => $address])">
        @bind($address)
        <div class="row">
            <div class="col-6">
                <x-form-input name="address" label="{{ __('Anschrift') }}"/>
            </div>

            <div class="col">
                <x-form-input name="zipcode" label="{{ __('PLZ') }}"/>
            </div>

            <div class="col-4">
                <x-form-input name="city" label="{{ __('Stadt') }}"/>
            </div>

            <div class="col-12">
                <x-form-textarea name="route" label="{{ __('Anfahrt') }}"/>
            </div>

            <div class="col-12">
                <x-form-submit>@lang('Speichern')</x-form-submit>

                <button type="submit" form="destroy"
                        value="X"
                        class="btn btn-danger">
                    <i class="bi bi-eye">@lang('löschen')</i></button>
            </div>
        </div>
        @endbind
    </x-form>

    <form action="{{ route('addresses.destroy', ['address'=> $address]) }}" method="POST" id="destroy">
        @csrf
        @method('DELETE')
    </form>

@endsection
