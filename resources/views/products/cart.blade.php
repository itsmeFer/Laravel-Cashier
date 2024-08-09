<h1>Your Cart</h1>
@foreach($cart as $id => $details)
    <div>
        <h2>{{ $details['name'] }}</h2>
        <p>Quantity: {{ $details['quantity'] }}</p>
        <p>Price: {{ $details['price'] }}</p>
    </div>
@endforeach
<form action="{{ route('products.checkout') }}" method="POST">
    @csrf
    <button type="submit">Checkout</button>
</form>
