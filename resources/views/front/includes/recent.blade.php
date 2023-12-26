<div class="hidden col-span-1 xl:block">
    <h2 class="text-xl font-bold mb-2 md:block md:border-b-2">
        Recent
    </h2>
    <div class="mt-4 col-span-1 row-span-2 relative">
      <ul class="grid gap-3">
          @foreach($recentArtikels as $data)
                  <li class="flex relative">
                    <a href="{{route('detail', $data->slug)}}">
                    <div class="w-24 phone:w-1/3">
                      <img class="w-full" src="{{asset('public/uploads/' . $data->gambar)}}" alt="" /></a>
                      <a
                        href="{{ route('kategorishow', $data->kategori_id) }}"
                        class="hidden absolute phone:block phone:bottom-1 phone:left-1.5 text-[0.52rem] bg-blue-500 text-light p-1 sm:text-[0.65rem] md:text-sm lg:text-[0.70rem] lg:py-[0.15rem] xl:py-0">{{$data->kategori->nama}}</a
                      >
                    </div>
                    <div class="w-2/3 pl-3">
                      <p class="text-[0.50rem] phone:text-[0.60rem] md:text-[0.75rem]">{{$data->user->name}}</p>
                      <h2 class="text-[0.95rem] font-bold phone:text-lg md:text-[1.30rem] lg:text-sm xl:text-[1.130rem]">{{$data->judul}}</h2>
                      <p class="hidden sm:block text-gray-400 text-[0.60rem] sm:text-[0.65rem]"> {{$data->views}} VIEWS </p>
                    </div>
                    </a>
                  </li>
                  @endforeach
                </ul>
            </div>
        </div>