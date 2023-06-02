<h1>Product List</h1>

<a href="{{ route('features.create') }}" class="btn btn-primary">Add New Product</a>

@if(count($features) > 0)
    <ul>
        @foreach($features as $product)
            <li>{{ $product->name }} - {{ $product->price }}</li>
        @endforeach
    </ul>
@else
    <p>No products available.</p>
@endif
