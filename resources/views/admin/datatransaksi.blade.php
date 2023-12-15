@extends('admin.layouts.home')
@section('content')
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-800">
            History Transactions
        </h2>

        <div class="bg-white shadow-md rounded-lg">
            <div class="w-full">
                <table class="min-w-full whitespace-no-wrap">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">Borrow Date</th>
                            <th class="px-4 py-3">BORROWER'S NAME</th>
                            <th class="px-4 py-3">Return Date</th>
                            <th class="px-4 py-3">Penalty</th>
                            <th class="px-4 py-3">Total Price</th>
                            <th class="px-4 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800+">
                        @forelse ($orders as $order)
                            <tr class="text-gray-700 dark:text-gray-800">
                                <td class="px-5 py-3">
                                    <div class="flex items-center text-sm">
                                        <p class="font-semibold">{{ $order->borrow_date }}</p>

                                    </div>
                                </td>
                                <td class="px-5 py-3">
                                    <div class="flex items-center text-sm">
                                        <p class="font-semibold">{{ $order->user_name }}</p>

                                    </div>
                                </td>
                                <td class="px-5 py-3">
                                    <div class="flex items-center text-sm">
                                        <p class="font-semibold">{{ $order->return_date }}</p>

                                    </div>
                                </td>
                                <td class="px-5 py-3">
                                    <div class="flex items-center text-sm">
                                        <p class="font-semibold text-red-400">Rp{{ number_format($order->penalty), 2 }}</p>

                                    </div>
                                </td>
                                <td class="px-5 py-3">
                                    <div class="flex items-center text-sm">
                                        <p class="font-semibold">Rp{{ number_format($order->total_price), 2 }}</p>

                                    </div>
                                </td>
                                <td>
                                <a href="{{ route('data-transaksi.show', $order->id) }}"
                                            class="px-2 py-2 text-sm font-medium leading-5 text-green-500 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                            aria-label="Show">
                                            See Details
                                        </a>
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
