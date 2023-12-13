@extends('admin.adminhome')
@section('content')
<div class="container grid px-6 mx-auto" style="width:1000px">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              Data Produk
            </h2>                            
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
              <div class="w-full overflow-x-auto">
              <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
              <form action="{{ route('data-produk.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
<label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Nama Produk</span>
                <input type="text" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input @error('product_name') is-invalid @enderror" name="product_name" value="{{old('product_name', $data->product_name) }}" placeholder="Masukkan Nama Produk">
                            
                            <!-- error message untuk nama produk -->
                            @error('product_name')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
              </label>

              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Deskripsi Produk</span>
                <input type="text" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input @error('product_description') is-invalid @enderror" name="product_description" value="{{ old('product_description', $data->product_description) }}" placeholder="Masukkan Deskripsi Produk">
                            
                            <!-- error message untuk nama produk -->
                            @error('product_description')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
              </label>

                <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Photo</span>
                <input type="file" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input @error('photo') is-invalid @enderror" name="photo" value="{{ old('photo', $data->photo) }}">
                            
                            <!-- error message untuk nama produk -->
                            @error('photo')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                </label>
              
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Price</span>
                <input type="text" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input @error('price') is-invalid @enderror" name="price" value="{{ old('price', $data->price) }}" placeholder="Masukkan Harga Produk">
                            
                            <!-- error message untuk nama produk -->
                            @error('price')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
              </label>

              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Kategori Produk 1</span>
                <input type="text" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input @error('category1') is-invalid @enderror" name="category1" value="{{ old('category1', $data->category1) }}" placeholder="Masukkan Kategori Produk 1">
                            
                            <!-- error message untuk nama produk -->
                            @error('category1')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
              </label>

              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Kategori Produk 2</span>
                <input type="text" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input @error('category2') is-invalid @enderror" name="category2" value="{{ old('category2', $data->category2) }}" placeholder="Masukkan Kategori Produk 2">
                            
                            <!-- error message untuk nama produk -->
                            @error('category2')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
              </label>              
        
             <div class="mt-8">
             <button type="submit" class="w-36 px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">Submit</button>
              <button type="reset" class="w-36 px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-red">RESET</button>
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
