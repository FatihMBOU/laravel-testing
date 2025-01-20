<x-app-layout>
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">Create Product</h1>
        <form method="POST" action="{{ route('products.store') }}">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium">Name:</label>
                <input type="text" name="name" id="name" class="w-full border rounded">
            </div>
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium">Description:</label>
                <textarea name="description" id="description" class="w-full border rounded"></textarea>
            </div>
            <div class="mb-4">
                <label for="price" class="block text-sm font-medium">Price:</label>
                <input type="number" step="0.01" name="price" id="price" class="w-full border rounded">
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Add Product</button>
        </form>
    </div>
</x-app-layout>
