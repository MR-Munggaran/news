@extends('layouts.app')

@section('content')
<div class="ml-2 pt-4 relative overflow-hidden shadow-md bg-gray-900 p-2 col-span-4">
          <div>
            <table class="w-full text-sm text-left rtl:text-right text-gray-200  border-black">
                <thead class="text-xs  uppercase   border-black">
                  <tr class="">
                      <th scope="col" class="border text-center px-2 py-3">
                          ID
                      </th>
                      <th scope="col" class="border px-6 py-3 text-center">
                          Judul
                      </th>
                      <th scope="col" class="border px-6 py-3 text-center">
                          Slug
                      </th>
                      <th scope="col" class="border px-6 py-3 text-center">
                          Kategori
                      </th>
                      <th scope="col" class="border px-6 py-3 text-center">
                          Penulis
                      </th>
                      <th scope="col" class="border px-6 py-3 text-center">
                          Action
                      </th>
                      
                    </tr>
                 </thead>
             <tbody>
                @forelse($artikel as $row)
                <tr class=" ">
                   <td class=" text-center px-2 py-3 border text-white">{{$row->id}}</td>
                   <td scope="row" class="border text-center px-6 py-4 whitespace-nowrap text-white">{{$row->judul}}</td>                                     
                   <td class="px-6 py-4 border text-center text-white">{{$row->slug}}</td>
                   <td class="px-6 py-4 border text-center text-white">{{$row->kategori->nama}}</td>
                   <td class="px-6 py-4 border text-center text-white">{{$row->user->name}}</td>
                   <td class=" px-2 py-4 text-center border">
                       <div class="flex items-center justify-center">
                           <a href="{{route('artikel.edit', $row->id)}}" class="font-medium text-white-600 dark:text-white-500 hover:text-white hover:underline"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                               <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                              </svg>
                             </a>
                             <form action="{{route('artikel.destroy', $row->id)}}" method="post" class="text-center font-medium text-red-600 hover:text-red-900 hover:underline lg:pl-4">
                                @csrf
                                @method('delete')
                                <button>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                               <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                              </svg>
                                </button>   
                             </form>
                       </div>
                     </td>
                     @empty
                     <tr>
                        <td>Data Tidak Ada</td>
                     </tr>
                     @endforelse
               </tr>
             </tbody> 

            </table>
             <div class="absolute bottom-1 right-2"> 
                <button >
                 <a href="{{route('artikel.create')}}">
                    <svg class=" w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.546.5a9.5 9.5 0 1 0 9.5 9.5 9.51 9.51 0 0 0-9.5-9.5ZM13.788 11h-3.242v3.242a1 1 0 1 1-2 0V11H5.304a1 1 0 0 1 0-2h3.242V5.758a1 1 0 0 1 2 0V9h3.242a1 1 0 1 1 0 2Z"/>
                      </svg>
                  </a>
                 </button>
              </div>
        
              {{ $artikel->links() }}
      
         <!-- <nav class="flex items-center flex-column flex-wrap md:flex-row justify-center pt-2" aria-label="Table navigation">
            <ul class="inline-flex -space-x-px rtl:space-x-reverse text-sm h-8 justify-center">
                <li>
                    <a href="#"  class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-gray-900 border border-gray-300 rounded-s-lg hover:bg-gray-700 hover:text-redish  dark:border-gray-700 dark:text-gray-400  ">Previous</a>
                </li>
                <li>
                    <a href="#" aria-current="page" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-gray-900 border border-gray-300 hover:bg-gray-700 hover:text-redish  dark:border-gray-700 dark:text-gray-400  ">1</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-gray-900 border border-gray-300 hover:bg-gray-700 hover:text-redish  dark:border-gray-700 dark:text-gray-400  ">2</a>
                </li>
                <li>
                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-gray-900 border border-gray-300 hover:bg-gray-700 hover:text-redish  dark:border-gray-700 dark:text-gray-400  ">3</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-gray-900 border border-gray-300 hover:bg-gray-700 hover:text-redish  dark:border-gray-700 dark:text-gray-400  ">4</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-gray-900 border border-gray-300 hover:bg-gray-700 hover:text-redish  dark:border-gray-700 dark:text-gray-400  ">5</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-gray-900 border border-gray-300 rounded-e-lg hover:bg-gray-700 hover:text-redish  dark:border-gray-700 dark:text-gray-400  ">Next</a>
                </li>
            </ul>          
         </nav>     -->
       </div>
@endsection