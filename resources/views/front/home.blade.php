@extends('welcome')

@section('konten')
<section id="home" class="pt-28">
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
          <div class="grid grid-cols-1 mt-4 md:grid-cols-3 md:gap-4">
            <!-- Top News -->
            @include('front.includes.topnews')

            <!-- Recent -->
            @include('front.includes.recent')
          </div>
        </div>
      </div>

      <div class="container">
        <div class="w-full self-center px-4">
          <div class="grid grid-cols-1 mt-4 lg:grid-cols-3 md:gap-4">
            <!-- Latest -->
            <div class="col-span-2">
              @include('front.includes.latest')
              <!-- Pagination -->
              <div class="my-10 flex justify-center">
                <!-- <nav class="flex">
                  <a
                    href="home.html"
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
                    class="border border-gray-300 px-3 py-2 mr-1 rounded-md"
                  >
                    3
                  </a>
                </nav> -->
              </div>
            </div>

            <!-- Video -->
            @include('front.includes.video')
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
@endsection