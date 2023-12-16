<h2 class="text-xl font-bold mb-4 border-b-2 md:w-full">
                Latest
              </h2>
              <div class="grid lg:grid-cols-2 gap-5">
                <div class="col-span-2 relative">
                  <article class="w-full">
                    <div class="absolute top-0 left-1.5 p-2 md:top-2 md:left-2">
                      <a
                        href="{{ route('kategorishow', $artikelnanggung->kategori_id) }}"
                        class="text-[0.60rem] bg-yellow-500 text-light p-1 px-2 md:text-sm"
                        >{{$artikelnanggung->kategori->nama}}</a
                      >
                    </div>
                    <a href="{{route('detail', $artikelnanggung->slug)}}"
                      ><img
                        src="{{asset('uploads/' . $artikelnanggung->gambar)}}"
                        alt="Hero Image"
                        class="w-full"
                      />
                      <div
                        class="absolute bottom-1 left-2.5 md:left-4 md:bottom-1 lg:bottom-2"
                      >
                        <p
                          class="text-[0.60rem] text-light md:text-sm lg:text-sm"
                        >
                          By <span class="font-semibold">{{$artikelnanggung->user->name}}</span> {{$artikelnanggung->formatted_created_at}}
                        </p>
                        <h1
                          class="text-xl font-bold text-light sm:text-2xl md:text-3xl xl:text-3xl"
                        >
                        {{$artikelnanggung->judul}}
                        </h1>
                      </div>
                    </a>
                  </article>
                </div>

                <div class="col-span-2 relative">
                  <ul class="grid gap-3">
                    @foreach($artikelterakhir as $data)
                    <li class="flex relative">
                      <div class="w-24 phone:w-1/3 lg:w-1/2">
                        <a href="{{route('detail', $data->slug)}}"
                          ><img class="w-full" src="{{asset('uploads/' . $data->gambar)}}" alt=""
                        /></a>
                        <a
                          href="{{ route('kategorishow', $data->kategori_id) }}"
                          class="hidden absolute phone:block phone:bottom-1 phone:left-1.5 text-[0.52rem] bg-blue-500 text-light p-1 sm:text-[0.65rem] md:max-lg:bottom-4 md:text-sm lg:max-xl:bottom-2 lg:text-[0.70rem] lg:py-[0.15rem] xl:py-0"
                          >{{$data->kategori->nama}}</a
                        >
                      </div>
                      <div class="w-2/3 pl-3">
                        <a href="isi.html"
                          ><p
                            class="text-[0.50rem] phone:text-[0.60rem] md:text-sm"
                          >
                          {{$data->user->name}}
                          </p>
                          <h2
                            class="text- text-[0.95rem] font-bold phone:text-lg md:text-[1.30rem] xl:text-[1.55rem]"
                          >
                          {{$data->judul}}
                          </h2>
                          <p
                            class="hidden sm:block text-gray-400 text-[0.60rem] sm:text-[0.65rem]"
                          >
                          {{$data->views}} VIEWS
                          </p>
                          <p
                            class="hidden text-justify md:block text-gray-400 text-[0.60rem] sm:text-[0.65rem] xl:text-[0.93rem] xl:mt-2"
                          >
                          {!! strip_tags(substr($data->content, 0, 250)) !!}
                          </p>
                        </a>
                      </div>
                    </li>
                    @endforeach
                  </ul>
                </div>
              </div>