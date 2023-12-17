@extends('admin.layouts.home')
@section('content')
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-800">
            Rental Return Data
        </h2>

        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="w-full overflow-x-auto">
                <table class="min-w-full whitespace-no-wrap">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">Borrower's name</th>
                            <th class="px-4 py-3">Quantity</th>
                            <th class="px-4 py-3">Borrow Date</th>
                            <th class="px-4 py-3">Return Date</th>
                            <th class="px-4 py-3">Total Price</th>
                            <th class="px-4 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800+">
                        @forelse ($orders as $order)
                            <tr class="text-gray-700 dark:text-gray-800">
                                <td class="px-5 py-3">
                                    <div class="flex items-center text-sm">
                                        <p class="font-semibold">{{ $order->user_name }}</p>

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
                                        <p class="font-semibold">Rp{{ number_format($order->total_price), 2 }}</p>
                                    </div>
                                </td>

                                <td class="text-center">
                                    <form action="{{ route('confirm.return', $order->id) }}" method="POST" class="mt-2">
                                        @csrf
                                        @method('PUT')
                                        @if ($order->bayar)
                                            <button type="submit"
                                                class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 rounded">
                                                Confirm
                                            </button>
                                        @else
                                            <button type="submit"
                                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">
                                                Confirm
                                            </button>
                                            <br>
                                            <p class="text-red-600" style="font-size:10px">Kena Penalty : Rp
                                                {{ number_format($order->penalty), 2 }}</p>
                                        @endif
                                    </form>
                                </td>

                            </tr>
                        @empty
                            <div class="alert alert-danger">
                                Tidak ada produk yang dikembalikan saat ini.
                            </div>
                        @endforelse
                    </tbody>
                </table>
                {{ $orders->links() }}
            </div>
        </div>
    </div>
@endsection
