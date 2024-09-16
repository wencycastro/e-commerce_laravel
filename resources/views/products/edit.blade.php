@extends('layout')

@section('title', 'Edit Product')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm p-4">
        <h1 class="mb-4">Edit Product</h1>
        <form action="{{ route('update_product', $product->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="productName" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="productName" name="name" value="{{ $product->name }}" required>
            </div>
            <div class="mb-3">
                <label for="productDescription" class="form-label">Product Description</label>
                <textarea class="form-control" id="productDescription" name="description" rows="3" required>{{ $product->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="productImage" class="form-label">Product Image URL</label>
                <input type="url" class="form-control" id="productImage" name="image" value="{{ $product->image }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
