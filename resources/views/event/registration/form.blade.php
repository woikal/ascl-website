<!-- Name -->
<!-- Vorname -->
<!-- Verein -->
<!-- Geburtsdatum -->
<!-- Leihausrüstung -->
<!-- Datenschutz -->
<!-- Absenden -->


<x-forms.form action="register">
  <x-forms.input name="name" value="{{ $registration->name }}"/>
  <x-forms.input name="surname" value="{{ $registration->surname }}"/>
  <x-forms.input name="club" value="{{ $registration->club }}"/>
  <x-forms.date name="club" value="{{ $registration->date }}"/>
  <x-forms.static-text value="{{ $registration->date }}"/>
  <x-forms.textarea name="comment" value="{{ $registration->club }}"/>
</x-forms.form>
