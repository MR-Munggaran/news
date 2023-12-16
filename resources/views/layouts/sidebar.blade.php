<aside id="logo-sidebar" class="  top-0 left-0 z-40 w-80 fixed h-screen " aria-label="Sidebar">    
       <div class=" bg-fixed h-full px-3 py-4 overflow-y-auto bg-grayish ">
          <a href="{{route('dashboard')}}" class="flex items-center ps-2.5 mb-5">
             <img src="{{asset('component/Logo.png')}}" class="h-6 me-1 pl-9" alt="" />
             <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white"></span>
          </a>
          <div class="flex space-x-0 pl-5">
          <a href="{{route('profile')}}" class="flex items-center">
             <img class="w-10 h-10 rounded-full border mr-3" src="{{asset('admin.png')}}" alt="">
             <span class="ml-2 text-white">
            @if(auth()->check())
            <!-- Tampilkan nama pengguna -->
            {{ auth()->user()->name }}
            @endif
             </span>
          </a>
      </div>
 
 
 
 
     <ul class="px-4 text-white  font-medium mt-10">
       
          <li>
              <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"     aria-controls="id1" data-collapse-toggle="id1">
                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">News</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                       <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
              </button>
              <ul id="id1" class="hidden py-2">
                    <li>
                       <a href="{{route('kategori.index')}}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Kategori</a>
                    </li>
                    <li>
                       <a href="{{route('artikel.index')}}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Artikel</a>
                    </li>
                    
              </ul> 
              <li>
                  <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"     aria-controls="id2" data-collapse-toggle="id2">
                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Videos</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                  </button>
                  <ul id="id2" class="hidden py-2">
                        <li>
                           <a href="{{route('materi.index')}}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Materi</a>
                        </li>
                        
                  </ul> 
                  <ul>
                      <li>
                        <a href="{{route('slide.index')}}" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"><span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Slide Banner</span></a>
                      </li>
                  </ul> 
                  <ul class="mt-10">
                      <li>
                        <a href="{{route('logout')}}" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"><span class="pl-4 flex-1 ms- text-left rtl:text-right whitespace-nowrap">Log Out</span></a>
                      </li>
                  </ul> 
     </ul>
       </div>
    </aside>