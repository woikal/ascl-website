<x-form method="POST" :action="route({{ $route }})">
    @bind($participant)
    <x-form-hidden name="event"/>
    <x-form-textarea name="description" label="Beschreibung"/>
    <x-form-group>
        <x-form-input name="forename" label="Vorname" required/>
        <x-form-input name="surname" label="Familienname" required/>
    </x-form-group>
    <x-form-input name="nickname" label="Rufzeichen"/>
    <x-form-input name="club" label="Team / Verein"/>
    <x-form-group>
        <x-form-input type="email" name="email" label="E-Mail"/>
        <x-form-date name="birthday" label="Geburtsdatum"/>
    </x-form-group>
    <x-form-select name="rent_equipment" label="Leihausrüstung" :options="[
        'rent' => 'Eigene Ausrüstung vorhanden',
        'own' => 'Leihausrüstung benötigt',
]">
    </x-form-select>

    <x-form-submit>Anmelden</x-form-submit>
    @endbind
</x-form>

@dump($participant ?? null)
