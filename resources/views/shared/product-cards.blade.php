<div class="container mt-4">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($products as $product)
            <div class="col">
                <div class="card h-100 shadow-sm border-0">
                    <img src="{{ $product->image }}" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text text-muted">{{ $product->description }}</p>
                    </div>
                    <div class="card-footer bg-transparent">
                        <a href="{{ route('edit_product', $product->id) }}" class="btn btn-warning w-100 mt-2">Edit</a>
                        <form action="{{ route('delete_product', $product->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger w-100 mt-2">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
