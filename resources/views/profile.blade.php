@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Welcome, {{ auth()->user()->name }}</h1>

        <a href="{{ route('cart.index') }}" class="btn btn-primary mb-4">Go to Cart ({{ session('cart') ? count(session('cart')) : 0 }})</a>
    </div>
@endsection
