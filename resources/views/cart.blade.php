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
                    <table id="cart" class="w-full text-sm">
                        <thead>
                            <tr>
                                <th
                                    class="border-b dark:border-slate-600 font-bold p-4 pl-8 pt-0 pb-3 text-slate-800 dark:text-slate-800 text-center">
                                    Product</th>
                                <th
                                    class="border-b dark:border-slate-600 font-bold p-4 pl-8 pt-0 pb-3 text-slate-800 dark:text-slate-800 text-center">
                                    Price</th>
                                <th
                                    class="border-b dark:border-slate-600 font-bold p-4 pl-8 pt-0 pb-3 text-slate-800 dark:text-slate-800 text-center">
                                    Quantity</th>
                                <th
                                    class="border-b dark:border-slate-600 font-bold p-4 pl-8 pt-0 pb-3 text-slate-800 dark:text-slate-800 text-center">
                                    Rental Duration</th>
                                <th
                                    class="border-b dark:border-slate-600 font-bold p-4 pl-8 pt-0 pb-3 text-slate-800 dark:text-slate-800 text-center">
                                    Day(s)</th>
                                <th
                                    class="border-b dark:border-slate-600 font-bold p-4 pl-8 pt-0 pb-3 text-slate-800 dark:text-slate-800 text-center">
                                    Total</th>
                                <th
                                    class="border-b dark:border-slate-600 font-bold p-4 pl-8 pt-0 pb-3 text-slate-800 dark:text-slate-800 text-center">
                                    Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $total = 0; @endphp
                            @forelse(session('cart', []) as $id => $details)
                                @php
                                    $borrowDate = \Carbon\Carbon::parse($details['borrow_date'] ?? today());
                                    $returnDate = \Carbon\Carbon::parse($details['return_date'] ?? today()->addDays(1));
                                    $days = $borrowDate->diffInDays($returnDate);
                                    $totalPerProduct = $details['price'] * $details['quantity'] * $days;
                                    $total += $totalPerProduct;
                                @endphp
                                <tr>
                                    <td
                                        class="border-b dark:border-slate-600 font-bold p-4 pl-8 text-slate-800 dark:text-slate-600 text-center">
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <h4 class="nomargin">
                                                    {{ $details['product_name'] ?? 'Product Name Not Set' }}</h4>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="border-b dark:border-slate-600 font-bold p-4 pl-8 text-slate-800 dark:text-slate-600 text-center">
                                        Rp{{ number_format($details['price'], 2) }}</td>
                                    <td
                                        class="border-b dark:border-slate-600 font-bold p-4 pl-8 text-slate-800 dark:text-slate-600 text-center">
                                        <form action="{{ route('update.cart.item', $id) }}" method="POST">
                                            @csrf
                                            @method('patch')
                                            <input type="number" name="quantity" value="{{ $details['quantity'] }}"
                                                class="p-1 pl-2 w-10" min="1" max="2" />
                                    </td>
                                    <td
                                        class="border-b dark:border-slate-600 font-bold p-4 pl-8 text-slate-800 dark:text-slate-600 text-center">
                                        <label for="borrow_date">Borrow Date:</label>
                                        <input type="date" name="borrow_date"
                                            value="{{ $details['borrow_date'] ?? today()->toDateString() }}"
                                            class="p-1 pl-2 w-50" /><br>
                                        <label for="return_date">Return Date:</label>
                                        <input type="date" name="return_date"
                                            value="{{ $details['return_date'] ??(isset($details['borrow_date'])? \Carbon\Carbon::parse($details['borrow_date'])->addDays(1)->toDateString(): today()->addDays(1)->toDateString()) }}"
                                            max="{{ isset($details['borrow_date'])? \Carbon\Carbon::parse($details['borrow_date'])->addDays(5)->toDateString(): today()->addDays(5)->toDateString() }}"
                                            class="p-1 pl-2 w-50" />
                                    </td>

                                    <td
                                        class="border-b dark:border-slate-600 font-bold p-4 pl-8 text-slate-800 dark:text-slate-600 text-center">
                                        {{ $days }}
                                    </td>
                                    <td
                                        class="border-b dark:border-slate-600 font-bold p-4 pl-8 text-slate-800 dark:text-slate-600 text-center">
                                        Rp{{ number_format($totalPerProduct, 2) }}</td>
                                    <td
                                        class="border-b dark:border-slate-600 font-bold p-4 pl-8 text-slate-800 dark:text-slate-600 text-center">
                                        <button type="submit"
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full w-full">Update</button>
                                        </form>
                                        <form action="{{ route('delete.cart.item', $id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit"
                                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full w-full">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7"
                                        class="font-bold p-4 pl-8 text-slate-800 dark:text-slate-800 text-center">Your
                                        cart is empty</td>
                                </tr>
                            @endforelse
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="6"
                                    class="font-bold p-4 pl-8 text-slate-800 dark:text-slate-800 text-right">
                                    <strong>Total:
                                        Rp{{ number_format($total, 2) }}</strong></td>
                            </tr>
                            <tr>
                                <td colspan="7" class="text-right">
                                    <a href="{{ url('/home') }}"
                                        class="font-bold py-2 px-4 text-slate-800 dark:text-slate-800 hover:underline">
                                        Continue Shopping
                                    </a>
                                    <form action="{{ route('checkout') }}" method="POST" class="inline">
                                        @csrf
                                        <button type="submit"
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                            Checkout
                                        </button>
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
