<h1>Add Product</h1>

<form method="POST" action="{{ route('features.store') }}">
    @csrf

    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
    </div>

    <div>
        <label for="price">Price:</label>
        <input type="number" name="price" id="price">
    </div>

    <button type="submit">Save</button>
</form>
