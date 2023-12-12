<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cart Page') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <table id="cart" class="table-auto">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Rental Duration (Days)</th>
                                <th>Total</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $total = 0; @endphp
                            @forelse(session('cart', []) as $id => $details)
                                @php $totalPerProduct = $details['price'] * $details['quantity']; @endphp
                                @php $total += $totalPerProduct; @endphp
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <h4 class="nomargin">
                                                    {{ $details['product_name'] ?? 'Product Name Not Set' }}</h4>
                                            </div>
                                        </div>
                                    </td>
                                    <td>${{ number_format($details['price'], 2) }}</td>
                                    <td>{{ $details['quantity'] }}</td>
                                    <td>{{ $details['days'] ?? 'N/A' }}</td>
                                    <td>${{ number_format($totalPerProduct, 2) }}</td>
                                    <td>
                                        <form action="{{ route('update.cart.item', $id) }}" method="POST">
                                            @csrf
                                            @method('patch')
                                            <input type="number" name="quantity" value="{{ $details['quantity'] }}"
                                                class="form-control quantity" min="1" />
                                            <button type="submit" class="btn btn-info btn-sm mt-2">Update</button>
                                        </form>
                                        <form action="{{ route('delete.cart.item', $id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm mt-2">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6">Your cart is empty</td>
                                </tr>
                            @endforelse
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="6" class="text-right"><strong>Total:
                                        ${{ number_format($total, 2) }}</strong></td>
                            </tr>
                            <tr>
                                <td colspan="6" class="text-right">
                                    <a href="{{ url('/home') }}" class="btn btn-primary">Continue Shopping</a>
                                    <form action="{{ route('checkout') }}" method="POST" style="display: inline;">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Checkout</button>
                                    </form>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
