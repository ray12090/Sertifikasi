@extends('admin.adminhome')
@section('content')
    <div class="container mx-auto px-4 sm:px-6 lg:px-8" style="width:1000px">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-800">
            Data Transaksi
        </h2>

        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="w-full overflow-x-auto">
                <table class="min-w-full whitespace-no-wrap">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">ID Transaksi</th>
                            <th class="px-4 py-3">ID User</th>
                            <th class="px-4 py-3">ID Product</th>
                            <th class="px-4 py-3">Product Name</th>
                            <th class="px-4 py-3">Quantity</th>
                            <th class="px-4 py-3">Borrow Date</th>
                            <th class="px-4 py-3">Return Date</th>
                            <th class="px-4 py-3">Total Paid</th>
                            <th class="px-4 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @forelse ($data as $transaction)
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-5 py-3">
                                    <div class="flex items-center text-sm">
                                        <p class="font-semibold">{{ $transaction->id }}</p>

                                    </div>
                                </td>
                                <td class="px-5 py-3">
                                    <div class="flex items-center text-sm">
                                        <p class="font-semibold">{{ $transaction->user_id }}</p>

                                    </div>
                                </td>
                                <td class="px-5 py-3">
                                    <div class="flex items-center text-sm">
                                        <p class="font-semibold">{{ $transaction->product_id }}</p>

                                    </div>
                                </td>
                                <td class="px-5 py-3">
                                    <div class="flex items-center text-sm">
                                        <p class="font-semibold">{{ $transaction->product_name }}</p>

                                    </div>
                                </td>
                                <td class="px-5 py-3">
                                    <div class="flex items-center text-sm">
                                        <p class="font-semibold">{{ $transaction->quantity }}</p>

                                    </div>
                                </td>
                                <td class="px-5 py-3">
                                    <div class="flex items-center text-sm">
                                        <p class="font-semibold">{{ $transaction->borrow_date }}</p>

                                    </div>
                                </td>
                                <td class="px-5 py-3">
                                    <div class="flex items-center text-sm">
                                        <p class="font-semibold">{{ $transaction->return_date }}</p>

                                    </div>
                                </td>
                                <td class="px-5 py-3">
                                    <div class="flex items-center text-sm">
                                        <p class="font-semibold">Rp{{ $transaction->total_price }}</p>

                                    </div>
                                </td>
                                <td class="px-4 py-3">
                                    <div class="flex items-center space-x-4 text-sm">
                                        <a href="{{ route('data-transaksi.show', $transaction->id) }}"
                                            class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-green-500 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                            aria-label="Show">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>

                                        </a>

                                    </div>
                                </td>
                            </tr>
                        @empty
                            <div class="alert alert-danger">
                                Transaksi Kosong.
                            </div>
                        @endforelse
                    </tbody>
                </table>
                {{ $data->links() }}
            </div>
        </div>
    </div>
@endsection
