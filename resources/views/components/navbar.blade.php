<header class="sticky z-50 w-full border-b-3 border-black bg-white">
    <div class="mx-auto flex h-16 w-full container items-center justify-between px-4 sm:px-8">
        {{-- logo --}}
        <a href="/" class="flex items-center gap-2">
            <div
                class="size-8 border-3 border-black flex items-center justify-center shadow-[4px_4px_0_0] bg-yellow-400">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                </svg>

            </div>
            <span class="text-sm sm:text-base font-archivo font-extrabold md:text-lg">TakaBlog</span>
        </a>
        {{-- logo end --}}


        {{-- menu --}}
        <nav class="flex items-center gap-4">
            <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
            <x-nav-link href="/posts" :active="request()->is('posts')">Blog</x-nav-link>
            <x-nav-link href="/contacts" :active="request()->is('contacts')">Contact</x-nav-link>
        </nav>
        {{-- menu end --}}


        {{-- notification & new post end --}}
        <div class="flex items-center gap-3">
            <div class="relative p-2 border-3 border-black">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                </svg>
                <spa
                    class="border-2 font-bold font-archivo border-black text-[9px] absolute text-white size-4 flex items-center justify-center bg-red-500 -top-1.5 -right-1.5">
                    3</spa>
            </div>
            <x-button href="/login">
                <div class="text-sm font-bold text-black">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </div>
                <span>New Post</span>
            </x-button>
            <div class="size-8 flex items-center justify-center font-bold text-xs border-3 border-black bg-yellow-400">
                <span>TB</span>
            </div>
        </div>
        {{-- notification & new post end --}}

    </div>
</header>
