<header class="z-10 py-4 bg-yellow-200 shadow-md dark:bg-gray-800">
    <div class="container flex items-center justify-end h-full px-6 mx-auto text-black-600 dark:text-black-300">
      <!-- Mobile hamburger -->
      <button class=" p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple"
        @click="toggleSideMenu" aria-label="Menu">
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd"
            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
            clip-rule="evenodd"></path>
        </svg>
      </button>

      <nav>
        <a class="inline-flex items-center text-sm mr-5 font-semibold transition-colors duration-150 "
          href="#" src="{{ asset('img/Logo_Pemerintah.png')}}" alt="logo" width="160px">
        </a>
      </nav>
      <div class="flex justify-center flex-1">
        <a class="inline-flex items-center text-sm mr-5 font-semibold transition-colors duration-150 "
          href="{{ url('dashboard')}}">

          <span class="ml-4">Dashboard</span>
        </a>

        <a class="inline-flex items-center text-sm mr-5 font-semibold transition-colors duration-150 "
          href="{{ url('user/pengaduan')}} ">

          <span class="ml-4">Pengaduan</span>
        </a>
        {{-- <div @click.away="open = false" class="relative" x-data="{ open: false }">
          <button @click="open = !open"
            class="inline-flex items-center  text-sm mr-5 font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100">
            <span>Pengaduan</span>
            <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
              class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
              <path fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
            </svg>
          </button>
          <div x-show="open" x-transition:enter="transition ease-out duration-100"
            x-transition:enter-start="transform opacity-0 scale-95"
            x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="transform opacity-100 scale-100"
            x-transition:leave-end="transform opacity-0 scale-95"
            class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
            <div class="px-2 py-2 dark:bg-gray-800 bg-white rounded-md shadow dark-mode:bg-gray-800">

              <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-purple-600 dark:text-gray-100"
                href="#">Link #1</a>

            </div>
          </div>
        </div> --}}




      </div>

      <ul class="flex items-center flex-shrink-2 space-x-6">
        <li class="flex">
          <p>{{ Auth::user()->name }} </p>
        </li>
        <!-- Profile menu -->
        <li class="relative">
          <button class="align-middle rounded-full focus:shadow-outline-purple focus:outline-none"
            @click="toggleProfileMenu" @keydown.escape="closeProfileMenu" aria-label="Account" aria-haspopup="true">
            <img class="object-cover w-8 h-8 rounded-full" src="https://shanghai-date.com/uploads/g/t/t/h/q2t34kjldqrqv0pl7ihh.png"
              alt="" aria-hidden="true" />
          </button>
          <template x-if="isProfileMenuOpen">
            <ul x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
              x-transition:leave-end="opacity-0" @click.away="closeProfileMenu" @keydown.escape="closeProfileMenu"
              class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:border-gray-700 dark:text-gray-300 dark:bg-gray-700"
              aria-label="submenu">
              <li class="flex">
                <form method="POST" action="{{ route('logout') }}"
                  class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200">
                  @csrf
                  <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                    href="{{ route('logout') }} " onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                    <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none" stroke-linecap="round"
                      stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                      <path
                        d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1">
                      </path>
                    </svg>
                    <span>Log out</span>
                  </a>
                </form>
              </li>
            </ul>
          </template>
        </li>
      </ul>
    </div>
  </header>
