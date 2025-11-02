<nav class="bg-white shadow-md py-2 px-10 flex justify-between items-center">
    <h1 class="text-teal-600 hover:text-teal-700 text-2xl font-bold">
        <a href="{{ route('dashboard') }}">Dashboard</a>
    </h1>
    <div class="flex flex-row-reverse gap-4">
        {{-- Avatar dropdown --}}
        <div class="relative">
            <button id="avatarToggle" class="cursor-pointer">
                <img src="{{ asset('/images/author.jpeg') }}" alt="Author"
                    class="w-10 md:w-14 h-10 md:h-14 rounded-full">
            </button>
            <div id="avatar"
                class="hidden absolute right-0 mt-3 z-50 bg-white border-2 border-black rounded-md w-[280px] p-2">
                <div class="flex flex-col gap-2 items-center">
                    <div class="flex flex-row items-center gap-3">
                        <img src="{{ asset('images/author.jpeg') }}" alt="" class="w-16 h-16 rounded-full">
                        <div class="flex flex-col">
                            <p class="font-bold">{{ auth()->user()->name }}</p>
                            <p>{{ auth()->user()->email }}</p>
                            <p>{{ auth()->user()->phone }}</p>
                        </div>
                    </div>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit"
                            class="bg-red-500 hover:bg-red-700 text-white rounded-lg py-1 px-2 cursor-pointer">Logout</button>
                    </form>
                </div>
            </div>
        </div>
        {{-- Search --}}
        <button class="hover:text-teal-600 cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1"
                stroke="none" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M11 2C15.968 2 20 6.032 20 11C20 15.968 15.968 20 11 20C6.032 20 2 15.968 2 11C2 6.032 6.032 2 11 2ZM11 18C14.8675 18 18 14.8675 18 11C18 7.1325 14.8675 4 11 4C7.1325 4 4 7.1325 4 11C4 14.8675 7.1325 18 11 18ZM19.4853 18.0711L22.3137 20.8995L20.8995 22.3137L18.0711 19.4853L19.4853 18.0711Z" />
            </svg>
            {{-- Moon --}}
        </button>
        <button class="hover:text-teal-600 cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1"
                stroke="none" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M10 7C10 10.866 13.134 14 17 14C18.9584 14 20.729 13.1957 21.9995 11.8995C22 11.933 22 11.9665 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C12.0335 2 12.067 2 12.1005 2.00049C10.8043 3.27098 10 5.04157 10 7ZM4 12C4 16.4183 7.58172 20 12 20C15.0583 20 17.7158 18.2839 19.062 15.7621C18.3945 15.9187 17.7035 16 17 16C12.0294 16 8 11.9706 8 7C8 6.29648 8.08133 5.60547 8.2379 4.938C5.71611 6.28423 4 8.9417 4 12Z" />
            </svg>
        </button>
        {{-- Add Post --}}
        <button class="hover:text-teal-600 cursor-pointer">
            <a href="/post/create" title="Create Post">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1"
                    stroke="none" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M11 11V7H13V11H17V13H13V17H11V13H7V11H11ZM12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20Z" />
                </svg>
            </a>
        </button>
        {{-- Sign out --}}
        {{-- <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit"
                class="bg-red-500 hover:bg-red-700 text-white rounded-lg py-1 px-2 cursor-pointer">Logout</button>
        </form> --}}
    </div>
</nav>
