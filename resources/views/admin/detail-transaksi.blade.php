@extends('admin.adminhome')
@section('content')
<div class="container grid px-6 mx-auto" style="width:1000px">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              Detail Transaksi
            </h2>                            
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
              <div class="w-full overflow-x-auto">
              <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400 font-bold">Id Penyewa</span>
                <input type="text" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:text-gray-300 dark:focus:shadow-outline-gray" name="user_id" disabled value="{{ $data->user_id }}">
              </label>

              <label class="block text-sm mt-4">
                <span class="text-gray-700 dark:text-gray-400 font-bold">Nama Penyewa</span>
                <input type="text" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray" name="name" disabled value="{{ $data->name}}">
              </label>

              <label class="block text-sm mt-4">
                <span class="text-gray-700 dark:text-gray-400 font-bold">Nama Produk</span>
                <input type="text" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray" name="product_name" disabled value="{{ $data->product_name }}">
              </label>

              <label class="block text-sm mt-4">
                <span class="text-gray-700 dark:text-gray-400 font-bold">Jumlah</span>
                <input type="text" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray" name="quantity" disabled value="{{ $data->quantity }}">
              </label>

              <label class="block text-sm mt-4">
                <span class="text-gray-700 dark:text-gray-400 font-bold">Durasi</span>
                <input type="text" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray" name="days" disabled value="{{ $data->days}}">
              </label>

              <label class="block text-sm mt-4">
                <span class="text-gray-700 dark:text-gray-400 font-bold">Total Harga</span>
                <input type="number" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray" name="total_price" disabled value="{{ $data->total_price }}">
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
    CKEDITOR.replace( 'content' );
</script>
@endsection
