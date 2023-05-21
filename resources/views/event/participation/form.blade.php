<x-form-form action="store">
    <x-form-input name="name" value="{{ $participation->name }}"/>
    <x-form-input name="surname" value="{{ $participation->surname }}"/>
    <x-form-input name="club" value="{{ $participation->club }}"/>
    <x-form-date name="club" value="{{ $participation->date }}"/>
    <x-form-static-text value="{{ $participation->date }}"/>
    <x-form-textarea name="comment" value="{{ $participation->club }}"/>
</x-form-form>
