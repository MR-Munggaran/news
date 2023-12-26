<ul id="slider">
        <li class="relative">
            <a href="{{route('detail', $slidepertama->artikel->slug)}}"><img src="{{asset('public/uploads/' . $slidepertama->gambar)}}" alt="Hero Image" class="w-full h-auto"/></a>
            <div class="absolute top-0 left-1.5 p-2 md:top-2 md:left-2">
                <a href="{{ route('kategorishow', $slidepertama->artikel->kategori_id) }}" class="text-[0.60rem] bg-blue-500 text-light p-1 px-2 md:text-sm">{{$slidepertama->artikel->kategori->nama}}</a>
            </div>
            <div class="absolute bottom-1 left-2.5 md:left-4 md:bottom-2 lg:bottom-4">
                <a href="">
                    <p class="text-[0.60rem] text-light md:text-sm lg:text-sm"> By <span class="font-semibold">{{$slidepertama->artikel->user->name}}</span></p>
                    <h1 class="text-xl font-bold text-light sm:text-2xl md:text-4xl lg:text-4xl">
                        {{$slidepertama->judul_slide}}
                    </h1>
                </a>
            </div>
        </li>
        @foreach ($slidekedua as $item)
        <li class="relative hidden">
            <a href="{{route('detail', $item->artikel->slug)}}"><img src="{{asset('public/uploads/' . $item->gambar)}}" alt="Hero Image" class="w-full h-auto"/></a>
            <div class="absolute top-0 left-1.5 p-2 md:top-2 md:left-2">
                <a href="{{ route('kategorishow', $item->artikel->kategori_id) }}" class="text-[0.60rem] bg-blue-500 text-light p-1 px-2 md:text-sm">{{$item->artikel->kategori->nama}}</a>
            </div>
            <div class="absolute bottom-1 left-2.5 md:left-4 md:bottom-2 lg:bottom-4">
                <a href="">
                    <p class="text-[0.60rem] text-light md:text-sm lg:text-sm"> By <span class="font-semibold">{{$item->artikel->user->name}}</span></p>
                    <h1 class="text-xl font-bold text-light sm:text-2xl md:text-4xl lg:text-4xl">
                        {{$item->judul_slide}}
                    </h1>
                </a>
            </div>
        </li>
        @endforeach

</ul>

             <!-- <li class="relative hidden">
               <a href="isi.html"
                 ><img
                   src="{{asset('Tailwind/src/pic/cp.jpg')}}"
                   alt="Hero Image"
                   class="w-full h-auto"
                 />
               </a>
               <div class="absolute top-0 left-1.5 p-2 md:top-2 md:left-2">
                 <a
                   href="tutorial.html"
                   class="text-[0.60rem] bg-red-500 text-light p-1 px-2 md:text-sm"
                   >Tutorial</a
                 >
               </div>
               <div
                 class="absolute bottom-1 left-2.5 md:left-4 md:bottom-2 lg:bottom-4"
               >
                 <a href="">
                   <p
                     class="text-[0.60rem] text-light md:text-sm lg:text-sm"
                   >
                     By <span class="font-semibold">Muhammad Rafi</span> 17
                     Hour Ago
                   </p>
                   <h1
                     class="text-xl font-bold text-light sm:text-2xl md:text-4xl lg:text-4xl"
                   >
                     Kratos Botak Solo Anaconda Sama Bocil Kematian
                   </h1>
                 </a>
               </div>
             </li> -->