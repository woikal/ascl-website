@php use App\Models\Location; @endphp
@extends('administration.general')

@section('content')
    <x-form.form action="location.store">
        <x-form.input name="name" value="{{ $location->name }}"/>
        <x-form.textarea name="description" value="{{ $location->description }}"/>
        <x-form.number name="max_players" value="{{ $location->max_players }}"/>
        <x-form.input name="address" value="{{ $location->address }}"/>
        <x-form.number name="zipcode" value="{{ $location->zipcode }}"/>
        <x-form.input name="city" value="{{ $location->commune }}"/>
        <x-form.select name="state" selected="{{ $location->state }}">
            <x-form.option value="bgl">Bgl</x-form.option>
            <x-form.option value="k">K</x-form.option>
            <x-form.option value="noe">NÖ</x-form.option>
            <x-form.option value="ooe">Oö</x-form.option>
            <x-form.option value="s">S</x-form.option>
            <x-form.option value="stmk">Stmk</x-form.option>
            <x-form.option value="t">T</x-form.option>
            <x-form.option value="vbg">Vbg</x-form.option>
            <x-form.option value="w">W</x-form.option>
        </x-form.select>
    </x-form.form>

    @dump($location)
@endsection

