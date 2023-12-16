@extends('admin.layouts.home')
@section('content')
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Detail Transaksi
        </h2>
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="" style="width:900px">
                <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                    <label class="block text-sm">
                        
                        <span class="text-gray-700 dark:text-gray-400 font-bold">Borrower's Name</span>
                        <input type="text"
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:text-gray-300 dark:focus:shadow-outline-gray"
                            name="user_id" disabled value="{{ $data->user_name }}">
                    </label>

                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400 font-bold">Duration Rent</span>
                        <div class="flex">
                            <input type="text"
                                class="block w-1/3 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:text-gray-300 dark:focus:shadow-outline-gray"
                                name="user_id" disabled value="{{ $data->borrow_date }}">
                            <div class="w-1/3">
                                <p class="text-center mt-3">to</p>
                            </div>
                            <input type="text"
                                class="block w-1/3 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:text-gray-300 dark:focus:shadow-outline-gray"
                                name="user_id" disabled value="{{ $data->return_date }}">
                        </div>
                    </label>

                    <div class="flex">
                        <div class="w-1/3">
                            <label class="block text-sm">
                                <span class="text-gray-700 dark:text-gray-400 font-bold">Rent Product</span>
                                @if ($data->image)
                                    <img src="{{ asset('/products/' . $data->image) }}" class="rounded" style="width: 300px">
                                @else
                                    <img src="{{ asset('/products/dummy.jpg') }}" class="rounded" style="width: 300px">
                                @endif
                            </label>
                        </div>
                        <div class="w-2/3">
                            <label class="block text-sm mt-4">
                                <span class="text-gray-700 dark:text-gray-400 font-bold">Product Name</span>
                                <input type="text"
                                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray"
                                    name="product_name" disabled value="{{ $data->product_name }}">
                            </label>
                            <label class="block text-sm mt-4">
                                <span class="text-gray-700 dark:text-gray-400 font-bold">Quantity</span>
                                <input type="text"
                                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray"
                                    name="quantity" disabled value="{{ $data->quantity }}">
                            </label>
                            <label class="block text-sm mt-4">
                                <span class="text-gray-700 dark:text-gray-400 font-bold">Price</span>
                                <input type="number"
                                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray"
                                    name="total_price" disabled value="{{ $data->price }}">
                            </label>
                        </div>
                    </div>
                    <label class="block text-sm mt-4">
                        <span class="text-gray-700 dark:text-gray-400 font-bold">Penalty</span>
                        <input type="number"
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple text-red-400 dark:focus:shadow-outline-gray"
                            name="total_price" disabled value="{{ $data->penalty }}">
                    </label>
                    <label class="block text-sm mt-4">
                        <span class="text-gray-700 dark:text-gray-400 font-bold">Total Price</span>
                        <input type="number"
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray"
                            name="total_price" disabled value="{{ $data->total_price }}">
                    </label>
                    <div class="mt-8">
                        <a href="/data-transaksi">Kembali</a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('content');
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

    <script>
        function printPDF() {
            const divToPrint = document.getElementsByClassName('bg-white')[0];

            setTimeout(() => {
                html2canvas(divToPrint, {
                    scale: 2
                }).then(canvas => {
                    const imgData = canvas.toDataURL('image/png');
                    const pdf = new jspdf.jsPDF('p', 'mm', 'a4');
                    pdf.addImage(imgData, 'PNG', 0, 0);
                    pdf.save("transaction-history.pdf");
                });
            }, 1000); // delay of 1000 milliseconds
        }
    </script>
@endsection
