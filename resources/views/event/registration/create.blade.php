@extends('layout.general')

@section('title', __('Eventanmeldung'))

@isset($event)
    @section('subtitle', $event->name.', '.$event->date->format(__('d. M Y')))
@endif

@section('content')

    <div class="form-field">
        <label for="name">{{ __('Vorname') }}</label>
        <input type="text" id="name" name="name">
    </div>
    <div class="form-field">
        <label for="surname">{{ __('Nachname') }}</label>
        <input type="text" id="surname" name="surname">
    </div>
    <div class="form-field">
        <label for="nickname">{{ __('Rufzeichen / Spielname') }}</label>
        <input type="text" id="nickname" name="nickname" required>
    </div>
    <div class="form-row">
        <div class="form-field form-col">
            <label for="birthdate">{{ __('Geburtsdatum') }}</label>
            <input type="date" id="birthdate" name="birthdate" required>
        </div>

        <div class="form-field form-col">
            <label for="gender">{{ __('Geschlecht') }}</label>
            <select id="gender" name="gender">
                <option disabled>{{ __('bitte wählen') }}</option>
                <option value="m">{{ __('männlich') }}</option>
                <option value="f">{{ __('weiblich') }}</option>
                <option value="d">{{ __('divers') }}</option>
            </select>
        </div>
    </div>
    <div class="form-field">
        <label for="address">{{ __('Adresse') }}</label>
        <input type="text" id="address" name="address" required>
    </div>
    <div class="form-field">
        <label for="zipcode">{{ __('Postleitzahl') }}</label>
        <input type="text" pattern="\d{4,5}" id="zipcode" name="zipcode" required>
    </div>
    <div class="form-field">
        <label for="city">{{ __('Ort') }}</label>
        <input type="text" id="city" name="city" required>
    </div>
    <div class="form-field">
        <label for="phone">{{ __('Telefon') }}</label>
        <input type="text" pattern="\+?(\d )+" id="phone" name="phone" required>
    </div>

    <div class="form-row">
        <div class="form-field">
            <label for="email">{{ __('E-Mail') }}</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <span class="form-label">Newsletter erhalten</span>

            <div class="form-field">
                <input type="radio" id="newsletter_yes" name="newsletter" value="true">
                <label for="newsletter_yes">{{ __('ja') }}</label>
            </div>
            <div class="form-field">
                <input type="radio" id="newsletter_no" name="newsletter" value="false">
                <label for="newsletter_no">{{ __('nein') }}</label>
            </div>
        </div>
    </div>

    <div class="form-field">
        <label for="gdpr">{{ __('Datenschutz') }}</label>
        <input type="checkbox" id="gdpr" name="gdpr" value="true" required>
    </div>

@endsection
