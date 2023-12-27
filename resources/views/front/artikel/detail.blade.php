@extends('front.front')
@section('content')
<section id="isi" class="pt-28">
      <div class="container">
        <div class="w-full self-center px-4">
          <div class="grid grid-cols-1 mt-2 lg:grid-cols-3 md:gap-4">
            <div class="col-span-2">
              <div class="mb-6">
                <h1 class="text-4xl font-bold">
                  {{$artikel->judul}}
                </h1>
                <p class="text-sm my-4">
                  By <span class="font-semibold">{{$artikel->user->name}}</span> {{$artikel->formatted_created_at}}
                </p>
              </div>
              <div class="grid lg:grid-cols-2 gap-4">
                <div class="col-span-2 relative">
                  <img
                    src="{{asset('uploads/' . $artikel->gambar)}}"
                    alt="Hero Image"
                    class="w-full"
                  />
                  <p class="text-justify my-4">
                  {!! $artikel->content !!}
                  </p>
                  <br>
                  <img
                    src="{{asset('uploads/' . $artikel->gambar)}}"
                    alt="Hero Image"
                    class="w-full object-cover"
                  />
                  <br>
                  <br>
                  <br>
                  @include('front.includes.disqus')
                  <br>
                  <br>
                  <!-- <p class="text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Nulla necessitatibus, explicabo ad numquam, pariatur modi
                    iusto, sint ullam nisi quo beatae! Quidem iste ut accusamus
                    numquam quod tempore vitae temporibus iusto voluptatibus
                    perspiciatis! Commodi ullam dolor totam adipisci tempore
                    harum vero a tempora suscipit. Culpa suscipit provident
                    consequatur numquam sequi doloremque quo aut velit nesciunt
                    ex possimus totam omnis error at nulla iusto hic sint
                    debitis adipisci aspernatur, quae asperiores iste. Dolores
                    modi ad eligendi. Ea fuga accusamus deserunt impedit
                    voluptatum iure assumenda a non temporibus veritatis optio
                    recusandae, suscipit dolor quo quasi natus numquam molestiae
                    quod distinctio. Maiores, maxime?
                  </p> -->
                  <p class="mt-6 font-bold">
                  </p>
                </div>

                <div class="col-span-2 relative mb-20">
                  <div class="hidden lg:block col-span-1">
                    <h2 class="text-xl font-bold mb-2 border-b-2">
                      Related Post
                    </h2>
                  </div>
                  <div class="mt-4 col-span-1 row-span-2 relative">
                    <ul class="grid gap-3">
                    @foreach($related as $post)
                      <li class="flex relative">
                        <a href="{{route('detail', $post->slug)}}">
                        <div class="w-24 phone:w-1/3 lg:w-1/2">
                          <img class="w-full" src="{{asset('uploads/' . $post->gambar)}}" alt="" />
                          <a
                            href="#"
                            class="hidden absolute phone:block phone:bottom-1 phone:left-1.5 text-[0.52rem] bg-red-500 text-light p-1 sm:text-[0.65rem] md:max-lg:bottom-4 md:text-sm lg:max-xl:bottom-2 lg:text-[0.70rem] lg:py-[0.15rem] xl:py-0"
                            >{{ $post->kategori->nama }}</a
                          >
                        </div>
                        <div class="w-2/3 pl-3">
                          <p
                            class="text-[0.50rem] phone:text-[0.60rem] md:text-sm"
                          >
                          {{ $post->user->name }}
                          </p>
                          <h2
                            class="text- text-[0.95rem] font-bold phone:text-lg md:text-[1.30rem] xl:text-[1.55rem]"
                          >
                          {{ $post->judul }}
                          </h2>
                          <p
                            class="hidden sm:block text-gray-400 text-[0.60rem] sm:text-[0.65rem]"
                          >
                          {{$post->formatted_created_at}}
                          </p>
                          <p
                            class="hidden text-justify md:block text-gray-400 text-[0.60rem] sm:text-[0.65rem] xl:text-[0.93rem] xl:mt-2"
                          >
                          {!! Str::limit($post->content, 150) !!}
                          </p>
                        </div>
                      </li>
                      </a>
                      @endforeach
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <!-- Video -->
            @include('front.includes.video')
          </div>
        </div>
      </div>

      @include('front.includes.footer')
    </section>
    @endsection
    <!-- <li class="flex relative">
      <div class="w-24 phone:w-1/3 lg:w-1/2">
        <img class="w-full" src="src/pic/taotao.jpg" alt="" />
        <a
          href="#"
          class="hidden absolute phone:block phone:bottom-1 phone:left-1.5 text-[0.52rem] bg-blue-500 text-light p-1 sm:text-[0.65rem] md:max-lg:bottom-4 md:text-sm lg:max-xl:bottom-2 lg:text-[0.70rem] lg:py-[0.15rem] xl:py-0"
          >Berita</a
        >
      </div>
      <div class="w-2/3 pl-3">
        <p
          class="text-[0.50rem] phone:text-[0.60rem] md:text-sm"
        >
          Muhammad Rafi
        </p>
        <h2
          class="text- text-[0.95rem] font-bold phone:text-lg md:text-[1.30rem] xl:text-[1.55rem]"
        >
          Kratos Botak Solo Anaconda Sama Bocil Kematian
        </h2>
        <p
          class="hidden sm:block text-gray-400 text-[0.60rem] sm:text-[0.65rem]"
        >
          57 MIN AGO
        </p>
        <p
          class="hidden text-justify md:block text-gray-400 text-[0.60rem] sm:text-[0.65rem] xl:text-[0.93rem] xl:mt-2"
        >
          Lorem, ipsum dolor sit amet consectetur adipisicing
          elit. Praesentium, dolor. Nihil perspiciatis aut,
          exercitationem commodi eveniet sequi fugiat porro
          alias dicta asperiores? Sed nobis enim atque libero
          accusantium beatae consequuntur.
        </p>
      </div>
    </li> -->
      <!-- <div class="hidden lg:block col-span-1">
        <h2 class="text-xl font-bold mb-2 border-b-2">Video</h2>
        <div class="mt-4 col-span-1 row-span-2 relative">
          <ul class="grid gap-3">
            <li class="flex relative">
              <div class="w-24 phone:w-60">
                <a href="#">
                  <img class="w-full" src="src/pic/taotao.jpg" alt="" />
                </a>
              </div>
              <div class="w-2/3 pl-3">
                <a href="#">
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
                    57 MIN AGO
                  </p>
                </a>
              </div>
            </li>

            <li class="flex relative">
              <div class="w-24 phone:w-60">
                <a href="#">
                  <img class="w-full" src="src/pic/taotao.jpg" alt="" />
                </a>
              </div>
              <div class="w-2/3 pl-3">
                <a href="#">
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
                    57 MIN AGO
                  </p>
                </a>
              </div>
            </li>

            <li class="flex relative">
              <div class="w-24 phone:w-60">
                <a href="#">
                  <img class="w-full" src="src/pic/taotao.jpg" alt="" />
                </a>
              </div>
              <div class="w-2/3 pl-3">
                <a href="#">
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
                    57 MIN AGO
                  </p>
                </a>
              </div>
            </li>

            <li class="flex relative">
              <div class="w-24 phone:w-60">
                <a href="#">
                  <img class="w-full" src="src/pic/taotao.jpg" alt="" />
                </a>
              </div>
              <div class="w-2/3 pl-3">
                <a href="#">
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
                    57 MIN AGO
                  </p>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div> -->