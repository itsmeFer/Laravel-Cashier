<!DOCTYPE html>
<html>
<head>
    <title>Create Transaction</title>
</head>
<body>
    <h1>Create Transaction</h1>
    <form action="{{ route('transactions.store') }}" method="POST">
        @csrf
        <label for="total_amount">Total Amount:</label>
        <input type="text" name="total_amount" id="total_amount" required>
        
        <h2>Products</h2>
        <div id="products">
            @foreach ($products as $product)
                <div>
                    <label>{{ $product->name }}</label>
                    <input type="hidden" name="products[][id]" value="{{ $product->id }}">
                    <input type="number" name="products[][quantity]" placeholder="Quantity" required>
                    <input type="text" name="products[][price]" value="{{ $product->price }}" readonly>
                </div>
            @endforeach
        </div>
        
        <button type="submit">Save</button>
    </form>
</body>
</html>
