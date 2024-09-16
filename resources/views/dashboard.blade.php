@extends('layout')

@section('title', 'Dashboard')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Dashboard</h1>
    @if($products->isEmpty())
        <p>No products found.</p>
    @else
        @include('shared\product-cards', ['products' => $products])
    @endif
</div>
@endsection
