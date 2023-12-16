<div class="hidden col-span-1 md:col-span-1 xl:block">
    <h2 class="text-xl font-bold mb-2 md:block md:border-b-2">
        Recent
    </h2>
    @foreach($recentArtikels as $data)
    <div class="mt-4 col-span-1 row-span-2 relative">
        <ul class="grid gap-3">
                  <li class="flex relative">
                    <a href="{{route('detail', $data->slug)}}">
                    <div class="w-24 phone:w-1/3">
                      <img class="w-full" src="{{asset('uploads/' . $data->gambar)}}" alt="" />
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
                </ul>
            </div>
            @endforeach
        </div>
        <!-- <li class="flex relative">
          <div class="w-24 phone:w-1/3">
            <img class="w-full" src="{{asset('Tailwind/src/pic')}}/taotao.jpg" alt="" />
            <a
              href="review.html"
              class="hidden absolute phone:block phone:bottom-1 phone:left-1.5 text-[0.52rem] bg-yellow-500 text-light p-1 sm:text-[0.65rem] md:text-sm lg:text-[0.70rem] lg:py-[0.15rem] xl:py-0"
              >Review</a
            >
          </div>
          <div class="w-2/3 pl-3">
            <p
              class="text-[0.50rem] phone:text-[0.60rem] md:text-[0.75rem]"
            >
              Muhammad Rafi
            </p>
            <h2
              class="text-[0.95rem] font-bold phone:text-lg md:text-[1.30rem] lg:text-sm xl:text-[1.130rem]"
            >
              Kratos Botak Solo Anaconda Sama Bocil Kematian
            </h2>
            <p
              class="hidden sm:block text-gray-400 text-[0.60rem] sm:text-[0.65rem]"
            >
              57 VIEWS
            </p>
          </div>
        </li>

        <li class="flex relative">
          <div class="w-24 phone:w-1/3">
            <img class="w-full" src="{{asset('Tailwind/src/pic')}}/taotao.jpg" alt="" />
            <a
              href="tutorial.html"
              class="hidden absolute phone:block phone:bottom-1 phone:left-1.5 text-[0.52rem] bg-red-500 text-light p-1 sm:text-[0.65rem] md:text-sm lg:text-[0.70rem] lg:py-[0.15rem] xl:py-0"
              >Tutor</a
            >
          </div>
          <div class="w-2/3 pl-3">
            <p
              class="text-[0.50rem] phone:text-[0.60rem] md:text-[0.75rem]"
            >
              Muhammad Rafi
            </p>
            <h2
              class="text-[0.95rem] font-bold phone:text-lg md:text-[1.30rem] lg:text-sm xl:text-[1.130rem]"
            >
              Kratos Botak Solo Anaconda Sama Bocil Kematian
            </h2>
            <p
              class="hidden sm:block text-gray-400 text-[0.60rem] sm:text-[0.65rem]"
            >
              57 VIEWS
            </p>
          </div>
        </li>

        <li class="flex relative">
          <div class="w-24 phone:w-1/3">
            <img class="w-full" src="{{asset('Tailwind/src/pic')}}/taotao.jpg" alt="" />
            <a
              href="berita.html"
              class="hidden absolute phone:block phone:bottom-1 phone:left-1.5 text-[0.52rem] bg-blue-500 text-light p-1 sm:text-[0.65rem] md:text-sm lg:text-[0.70rem] lg:py-[0.15rem] xl:py-0"
              >Berita</a
            >
          </div>
          <div class="w-2/3 pl-3">
            <p
              class="text-[0.50rem] phone:text-[0.60rem] md:text-[0.75rem]"
            >
              Muhammad Rafi
            </p>
            <h2
              class="text-[0.95rem] font-bold phone:text-lg md:text-[1.30rem] lg:text-sm xl:text-[1.130rem]"
            >
              Kratos Botak Solo Anaconda Sama Bocil Kematian
            </h2>
            <p
              class="hidden sm:block text-gray-400 text-[0.60rem] sm:text-[0.65rem]"
            >
              57 VIEWS
            </p>
          </div>
        </li>

        <li class="flex relative">
          <div class="w-24 phone:w-1/3">
            <img class="w-full" src="{{asset('Tailwind/src/pic')}}/taotao.jpg" alt="" />
            <a
              href="review.html"
              class="hidden absolute phone:block phone:bottom-1 phone:left-1.5 text-[0.52rem] bg-yellow-500 text-light p-1 sm:text-[0.65rem] md:text-sm lg:text-[0.70rem] lg:py-[0.15rem] xl:py-0"
              >Review</a
            >
          </div>
          <div class="w-2/3 pl-3">
            <p
              class="text-[0.50rem] phone:text-[0.60rem] md:text-[0.75rem]"
            >
              Muhammad Rafi
            </p>
            <h2
              class="text-[0.95rem] font-bold phone:text-lg md:text-[1.30rem] lg:text-sm xl:text-[1.130rem]"
            >
              Kratos Botak Solo Anaconda Sama Bocil Kematian
            </h2>
            <p
              class="hidden sm:block text-gray-400 text-[0.60rem] sm:text-[0.65rem]"
            >
              57 VIEWS
            </p>
          </div>
        </li> -->