@extends('admin.adminhome')
@section('content')
    <div class="container grid px-6 mx-auto" style="width:1000px">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-800">
            Data Pengembalian
        </h2>

        <div class="w-full overflow-hidden rounded-lg shadow-xs px-8 py-4">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap ">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">Nama Penyewa</th>
                            <th class="px-4 py-3">Nama Produk</th>
                            <th class="px-4 py-3">Jumlah</th>
                            <th class="px-4 py-3">Durasi (Hari)</th>
                            <th class="px-4 py-3">Total Harga</th>
                            <th class="px-4 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800+">
                        @forelse ($data as $post)
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-5 py-3">
                                    <div class="flex items-center text-sm ">
                                        <p class="font-semibold">{{ $post->name }}</p>

                                    </div>
                                </td>
                                <td class="px-5 py-3">
                                    <div class="flex items-center text-sm">
                                        <p class="font-semibold">{{ $post->product_name }}</p>

                                    </div>
                                </td>
                                <td class="px-5 py-3">
                                    <div class="flex items-center text-sm">
                                        <p class="font-semibold">{{ $post->quantity }}</p>

                                    </div>
                                </td>
                                <td class="px-5 py-3">
                                    <div class="flex items-center text-sm">
                                        <p class="font-semibold">{{ $post->days }}</p>

                                    </div>
                                </td>
                                <td class="px-5 py-3">
                                    <div class="flex items-center text-sm">
                                        <p class="font-semibold">{{ $post->total_price }}</p>

                                    </div>
                                </td>
                                <td
                                    class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
                                    <form action="{{ route('return.order', $post->id) }}" method="POST">
                                        @csrf
                                        <button type="submit"
                                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">Return</button>
                                    </form>
                                </td>

                            </tr>
                        @empty
                            <div class="alert alert-danger">
                                Produk belum Tersedia.
                            </div>
                        @endforelse
                    </tbody>
                </table>
                {{ $data->links() }}
            </div>
        </div>
    </div>
@endsection
