@extends('layouts.app')

@section('content')
<section class=" col-span-4 ml-4">
            <div class="bg-gray-900 py-16 px-4 mx-auto h-max  ">
                <div class="text-white">
                    <a href="{{route('kategori.index')}}">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                            </svg>                                     
                        </span>
                    </a>                    
                </div>
                
                <form action="{{route('kategori.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="grid-cols-2 gap-6 py-10">
                        <div class="sm:col-span-2 mb-2">
                            <label for="Judul" class="block mb-2 text-sm font-medium text-white dark:text-white">Kategori</label>
                            <input type="text" name="nama" id="judul" class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukkan Kategori" required="">
                        </div>
  
                    </div>
                    <button type="submit" class="bg-green-600 inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                        Submit
                    </button>
                    <button type="reset" class="bg-yellow-600 inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                        Reset
                    </button>
                </form>
            </div>
          </section>
@endsection