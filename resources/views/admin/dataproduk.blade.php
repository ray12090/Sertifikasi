@extends('admin.layouts.home')
@section('content')
<div id="removeProductModal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full">
    <!-- Modal content -->
    <div class="container mx-auto p-4 max-w-2xl mt-24">
        <div class="bg-white rounded shadow">
            <div class="border-b p-4">
                <h5 class="font-bold uppercase text-gray-600">Remove Product</h5>
            </div>
            <div class="p-4">
                <p>Are you sure you want to remove this product?</p>
            </div>
            <div class="flex justify-end p-4 border-t">
                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded m-2"
                    onclick="document.getElementById('removeProductForm').submit();">Yes, Remove</button>
                <button class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded m-2"
                    onclick="document.getElementById('removeProductModal').classList.add('hidden');">Cancel</button>
            </div>
        </div>
    </div>
</div>

    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-800">
            Data Product
        </h2>
        <a class="ml-auto w-44 px-4 py-2 no-underline text-sm text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple hover:no-underline"
            href="{{ route('data-product.create') }}">
            Create Product
            <span class="float-right">+</span>
        </a>
        <div class="rounded-lg shadow-xs mt-3">
            <table class="" style="width: 900px;">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">ID</th>
                            <th class="px-4 py-3">Image Product</th>
                            <th class="px-4 py-3">Product Name</th>
                            <th class="px-4 py-3">Price</th>
                            <th class="px-4 py-3">Stock</th>
                            <th class="px-4 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @forelse ($data as $post)
                            <tr class="text-gray-700 dark:text-gray-800">
                                <td class="px-4 py-3">
                                    <div class="flex items-center text-sm">
                                        <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                            <p class="font-semibold">{{ $post->id }}</p>
                                            <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true">
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    @if($post->photo)
                                    <img src="{{ asset('products/' . $post->photo) }}" class="rounded" style="width: 100px">
                                    @else
                                    <img src="{{ asset('/products/dummy.jpg') }}" class="rounded" style="width: 100px">
                                    @endif
                                </td>
                                <td>
                                    <div>
                                        <p class="font-semibold">{{ $post->product_name }}</p>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    Rp{{ $post->price }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $post->stock }}
                                </td>
                                <td class="px-4 py-3">
                                    <div class="flex items-center space-x-4 text-sm">
                                        <a href="{{ route('data-product.show', $post->id) }}"
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
                                        <a href="{{ route('data-product.edit', $post->id) }}"
                                            class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-yellow-500 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                            aria-label="Edit">
                                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                </path>
                                            </svg>
                                        </a>
                                        <form id="removeProductForm" action="{{ route('data-product.destroy', $post->id) }}" method="post" class="mt-3">
                                            @csrf
                                            @method('DELETE')
                                            <button
                                                class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-red-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                                aria-label="Delete"
                                                onclick="event.preventDefault(); showRemoveModal('{{ route('data-product.destroy', $post->id) }}')">>
                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                                  <div class="alert alert-danger">
                                      Data Post belum Tersedia.
                                  </div>
                            @endforelse
                    </tbody>
                </table>
                <br>
                {{ $data->links() }}
        </div>
        <script>
            //message with toastr
            @if(session()->has('success'))

                toastr.success('{{ session('success') }}', 'BERHASIL!');

            @elseif(session()->has('error'))

                toastr.error('{{ session('error') }}', 'GAGAL!');

            @endif

            function showRemoveModal(actionUrl) {
                document.getElementById('removeProductForm').action = actionUrl;
                document.getElementById('removeProductModal').classList.remove('hidden');
            }
        </script>
@endsection
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</div>
