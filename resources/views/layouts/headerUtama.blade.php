<header class="bg-dark fixed top-0 left-0 w-full flex items-center z-10">
      <div class="container">
        <div class="flex items-center justify-between relative">
          <div class="px-4">
            <a href="{{ route('home') }}" class="block py-6"
              ><img src="{{asset('Tailwind/src/pic/logo.png')}}" alt="logo"
            /></a>
          </div>
          <div class="flex items-center px-4">
            <button
              id="burger"
              name="burger"
              type="button"
              class="block absolute right-4 lg:hidden"
            >
              <span
                class="burger-line trasition duration-300 ease-in-out origin-top-left"
              ></span>
              <span
                class="burger-line trasition duration-300 ease-in-out"
              ></span>
              <span
                class="burger-line trasition duration-300 ease-in-out origin-bottom-left"
              ></span>
            </button>

            <nav
              id="nav-menu"
              class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none"
            >
              <ul class="block lg:flex">
                <li class="group">
                  <a
                    href="{{ route('home') }}"
                    class="font-bold text-dark py-2 mx-8 flex group-hover:text-primary lg:text-light"
                    >Home</a
                  >
                </li>
                @foreach($kategori as $data)
                <li class="group">
                  <a
                    href="{{ route('kategorishow', $data->id) }}"
                    class="font-bold text-dark py-2 mx-8 flex group-hover:text-primary lg:text-light"
                    >{{$data->nama}}</a
                  >
                </li>
                @endforeach
                <!-- <li class="group">
                  <a
                    href="review.html"
                    class="font-bold text-dark py-2 mx-8 flex group-hover:text-primary lg:text-light"
                    >Review</a
                  >
                </li>
                <li class="group">
                  <a
                    href="tutorial.html"
                    class="font-bold text-dark py-2 mx-8 flex group-hover:text-primary lg:text-light"
                    >Tutorial</a
                  >
                </li> -->
                <!-- <li class="group relative" x-data="{dropdownOpen:false}">
                  <button
                    href="#"
                    class="font-bold text-dark py-2 mx-9 flex group-hover:text-primary lg:text-light"
                    @click="dropdownOpen = !dropdownOpen"
                  >
                    Filter
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 10 26"
                      stroke="currentColor"
                      class="w-6 h-6 text-gray-400 group-hover:text-primary"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M8 9l4 4 4-4"
                      ></path>
                    </svg>
                  </button>
                  <div
                    class="bg-white left-8 rounded-md p-2 lg:absolute lg:border"
                    :class="{'hidden':!dropdownOpen,'flex flex-col':dropdownOpen}"
                    @click.away="dropdownOpen = false"
                  >
                    <ul class="space-y-2 lg:w-48">
                      <li>
                        <a
                          href="#"
                          class="flex p-2 mx-10 font-semibold text-gray-600 hover:text-black lg:hover:bg-gray-100 lg:rounded-md lg:mx-0"
                          >IOS/MAC</a
                        >
                      </li>
                      <li>
                        <a
                          href="#"
                          class="flex p-2 mx-10 font-semibold text-gray-600 hover:text-black lg:hover:bg-gray-100 lg:rounded-md lg:mx-0"
                          >Windows</a
                        >
                      </li>
                      <li>
                        <a
                          href="#"
                          class="flex p-2 mx-10 font-semibold text-gray-600 hover:text-black lg:hover:bg-gray-100 lg:rounded-md lg:mx-0"
                          >Android</a
                        >
                      </li>
                    </ul>
                  </div>
                </li> -->
                <hr>
                <hr>
                <hr>
                <div class="group hidden lg:block">
                    <input
                        type="text"
                        id="search_data"
                        class="py-2 ps-10 text-sm rounded-full"
                        placeholder="Search..."
                    />
                    <ul id="search-results" class="bg-white absolute w-1/5 mx-5 my-5 "></ul>
                </div>
                
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>