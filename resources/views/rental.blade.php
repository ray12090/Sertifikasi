<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Selamat Menyewa, ') }}{{ Auth::user()->name }}
        </h2>
    </x-slot>

    <!-- Flash messages -->
    <div class="container mx-auto p-4">
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Success!</strong>
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        @if (session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Error!</strong>
                <span class="block sm:inline">{{ session('error') }}</span>
            </div>
        @endif
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-8">
            <div class="mb-4">
                <form action="{{ route('rental') }}" method="GET" class="flex gap-4">
                    <input type="text" name="search" placeholder="Search by name" value="{{ request('search') }}"
                        class="text-sm">
                    <select name="category" class="text-sm">
                        <option value="all" {{ request('category') == 'all' ? 'selected' : '' }}>All Categories
                        </option>
                        @foreach ($categories as $category)
                            <option value="{{ $category }}"
                                {{ request('category') == $category ? 'selected' : '' }}>{{ $category }}</option>
                        @endforeach
                    </select>
                    <button type="submit"
                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-large rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">Filter</button>
                </form>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @forelse($products as $product)
                        <div class="max-w-sm rounded overflow-hidden shadow-lg flex flex-col justify-between">
                            <div class="p-4 flex-grow">
                                @php
                                    $maxQuantity = min($product->stock, 2);
                                @endphp
                                @if ($product->photo)
                                    <img src="{{ asset('products/' . $product->photo) }}" class="rounded-t"
                                        align="center" style="height: 300px">
                                @else
                                    <img src="{{ asset('/products/dummy.jpg') }}" align="center" class="rounded-t">
                                @endif
                                <h3 class="font-bold text-xl mb-2">{{ $product->product_name }}</h3>
                                <p class="text-gray-700 mb-4">{{ $product->product_description }}</p>
                                <!-- Stock display -->
                                <p class="text-gray-900 font-bold mb-4">Stock: {{ $product->stock }}</p>
                                <p class="text-gray-900 font-bold mb-4">
                                    Max quantity to borrow: {{ $maxQuantity }}
                                </p>

                                <p class="text-gray-900 font-bold text-lg mb-4" align="right">
                                    Price: Rp{{ number_format($product->price, 2) }}
                                </p>

                                <form action="{{ route('additem.to.cart', $product->id) }}" method="POST"
                                    align="right">
                                    @csrf
                                    <label for="quantity-{{ $product->id }}" align="right">Jumlah:</label>
                                    <input type="number" name="quantity" min="1"
                                        max="{{ $product->stock < 2 ? $product->stock : 2 }}" value="1"
                                        class="p-1 pl-2 w-10" oninput="checkQuantity(this, {{ $product->stock }})" />


                                    <button type="submit"
                                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full"
                                        align="right">Add to Cart</button>
                                </form>
                                <div class="px-6 pt-4 pb-2">
                                    <span
                                        class="inline-block bg-gray-200 rounded-full px-3 py-1 text-xs font-semibold text-gray-700 mr-2 mb-2">#{{ $product->category1 }}</span>
                                    <span
                                        class="inline-block bg-gray-200 rounded-full px-3 py-1 text-xs font-semibold text-gray-700 mr-2 mb-2">#{{ $product->category2 }}</span>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p class="text-center text-gray-500">No products available.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>

    <script>
        function checkQuantity(element, stock) {
            let maxQuantity = stock < 2 ? stock : 2;
            if (element.value > maxQuantity) {
                alert('The maximum quantity is ' + maxQuantity + '.');
                element.value = maxQuantity;
            }
        }
    </script>

</x-app-layout>
