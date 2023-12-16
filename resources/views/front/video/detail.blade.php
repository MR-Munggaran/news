@extends('front.front')
@section('content')
<section id="isi" class="pt-28">
      <div class="container">
        <div class="w-full self-center px-4">
          <div class="grid grid-cols-1 mt-2 lg:grid-cols-3 md:gap-4">
            <div class="col-span-2">
              <div class="mb-6">
                <h1 class="text-4xl font-bold">
                  {{$materidetail->judul_materi}}
                </h1>
                <p class="text-sm my-4">
                  TIME <span class="font-semibold">{{$materidetail->formatted_created_at}}</span> 
                </p>
              </div>
              <div class="grid lg:grid-cols-2 gap-4">
                <div class="col-span-2 relative">
                  <img
                    src="{{asset('uploads/' . $materidetail->gambar_materi)}}"
                    alt="Hero Image"
                    class="w-full"
                  />
                  <p class="text-justify my-4">
                  {!! $materidetail->deskripsi !!}
                  </p>
                  <br>
                  <iframe src="{{$materidetail->link}}" frameborder="0" allowfullscreen class="w-full object-cover"></iframe>
                  <br>
                  <br>
                  <br>
                  @include('front.includes.disqus')
                  <br>
                  <br>
                  <p class="mt-6 font-bold">
                  </p>
                </div>
                <div class="col-span-2 relative mb-20">
                </div>
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
                ><img src="src/pic/logo.png" alt="logo"
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