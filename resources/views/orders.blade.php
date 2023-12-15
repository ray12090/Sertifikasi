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
                    <h3 class="text-lg leading-6 font-bold text-gray-900" align="center">Active Orders</h3>
                    <div class="pb-6 pt-3 ">
                        <table class="w-full text-sm">
                            <thead>
                                <tr>
                                    <th
                                        class="border-b dark:border-slate-600 font-bold p-4 pl-8 pt-0 pb-3 text-slate-800 dark:text-slate-800 text-center">
                                        Status</th>
                                    <th
                                        class="border-b dark:border-slate-600 font-bold p-4 pl-8 pt-0 pb-3 text-slate-800 dark:text-slate-800 text-center">
                                        Product</th>
                                    <th
                                        class="border-b dark:border-slate-600 font-bold p-4 pl-8 pt-0 pb-3 text-slate-800 dark:text-slate-800 text-center">
                                        Quantity</th>
                                    <th
                                        class="border-b dark:border-slate-600 font-bold p-4 pl-8 pt-0 pb-3 text-slate-800 dark:text-slate-800 text-center">
                                        Borrow Date</th>
                                    <th
                                        class="border-b dark:border-slate-600 font-bold p-4 pl-8 pt-0 pb-3 text-slate-800 dark:text-slate-800 text-center">
                                        Return Date</th>
                                    <th
                                        class="border-b dark:border-slate-600 font-bold p-4 pl-8 pt-0 pb-3 text-slate-800 dark:text-slate-800 text-center">
                                        Price</th>
                                    <th
                                        class="border-b dark:border-slate-600 font-bold p-4 pl-8 pt-0 pb-3 text-slate-800 dark:text-slate-800 text-center">
                                        Penalty</th>
                                    <th
                                        class="border-b dark:border-slate-600 font-bold p-4 pl-8 pt-0 pb-3 text-slate-800 dark:text-slate-800 text-center">
                                        Total</th>
                                    {{-- <th
                                        class="border-b dark:border-slate-600 font-bold p-4 pl-8 pt-0 pb-3 text-slate-800 dark:text-slate-800 text-center">
                                        Actions</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($orders as $order)
                                    <tr>
                                        <td
                                            class="border-b dark:border-slate-600 font-bold p-4 pl-8 text-slate-800 dark:text-slate-600 text-center">
                                            @if ($order->status == 1)
                                                <form action="{{ route('update.order.status', $order->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit"
                                                        class="text-white bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded">
                                                        Mark as Returned
                                                    </button>
                                                </form>
                                            @else
                                                <button
                                                    class="text-black bg-yellow-300 font-bold py-2 px-4 rounded">
                                                    Process Return
                                            @endif
                                        </td>
                                        <td
                                            class="border-b dark:border-slate-600 font-bold p-4 pl-8 text-slate-800 dark:text-slate-600 text-center">
                                            {{ $order->product_name }}</td>
                                        <td
                                            class="border-b dark:border-slate-600 font-bold p-4 pl-8 text-slate-800 dark:text-slate-600 text-center">
                                            {{ $order->quantity }}</td>
                                        <td
                                            class="border-b dark:border-slate-600 font-bold p-4 pl-8 text-slate-800 dark:text-slate-600 text-center">
                                            {{ $order->borrow_date }}</td>
                                        <td
                                            class="border-b dark:border-slate-600 font-bold p-4 pl-8 text-slate-800 dark:text-slate-600 text-center">
                                            {{ $order->return_date }}</td>
                                        <td
                                            class="border-b dark:border-slate-600 font-bold p-4 pl-8 text-slate-800 dark:text-slate-600 text-center">
                                            Rp{{ number_format($order->price, 2) }}</td>
                                        <td
                                            class="border-b dark:border-slate-600 font-bold p-4 pl-8 text-red-800 dark:text-red-600 text-center">
                                            Rp{{ number_format($order->penalty, 2) }}</td>
                                        <td
                                            class="border-b dark:border-slate-600 font-bold p-4 pl-8 text-slate-800 dark:text-slate-600 text-center">

                                            Rp{{ number_format($order->total_price, 2) }}</td>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7"
                                            class="font-bold p-4 pl-8 text-slate-800 dark:text-slate-800 text-center">No
                                            active orders</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <h3 class="text-lg leading-6 font-bold text-gray-900" align="center">Returned Orders</h3>
                    <div class="pt-3">
                        <table class="w-full text-sm">
                            <thead>
                                <tr>
                                    <!-- <th
                                        class="border-b dark:border-slate-600 font-bold p-4 pl-8 pt-0 pb-3 text-slate-800 dark:text-slate-800 text-center">
                                        Status</th> -->
                                    <th
                                        class="border-b dark:border-slate-600 font-bold p-4 pl-8 pt-0 pb-3 text-slate-800 dark:text-slate-800 text-center">
                                        Product</th>
                                    <th
                                        class="border-b dark:border-slate-600 font-bold p-4 pl-8 pt-0 pb-3 text-slate-800 dark:text-slate-800 text-center">
                                        Quantity</th>
                                    <td
                                        class="border-b dark:border-slate-600 font-bold p-4 pl-8 pt-0 pb-3 text-slate-800 dark:text-slate-800 text-center">
                                        Borrow Date</td>
                                    <td
                                        class="border-b dark:border-slate-600 font-bold p-4 pl-8 pt-0 pb-3 text-slate-800 dark:text-slate-800 text-center">
                                        Return Date</td>
                                    <th
                                        class="border-b dark:border-slate-600 font-bold p-4 pl-8 pt-0 pb-3 text-slate-800 dark:text-slate-800 text-center">
                                        Price</th>
                                    <td
                                        class="border-b dark:border-slate-600 font-bold p-4 pl-8 pt-0 pb-3 text-slate-800 dark:text-slate-800 text-center">
                                        Penalty</td>
                                    <td
                                        class="border-b dark:border-slate-600 font-bold p-4 pl-8 pt-0 pb-3 text-slate-800 dark:text-slate-800 text-center">
                                        Total</td>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($returnOrders as $returnOrder)
                                    <tr>
                                        <!-- <td
                                            class="border-b dark:border-slate-600 font-bold p-4 pl-8 text-center">
                                            @if ($returnOrder->penalty <= 0)
                                                <p class="text-green-700">Tepat Waktu</p>
                                            @else 
                                                <p class="text-red-600">Telat</p>
                                            @endif
                                        </td> -->
                                        <td
                                            class="border-b dark:border-slate-600 font-bold p-4 pl-8 text-slate-800 dark:text-slate-600 text-center">
                                            {{ $returnOrder->product_name }}</td>
                                        <td
                                            class="border-b dark:border-slate-600 font-bold p-4 pl-8 text-slate-800 dark:text-slate-600 text-center">
                                            {{ $returnOrder->quantity }}</td>
                                        <td
                                            class="border-b dark:border-slate-600 font-bold p-4 pl-8 text-slate-800 dark:text-slate-600 text-center">
                                            {{ $returnOrder->borrow_date }}</td>
                                        <td
                                            class="border-b dark:border-slate-600 font-bold p-4 pl-8 text-slate-800 dark:text-slate-600 text-center">
                                            {{ $returnOrder->return_date }}</td>
                                        <td
                                            class="border-b dark:border-slate-600 font-bold p-4 pl-8 text-slate-800 dark:text-slate-600 text-center">
                                            Rp{{ number_format($returnOrder->total_price, 2) }}</td>
                                        <td
                                            class="border-b dark:border-slate-600 font-bold p-4 pl-8 text-red-800 dark:text-red-600 text-center">
                                            Rp{{ number_format($returnOrder->penalty, 2) }}</td>
                                        <td
                                            class="border-b dark:border-slate-600 font-bold p-4 pl-8 text-slate-800 dark:text-slate-600 text-center">
                                            Rp{{ number_format($returnOrder->total_price, 2) }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8"
                                            class="font-bold p-4 pl-8 text-slate-800 dark:text-slate-800 text-center">No
                                            returned orders</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
