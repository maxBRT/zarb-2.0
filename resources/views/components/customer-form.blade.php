@props(['customer' => null])

@php
    // If a customer exists, we are editing; otherwise, we are creating.
    $isEdit = $customer && $customer->exists;
    $action = $isEdit ? route('customers.update', $customer) : route('customers.store');
    $buttonText = $isEdit ? 'Mettre à jour' : 'Créer';
@endphp

<form method="POST" action="{{ $action }}">
    @csrf
    
    @if($isEdit)
        @method('PUT')
    @endif

    <x-error-helper :errors="$errors" />

    <label for="firstname">Prénom</label>
    <input type="text" name="firstname" value="{{ old('firstname', $customer?->firstname) }}" required>

    <label for="lastname">Nom</label>
    <input type="text" name="lastname" value="{{ old('lastname', $customer?->lastname) }}" required>

    <label for="email">Courriel</label>
    <input type="email" name="email" value="{{ old('email', $customer?->email) }}" required>

    <label for="phone">Téléphone</label>
    <input type="text" name="phone" value="{{ old('phone', $customer?->phone) }}" required>

    <label for="address">Adresse</label>
    <input type="text" name="address" value="{{ old('address', $customer?->address) }}" required>

    <label for="postal_code">Code postal</label>
    <input type="text" name="postal_code" value="{{ old('postal_code', $customer?->postal_code) }}">

    <label for="city">Ville</label>
    <input type="text" name="city" value="{{ old('city', $customer?->city) }}" required>

    <label for="company">Entreprise</label> 
    <input type="text" name="company" value="{{ old('company', $customer?->company) }}">

    <button type="submit">{{ $buttonText }}</button>
</form>