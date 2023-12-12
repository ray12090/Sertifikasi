<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Your Orders') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">Active Orders</h3>
                    <table class="table-auto w-full mb-8">
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
                            @forelse($orders as $order)
                                <tr>
                                    <td>{{ $order->product_name }}</td>
                                    <td>${{ number_format($order->total_price, 2) }}</td>
                                    <td>{{ $order->quantity }}</td>
                                    <td>{{ $order->days }}</td>
                                    <td>${{ number_format($order->total_price, 2) }}</td>
                                    <td>
                                        <form action="{{ route('return.order', $order->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Return</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6">No active orders</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    <!-- Returned Orders Table -->
                    <h3 class="text-lg leading-6 font-medium text-gray-900">Returned Orders</h3>
                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Rental Duration (Days)</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($returnOrders as $returnOrder)
                                <tr>
                                    <td>{{ $returnOrder->product_name }}</td>
                                    <td>${{ number_format($returnOrder->total_price, 2) }}</td>
                                    <td>{{ $returnOrder->quantity }}</td>
                                    <td>{{ $returnOrder->days }}</td>
                                    <td>${{ number_format($returnOrder->total_price, 2) }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6">No returned orders</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
