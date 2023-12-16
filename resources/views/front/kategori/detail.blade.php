@include('layouts.head')

  <body>
    <!-- Header Start -->
    @include('layouts.headerUtama')
    <!-- Header End -->

    <!-- Hero Section -->
    <section id="berita" class="pt-28">
    <div class="container">
        <div class="flex flex-wrap">
          <div class="w-full self-center px-4">
            <div class="relative">
            @include('front.includes.slide')
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="w-full self-center px-4">
          <div class="grid grid-cols-1 mt-4 lg:grid-cols-3 md:gap-4">
            <!-- List -->
            <div class="col-span-2">
              <h2 class="text-xl font-bold mb-4 border-b-2 md:w-full">List</h2>
              <div class="grid lg:grid-cols-2 gap-5">
                <div class="col-span-2 relative">
                  <ul class="grid gap-3">
                    @foreach($recentKategori as $data)
                    <li class="flex relative">
                      <div class="w-24 phone:w-1/3 lg:w-1/2">
                        <a href="isi.html"
                          ><img class="w-full" src="{{asset('uploads/' . $data->gambar)}}" alt=""
                        /></a>
                      </div>
                      <div class="w-2/3 pl-3">
                        <a href="isi.html">
                          <p
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
                          {{$data->formatted_created_at}}
                          </p>
                          <p
                            class="hidden text-justify md:block text-gray-400 text-[0.60rem] sm:text-[0.65rem] xl:text-[0.93rem] xl:mt-2"
                          >
                          {!! Str::limit($data->content, 150) !!}
                          </p>
                        </a>
                      </div>
                    </li>
                    @endforeach
                  </ul>
                </div>
              </div>
              <!-- Pagination -->
              <div class="my-10 flex justify-center">
                <!-- <nav class="flex">
                  <a
                    href="berita.html"
                    class="border text-light bg-primary border-gray-300 px-3 py-2 mr-1 rounded-md"
                  >
                    1
                  </a>
                  <a
                    href="#"
                    class="border border-gray-300 px-3 py-2 mr-1 rounded-md"
                  >
                    2
                  </a>
                  <a
                    href="#"
                    class="border border-gray-300 px-3 py-2 rounded-md"
                  >
                    3
                  </a>
                </nav> -->
              </div>
            </div>

            <!-- Recent -->
                @include('front.includes.recent')
          </div>
        </div>
      </div>

      <footer class="bg-black pt-24 pb-12">
        <div class="container">
          <div class="flex flex-wrap">
            <div class="w-full px-4 mb-12 text-slate-300 font-medium md:w-1/2">
              <a href="home.html" class="block py-6"
                ><img src="{{asset('Tailwind/src/pic')}}/logo.png" alt="logo"
              /></a>
              <h3 class="font-bold text-2xl mb-2">Contact Us!</h3>
              <p>Startandplay@gmail.com</p>
              <p>Jl. Kebaikan No. 69, South Tangerang</p>
              <p>08123456789</p>
            </div>
          </div>
        </div>
      </footer>
    </section>

    <!-- Hero End -->

    @include('layouts.js')
  </body>
</html>
