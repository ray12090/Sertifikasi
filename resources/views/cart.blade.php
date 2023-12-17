<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cart Page') }}
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
                <strong class="font-bold">Removed!</strong>
                <span class="block sm:inline">{{ session('error') }}</span>
            </div>
        @endif
    </div>

    <div id="removeItemModal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full">
        <!-- Modal content -->
        <div class="container mx-auto p-4 max-w-2xl mt-24">
            <div class="bg-white rounded shadow">
                <div class="border-b p-4">
                    <h5 class="font-bold uppercase text-gray-600">Remove Item</h5>
                </div>
                <div class="p-4">
                    <p>Are you sure you want to remove this item from the cart?</p>
                </div>
                <div class="flex justify-end p-4 border-t">
                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded m-2"
                        onclick="document.getElementById('removeItemForm').submit();">Yes, Remove</button>
                    <button class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded m-2"
                        onclick="document.getElementById('removeItemModal').classList.add('hidden');">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <form id="removeItemForm" method="POST" style="display:none;">
        @csrf
        @method('delete')
    </form>

    <div id="checkoutModal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full">
        <!-- Modal content -->
        <div class="container mx-auto p-4 max-w-2xl mt-24">
            <div class="bg-white rounded shadow">
                <div class="border-b p-4">
                    <h5 class="font-bold uppercase text-gray-600">Confirm Checkout</h5>
                </div>
                <div class="p-4">
                    <p>Are you sure you want to proceed with checkout?</p>
                </div>
                <div class="flex justify-end p-4 border-t">
                    <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded m-2" onclick="confirmCheckout()">Yes, Proceed</button>
                    <button class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded m-2" onclick="document.getElementById('checkoutModal').classList.add('hidden');">Cancel</button>
                </div>
            </div>
        </div>
    </div>



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
                                            @method('post')
                                            <input type="number" name="quantity" value="{{ $details['quantity'] }}"
                                                class="p-1 pl-2 w-10" min="1" max="2"
                                                data-id="{{ $id }}" />
                                    </td>
                                    <td
                                        class="border-b dark:border-slate-600 font-bold p-4 pl-8 text-slate-800 dark:text-slate-600 text-center">
                                        <label for="borrow_date">Borrow Date:</label>
                                        <input type="date" name="borrow_date"
                                            value="{{ $details['borrow_date'] ?? today()->toDateString() }}"
                                            min="{{ today()->toDateString() }}"
                                            class="p-1 pl-2 w-50" data-id="{{ $id }}" /><br>
                                        <label for="return_date">Return Date:</label>
                                        <input type="date" name="return_date"
                                            value="{{ $details['return_date'] ??(isset($details['borrow_date'])? \Carbon\Carbon::parse($details['borrow_date'])->addDays(1)->toDateString(): today()->addDays(1)->toDateString()) }}"
                                            min="{{ isset($details['borrow_date'])? \Carbon\Carbon::parse($details['borrow_date'])->addDays(1)->toDateString(): today()->addDays(1)->toDateString() }}"
                                            max="{{ isset($details['borrow_date'])? \Carbon\Carbon::parse($details['borrow_date'])->addDays(5)->toDateString(): today()->addDays(5)->toDateString() }}"
                                            class="p-1 pl-2 w-50" data-id="{{ $id }}" />
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
                                            <button type="button"
                                                onclick="showRemoveModal('{{ route('delete.cart.item', $id) }}')"
                                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full w-full">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7"
                                        class="font-bold p-4 pl-8 text-slate-800 dark:text-slate-800 text-center">
                                        Your
                                        cart is empty</td>
                                </tr>
                            @endforelse
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="6"
                                    class="font-bold p-4 pl-8 text-slate-800 dark:text-slate-800 text-right">
                                    <strong>Total:
                                        Rp{{ number_format($total, 2) }}</strong>
                                </td>
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
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full"
                                            {{ session('cart', []) == [] ? 'disabled' : '' }}>
                                            Checkout
                                        </button>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('#cart .auto-submit').forEach(input => {
            input.addEventListener('change', () => {
                input.closest('form').submit();
            });
        });

        function showRemoveModal(actionUrl) {
            document.getElementById('removeItemForm').action = actionUrl;
            document.getElementById('removeItemModal').classList.remove('hidden');
        }

        // document.querySelectorAll('.quantity-input, .date-input').forEach(input => {
        //     input.addEventListener('change', function() {
        //         const id = this.dataset.id;
        //         const quantityInput = document.querySelector(`.quantity-input[data-id="${id}"]`);
        //         const pricePerDay = parseFloat(quantityInput.dataset.pricePerDay);
        //         const borrowDateInput = document.querySelector(
        //         `input[name="borrow_date"][data-id="${id}"]`);
        //         const returnDateInput = document.querySelector(
        //         `input[name="return_date"][data-id="${id}"]`);

        //         const quantity = parseInt(quantityInput.value);
        //         const borrowDate = new Date(borrowDateInput.value);
        //         const returnDate = new Date(returnDateInput.value);
        //         const days = (returnDate - borrowDate) / (1000 * 3600 * 24) + 1;

        //         if (days >= 0) {
        //             const totalPrice = pricePerDay * quantity * days;
        //             document.getElementById(`total-${id}`).textContent = `Rp${totalPrice.toFixed(2)}`;

        //             updateOverallTotal();
        //         }
        //     });
        // });

        // function updateOverallTotal() {
        //     let overallTotal = 0;
        //     document.querySelectorAll('.quantity-input').forEach(input => {
        //         const id = input.dataset.id;
        //         const totalElement = document.getElementById(`total-${id}`);
        //         const total = parseFloat(totalElement.textContent.replace('Rp', '').replace(',', ''));
        //         overallTotal += total;
        //     });
        //     document.getElementById('overall-total').textContent = `Rp${overallTotal.toFixed(2)}`;
        // }

        // function showRemoveModal(actionUrl) {
        //     document.getElementById('removeItemForm').action = actionUrl;
        //     document.getElementById('removeItemModal').classList.remove('hidden');
        // }
    </script>

</x-app-layout>
