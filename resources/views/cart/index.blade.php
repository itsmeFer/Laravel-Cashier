@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Your Cart</h1>

        <a href="{{ route('products.index') }}" class="btn btn-primary mb-4">Back to Products</a>

        @if(session('cart'))
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach(session('cart') as $id => $details)
                        <tr>
                            <td>{{ $details['name'] }}</td>
                            <td>{{ $details['quantity'] }}</td>
                            <td>${{ $details['price'] }}</td>
                            <td>
                                <form action="{{ route('cart.remove', $id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-3">
                <strong>Total: </strong> ${{ array_sum(array_column(session('cart'), 'price')) }}
            </div>
        @else
            <p>Your cart is empty.</p>
        @endif
    </div>
@endsection
