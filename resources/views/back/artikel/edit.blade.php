@extends('layouts.app')

@section('content')
<section class=" col-span-4 ml-4">
            <div class="bg-gray-900 py-8 px-4 mx-auto h-max lg:py-16 ">
                <div class="text-white">
                    <a href="{{route('artikel.index')}}">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                            </svg>                                     
                        </span>
                    </a>                    
                </div>
                
                <form action="{{route('artikel.update', $artikel->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="grid-cols-2 gap-6 py-10">
                        <div class="sm:col-span-2 mb-2">
                            <label for="Judul" class="block mb-2 text-sm font-medium text-white dark:text-white">Judul</label>
                            <input type="text" name="judul" value="{{$artikel->judul}}" id="judul" class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukkan judul" required="">
                        </div>
                        <div class="w-full">
                            <label for="Kategori" class="block mb-2 text-sm font-medium text-white dark:text-white">Kategori</label>
                            <select id="Kategori" class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" name="kategori_id">
                                @foreach($kategori as $row)
                                @if($row->id == $artikel->kategori_id)
                                <option value="{{$row->id}}" selected="selected">{{$row->nama}}</option>
                                @else
                                <option value="{{$row->id}}">{{$row->nama}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>                  
                        <div class="sm:col-span-2 mb-2">
                            <label for="content" class="block mb-2 text-sm font-medium text-white dark:text-white">Content</label>
                            <textarea id="editor" rows="8" class="block p-2.5 w-full text-sm text-black bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukkan content anda" name="content" >{{$artikel->content}}</textarea>
                        </div>
                        <div class="w-full">
                            <label for="Kategori" class="block mb-2 text-sm font-medium text-white dark:text-white">Status</label>
                            <select id="" name="is_active" class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" >
                            <option value="0" {{ $artikel->is_active == '0' ? 'selected' : '' }}>Draft</option>
                            <option value="1" {{ $artikel->is_active == '1' ? 'selected' : '' }}>Publish</option>

                            </select>
                        </div>
                        <div class="w-full mt-2">    
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
                            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file" name="gambar">
                            <p class="mt-1 mb-2 text-sm text-gray-200 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF</p>
                            <br>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="">Gambar Saat ini</label>
                            <br>
                            <img src="{{asset('uploads/' . $artikel->gambar)}}" alt="" width="100">
                            
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