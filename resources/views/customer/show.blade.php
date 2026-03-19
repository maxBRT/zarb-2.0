<x-layouts.dashboard>
    <div>
        <h1>Client</h1>
        <div>
            <p>Prenom: {{ $customer->firstname }}</p>
            <p>Nom: {{ $customer->lastname }}</p>
            <p>Email: {{ $customer->email }}</p>
            <p>Téléphone: {{ $customer->phone }}</p>
            <p>Adresse: {{ $customer->address }}</p>
            <p>Code postal: {{ $customer->postal_code }}</p>
            <p>Ville: {{ $customer->city }}</p>
            @if ($customer->company)
                <p>Entreprise: {{ $customer->company }}</p>
            @endif
            <div>
                <a href="{{ route('customers.edit', $customer) }}">Modifier</a>
                <a href="{{ route('customers.index') }}">Retour aux clients</a>
                <div x-data="{ show: false }">
                    <button x-on:click="show = ! show">Supprimer</button>
                    <div x-show="show" x-transition>
                        <form method="POST" action="{{ route('customers.destroy', $customer) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Supprimer</button>
                            <button type="button" x-on:click="show = false">Annuler</button>
                        </form>
                    </div>
                </div>
</x-layouts.dashboard>
