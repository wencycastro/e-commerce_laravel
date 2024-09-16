@extends('layout')

@section('title', 'Create Product')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm p-4">
        <h1 class="mb-4">Create a New Product</h1>
        <form action="{{ route('store_product') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="productName" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="productName" name="name" required>
            </div>
            <div class="mb-3">
                <label for="productDescription" class="form-label">Product Description</label>
                <textarea class="form-control" id="productDescription" name="description" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="productImage" class="form-label">Product Image URL</label>
                <input type="url" class="form-control" id="productImage" name="image" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
