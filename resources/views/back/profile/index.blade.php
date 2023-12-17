@extends('layouts.app')
@section('content')
            <div class="">
            
            </div>
            <div class="h-gede w-full bg-gray-900 col-span-2 grid grid-rows-4 mt-5">
            <div>
            @if(auth()->check())
            <!-- Tampilkan nama pengguna -->
                <div class="relative">
                    <img class="h-40 w-40 border rounded-full mx-auto mt-10" src="{{asset('admin.png')}}" alt="">
                    <button class="right-56 bottom-0.5 text-white absolute">
                        
                    </button>
                </div>
                <div class="">
                    <label for="Email" class="mx-auto bg-white w-80 h-10 mt-10 pt-1 pl-2 rounded-md block "><span class="items-center align-middle ml-4 ">
                        Email
                    </span>
                    <span class="ml-4 pl-2  align-middle">{{ auth()->user()->email }}</span>

                </label>
                </div>
                <div class="">
                <label for="Password" class="mx-auto bg-white w-80 h-10 mt-5 pt-1 pl-2 rounded-md block "><span class="items-center align-middle ml-4">
                        Nama
                </span>
                <span class="ml-2 align-middle">{{ auth()->user()->name }}</span>
                </label>
                </div>
                <div class="">
                    <!-- <a href="Akunedit.html">
                        <button class="block bg-blue-600 w-14 mt-5 text-white hover:text-gray-300 hover:bg-blue-700 mx-auto">edit</button>
                    </a> -->
                    
                </div>
                
                <div>
                    <button>
                        
                    </button>
                </div>
                @endif
            </div>
        </div>
@endsection