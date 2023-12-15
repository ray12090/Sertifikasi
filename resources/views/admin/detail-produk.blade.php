@extends('admin.layouts.home')
@section('content')
<div class="container grid px-6 mx-auto">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Detail Product
    </h2>
    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div style="width: 900px;" class="flex px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">

            <div class="w-1/3">
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400 font-bold">Image Product</span>
                    @if($data->image)
                    <img src="{{ asset('/products/'.$data->image) }}" class="rounded" style="width: 300px">
                    @else
                    <img src="{{ asset('/products/dummy.jpg') }}" class="rounded" style="width: 300px">
                    @endif
                </label>
            </div>

            <div class="w-2/3">
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400 font-bold">Product Name</span>
                    <input type="text" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:text-gray-300 dark:focus:shadow-outline-gray" name="product_name" disabled value="{{ $data->product_name }}">
                </label>

                <label class="block text-sm mt-4">
                    <span class="text-gray-700 dark:text-gray-400 font-bold">Description</span>
                    <textarea cols="30" rows="5" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray" name="product_description">{{ $data->product_description }}</textarea>
                </label>

                <label class="block text-sm mt-4">
                    <span class="text-gray-700 dark:text-gray-400 font-bold">Price</span>
                    <input type="number" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray" name="price" disabled value="{{ $data->price }}">
                </label>

                <label class="block text-sm mt-4">
                    <span class="text-gray-700 dark:text-gray-400 font-bold">Category 1</span>
                    <input type="text" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray" name="category1" disabled value="{{ $data->category1 }}">
                </label>

                <label class="block text-sm mt-4">
                    <span class="text-gray-700 dark:text-gray-400 font-bold">Category 2</span>
                    <input type="text" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray" name="category2" disabled value="{{ $data->category2 }}">
                </label>
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
@endsection