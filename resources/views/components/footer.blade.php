@if(isset($error) or  isset($errors))
    <x-form::invalid-feedback>
        {{$error??$errors->first($attributes->wire('model')->value())}}
    </x-form::invalid-feedback>
@endif


