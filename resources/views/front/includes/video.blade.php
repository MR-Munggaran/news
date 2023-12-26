<div class="hidden lg:block col-span-1">
              <h2 class="text-xl font-bold mb-2 border-b-2">Video</h2>
              <div class="mt-4 col-span-1 row-span-2 relative">
                <ul class="grid gap-3">
                    @foreach ($materi as $item)
                  <li class="flex relative">
                    <div class="w-24 phone:w-60">
                      <a href="{{ route('detailvideo', $item->slug) }}">
                        <img class="w-full" src="{{asset('public/uploads/' . $item->gambar_materi)}}" alt="" />
                      </a>
                    </div>
                    <div class="w-2/3 pl-3">
                      <a href="{{route('detailvideo', $item->slug)}}">

                        <h2
                          class="text-[0.95rem] font-bold phone:text-lg md:text-[1.30rem] lg:text-sm xl:text-[1.130rem]"> {{$item->judul_materi}}</h2>
                        <p class="hidden sm:block text-gray-400 text-[0.60rem] sm:text-[0.65rem]" > {{$item->formatted_created_at}} </p>
                      </a>
                    </div>
                  </li>
                  @endforeach
                </ul>
            </div>
</div>
        
                          <!-- <li class="flex relative">
                            <div class="w-24 phone:w-60">
                              <a href="#">
                                <img class="w-full" src="{{asset('Tailwind/src/pic')}}/taotao.jpg" alt="" />
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
                                <img class="w-full" src="{{asset('Tailwind/src/pic')}}/taotao.jpg" alt="" />
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
                                <img class="w-full" src="{{asset('Tailwind/src/pic')}}/taotao.jpg" alt="" />
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
                          </li> -->