@extends('admin.layouts.home')
@section('content')
    <!-- Konten halaman Data User -->
    <!-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    Ini Dashboard
                </div>
            </div>
        </div>
    </div> -->
    <div class="container-fluid mt-5 pt-3">
        <div class="row">
            <div class="col-md-4 p-6">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="flex items-center">
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                Jumlah Pelanggan Penyewaan
                            </div>
                            <div class="h2 mb-0 font-weight-bold text-gray-800 ml-7">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                            </svg>
                            </div>
                        </div>

                        <div class="mt-4 flex items-center">
                    <div class="h2 mb-0 font-weight-bold text-gray-800 ml-4">
                    {{ $jumlahUser}} <p class="text-sm">&nbsp;user</p>
                    </div>
                            <div class="h1 font-weight-bold text-gray-800 ml-auto">
                            <!-- Tambahkan data jumlah barang tersedia di sini -->
                            <a href="/data-user" class="text-sm text-primary font-bold">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 p-6">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="flex items-center">
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                Jumlah Produk Tersedia
                            </div>
                            <div class="h2 mb-0 font-weight-bold text-gray-800 ml-7">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                            </svg>
                            </div>
                        </div>

                        <div class="mt-4 flex items-center">
                    <div class="h2 flex mb-0 font-weight-bold text-gray-800 ml-4">
                        <!-- #New -->
                        {{ $jumlahProduct}} <p class="text-sm">&nbsp;produk</p>
                    </div>
                            <div class="h1 font-weight-bold text-gray-800 ml-auto">
                            <!-- Tambahkan data jumlah barang tersedia di sini -->
                            <a href="/data-produk" class="text-sm text-primary font-bold">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-6">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="flex items-center">
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                Total Keseluruhan Pendapatan
                            </div>
                            <div class="h2 mb-0 font-weight-bold text-gray-800 ml-7">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                            </svg>
                            </div>
                        </div>

                        <div class="mt-4 flex items-center">
                    <div class="h4 mb-0 font-weight-bold text-gray-800 ml-4">
                        <span class="text-lg">Rp</span>{{$totalPrice}}
                    </div>
                            <div class="h1 font-weight-bold text-gray-800 ml-auto">
                            <!-- Tambahkan data jumlah barang tersedia di sini -->
                            <a href="/data-transaksi" class="text-sm text-primary font-bold">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

@endsection
