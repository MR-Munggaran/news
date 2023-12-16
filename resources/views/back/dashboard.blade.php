@extends('layouts.app')
@section('content')
                <!-- Begin Page Content -->
                <div class=" col-span-4  ">
     <div class=" grid grid-cols-4 justify-center mb-2 mt-2  text-center ">
      
         <div class=" block  max-h-xs p-6 bg-gray-800 border border-gray-700 rounded-lg shadow hover:bg-gray-500  ">
            <h5 class="mb-2 text-2xl font-semibold text-gray-900 dark:text-white">Artikel</h5>
            <h4 class="text-2xl text-gray-400 hover:text-redish">{{$artikelCount}}</h4>   
         </div>
         <div class=" block  max-h-xs p-6 bg-gray-800 border border-gray-700 rounded-lg shadow hover:bg-gray-500  ">
            <h5 class="mb-2 text-2xl font-semibold text-gray-900 dark:text-white">Kategori</h5>
            <h4 class="text-2xl text-gray-400 hover:text-redish">{{$kategoriCount}}</h4>   
         </div>         
         <div class=" block  max-h-xs p-6 bg-gray-800 border border-gray-700 rounded-lg shadow hover:bg-gray-500  ">
            <h5 class="mb-2 text-2xl font-semibold text-gray-900 dark:text-white">Video</h5>
            <h4 class="text-2xl text-gray-400 hover:text-redish">{{$materiCount}}</h4>   
         </div>
         <div class=" block  max-h-xs p-6 bg-gray-800 border border-gray-700 rounded-lg shadow hover:bg-gray-500  ">
            <h5 class="mb-2 text-2xl font-semibold text-gray-900 dark:text-white">Visitor</h5>
            <h4 class="text-2xl text-gray-400 hover:text-redish">{{$visitorCount}}</h4>   
         </div>   
     </div>
     
     <div class="ml-3">
      <div class="left-0  w-full bg-gray-800 h-20 border-2 rounded-sm cursor-pointer hover:bg-gray-600 text-gray-400 hover:text-white border-gray-700 ">
      <h5 class="py-6 ml-4 font-semibold">Artikel Terpopuler</h5>
      </div>
      
      <div class="left-0  w-full bg-gray-800 h-full fixed ">
      
      </div>
     </div>
     </div>
       
       </div>
                <!-- /.container-fluid -->
@endsection