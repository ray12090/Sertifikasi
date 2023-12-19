<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Your Orders') }}
        </h2>
    </x-slot>

    <!-- Flash messages -->
    <div id="deleteConfirmationModal"
        class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center" role="dialog">
        <div class="modal-dialog bg-white rounded shadow-lg w-1/2" role="document">
            <div class="modal-content">
                <div class="modal-header flex justify-between p-4 border-b border-gray-200">
                    <h5 class="modal-title font-bold text-lg">Cancel Order</h5>
                    <button type="button" class="close text-gray-700" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-4">
                    <p>Are you sure you want to cancel order?</p>
                </div>
                <div class="modal-footer flex justify-end p-4 border-t border-gray-200">
                    <form id="deleteOrderForm" method="POST" action="">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="order_id" id="modal_order_id" value="">
                        <button type="submit"
                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mr-2">
                            Cancel Order
                        </button>
                    </form>
                    <button type="button" id="closeModalButton"
                        class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded"
                        data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto p-4">
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Success!</strong>
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        @if (session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold"></strong>
                <span class="block sm:inline">{{ session('error') }}</span>
            </div>
        @endif
    </div>


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
                                    <th
                                        class="border-b dark:border-slate-600 font-bold p-4 pl-8 pt-0 pb-3 text-slate-800 dark:text-slate-800 text-center">
                                        Actions</th>
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
                                                <button class="text-black bg-yellow-300 font-bold py-2 px-4 rounded">
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
                                        <td
                                            class="border-b dark:border-slate-600 font-bold p-4 pl-8 text-slate-800 dark:text-slate-600 text-center">
                                            <button data-modal-toggle="deleteModal" {{-- onclick="return confirm('Are you sure?')" --}}
                                                data-order-id="{{ $order->id }}"
                                                class="delete-order-btn bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                                Cancel
                                            </button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="9"
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
    <script>
        document.querySelectorAll('.delete-order-btn').forEach(button => {
            button.addEventListener('click', function() {
                const orderId = this.getAttribute('data-order-id');
                const deleteForm = document.getElementById('deleteOrderForm');

                // Set the form action
                deleteForm.action = `/orders/delete/${orderId}`;

                // Show the modal
                document.getElementById('deleteConfirmationModal').classList.remove('hidden');
            });
        });

        // Optional: Add a click event to close button inside modal
        document.querySelector('#deleteConfirmationModal .close').addEventListener('click', function() {
            document.getElementById('deleteConfirmationModal').classList.add('hidden');
        });

        document.getElementById('closeModalButton').addEventListener('click', function() {
        document.getElementById('deleteConfirmationModal').classList.add('hidden');
    });
    </script>


</x-app-layout>
