@extends('admin.adminhome')
@section('content')
    <div class="container mx-auto px-4 sm:px-6 lg:px-8" style="width:1000px">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-800">
            Sejarah Transaksi
        </h2>

        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="w-full overflow-x-auto">
                <table class="min-w-full whitespace-no-wrap">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">ID</th>
                            <th class="px-4 py-3">ID User</th>
                            <th class="px-4 py-3">ID Product</th>
                            <th class="px-4 py-3">Product Name</th>
                            <th class="px-4 py-3">Quantity</th>
                            <th class="px-4 py-3">Borrow Date</th>
                            <th class="px-4 py-3">Return Date</th>
                            <th class="px-4 py-3">Price</th>
                            <th class="px-4 py-3">Penalty</th>
                            <th class="px-4 py-3">Total Price</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800+">
                        @forelse ($orders as $order)
                            <tr class="text-gray-700 dark:text-gray-800">
                                <td class="px-5 py-3">
                                    <div class="flex items-center text-sm ">
                                        <p class="font-semibold">{{ $order->id }}</p>

                                    </div>
                                </td>
                                <td class="px-5 py-3">
                                    <div class="flex items-center text-sm">
                                        <p class="font-semibold">{{ $order->user_id }}</p>

                                    </div>
                                </td>
                                <td class="px-5 py-3">
                                    <div class="flex items-center text-sm">
                                        <p class="font-semibold">{{ $order->product_id }}</p>

                                    </div>
                                </td>
                                <td class="px-5 py-3">
                                    <div class="flex items-center text-sm">
                                        <p class="font-semibold">{{ $order->product_name }}</p>

                                    </div>
                                </td>
                                <td class="px-5 py-3">
                                    <div class="flex items-center text-sm">
                                        <p class="font-semibold">{{ $order->quantity }}</p>

                                    </div>
                                </td>
                                <td class="px-5 py-3">
                                    <div class="flex items-center text-sm">
                                        <p class="font-semibold">{{ $order->borrow_date }}</p>

                                    </div>
                                </td>
                                <td class="px-5 py-3">
                                    <div class="flex items-center text-sm">
                                        <p class="font-semibold">{{ $order->return_date }}</p>

                                    </div>
                                </td>
                                <td class="px-5 py-3">
                                    <div class="flex items-center text-sm">
                                        <p class="font-semibold">Rp{{ number_format($order->price), 2 }}</p>

                                    </div>
                                </td>
                                <td class="px-5 py-3">
                                    <div class="flex items-center text-sm">
                                        <p class="font-semibold">Rp{{ number_format($order->penalty), 2 }}</p>

                                    </div>
                                </td>
                                <td class="px-5 py-3">
                                    <div class="flex items-center text-sm">
                                        <p class="font-semibold">Rp{{ number_format($order->total_price), 2 }}</p>

                                    </div>
                                </td>

                            </tr>
                        @empty
                            <div class="alert alert-danger">
                                Produk belum Tersedia.
                            </div>
                        @endforelse
                    </tbody>
                </table>
                {{ $orders->links() }}
            </div>
        </div>
    </div>
@endsection
