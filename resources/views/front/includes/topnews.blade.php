<div class="md:max-xl:col-span-3 xl:col-span-2">
              <h2 class="text-xl font-bold mb-4 border-b-2 md:w-full">
                Top News
              </h2>
              <div class="grid lg:grid-cols-2 gap-3">
                <div class="col-span-1 row-span-2 relative">
                  <article class="w-full">
                    <div
                      class="hidden absolute phone:block phone:bottom-1 phone:left-1.5 md:top-4 md:left-4"
                    >
                      <a
                        href="{{ route('kategorishow', $topArtikelFirst->kategori_id) }}"
                        class="text-[0.52rem] bg-blue-500 text-light p-1 sm:text-[0.65rem] md:text-sm md:py-1 md:px-2"
                        >{{$topArtikelFirst->kategori->nama}}</a
                      >
                    </div>

                    <a href="{{route('detail', $topArtikelFirst->slug)}}">
                      <img
                        class="w-24 phone:w-1/3 md:w-full object-cover"
                        src="{{asset('public/uploads/' . $topArtikelFirst->gambar)}}"
                        alt=""
                      />
                    </a>

                    <div
                      class="absolute top-0 ps-[6.8rem] phone:ps-[9.3rem] sm:ps-[12.8rem] md:relative md:ps-0 md:py-2"
                    >
                      <a href="{{route('detail', $topArtikelFirst->slug)}}">
                        <p
                          class="text-[0.50rem] phone:text-[0.60rem] md:text-[0.800rem]"
                        >
                        {{$topArtikelFirst->user->name}}
                        </p>
                        <h1
                          class="text-[0.95rem] font-bold phone:text-lg md:text-2xl md:py-1"
                        >
                        {{$topArtikelFirst->judul}}
                        </h1>
                        <p
                          class="hidden text-justify md:block lg:text-[0.950rem] xl:text-[0.75rem]"
                        >
                        {!! strip_tags(substr($topArtikelFirst->content, 0, 350)) !!}
                        </p>
                        <p
                          class="hidden sm:max-md:block text-gray-400 text-[0.60rem]"
                        >
                        {{$topArtikelFirst->views}} VIEWS
                        </p>
                      </a>
                    </div>
                  </article>
                </div>

                <div class="col-span-1 row-span-2 relative">
                  <ul class="grid gap-3">
                    @foreach($topArtikel as $item)
                    <li class="flex relative">
                      <div class="w-24 phone:w-1/3">
                        <a href="{{route('detail', $item->slug)}}"
                          ><img class="w-full" src="{{asset('public/uploads/' . $item->gambar)}}" alt=""
                        /></a>
                        <a
                          href="{{ route('kategorishow', $item->kategori_id) }}l"
                          class="hidden absolute phone:block phone:bottom-1 phone:left-1.5 text-[0.52rem] bg-blue-500 text-light p-1 sm:text-[0.65rem] md:text-sm lg:text-[0.70rem] lg:py-[0.15rem] xl:py-0"
                          >{{$item->kategori->nama}}</a
                        >
                      </div>
                      <div class="w-2/3 pl-3">
                        <a href="{{route('detail', $item->slug)}}">
                          <p
                            class="text-[0.50rem] phone:text-[0.60rem] md:text-[0.75rem]"
                          >
                          {{$item->user->name}}
                          </p>
                          <h2
                            class="text-[0.95rem] font-bold phone:text-lg md:text-[1.30rem] lg:text-sm xl:text-[1.130rem]"
                          >
                          {{$item->judul}}
                          </h2>
                          <p
                            class="hidden sm:block text-gray-400 text-[0.60rem] sm:text-[0.65rem]"
                          >
                          {{$item->views}} VIEWS
                          </p>
                        </a>
                      </div>
                    </li>
                    @endforeach
                  </ul>
                </div>
              </div>
            </div>