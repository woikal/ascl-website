


<x-form.form action="register">
  <x-form.input name="name" value="{{ $registration->name }}"/>
  <x-form.input name="surname" value="{{ $registration->surname }}"/>
  <x-form.input name="club" value="{{ $registration->club }}"/>
  <x-form.date name="club" value="{{ $registration->date }}"/>
  <x-form.static-text value="{{ $registration->date }}"/>
  <x-form.textarea name="comment" value="{{ $registration->club }}"/>
</x-form.form>
