<div>
    <h1>Clients</h1>
    <ul>
    @foreach ($customers as $c)
        <li>
            <a href="{{ route('customers.show', $c) }}">
            {{ $c->firstname }}, {{ $c->email }}, {{ $c->phone }}, {{ $c->address }}, {{ $c->postal_code }}, {{ $c->city }}
            </a>
        </li>
    @endforeach
    </ul>
</div>
