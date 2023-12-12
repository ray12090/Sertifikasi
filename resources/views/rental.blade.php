<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Rental Page') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-4">
                <form action="{{ route('rental') }}" method="GET" class="flex gap-4">
                    <input type="text" name="search" placeholder="Search by name" value="{{ request('search') }}" class="form-control">
                    <select name="category" class="form-control">
                        <option value="all" {{ request('category') == 'all' ? 'selected' : '' }}>All Categories</option>
                        @foreach($categories as $category)
                            <option value="{{ $category }}" {{ request('category') == $category ? 'selected' : '' }}>{{ $category }}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="btn btn-primary">Filter</button>
                </form>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @forelse($products as $product)
                        <div class="card border rounded shadow hover:shadow-md transition duration-300">
                            <img class="w-full h-48 object-cover object-center"
                                src="{{ asset('storage/' . $product->photo) }}" alt="{{ $product->product_name }}" />
                            <div class="p-4">
                                <h3 class="font-bold text-lg mb-2">{{ $product->product_name }}</h3>
                                <p class="text-gray-700 text-base mb-4">{{ $product->product_description }}</p>
                                <p class="text-gray-900 font-semibold">Price: Rp{{ number_format($product->price, 2) }}
                                </p>

                                <form action="{{ route('additem.to.cart', $product->id) }}" method="POST">
                                    @csrf
                                    <label for="quantity-{{ $product->id }}">Jumlah:</label>
                                    <input type="number" name="quantity" min="1" max="2" value="1"
                                        class="form-control mb-2" />
                                    <label for="days-{{ $product->id }}">Lama Sewa:</label>
                                    <input type="number" name="days" min="1" max="5" value="1"
                                        class="form-control mb-2" />
                                    <button type="submit" class="btn btn-primary">Add to Cart</button>
                                </form>
                            </div>
                        </div>
                    @empty
                        <p class="text-center text-gray-500">No products available.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
