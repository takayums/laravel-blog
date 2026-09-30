<x-layout>
    <section id="home" class="border-b-2 border-black py-10">
        <div class="space-y-10 mx-auto container px-4 sm:px-8">

            {{-- category list --}}
            <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-y-3">
                <div class="flex gap-2 flex-wrap">
                    <x-category title="All" :active="true" />
                    <x-category title="Design" :active="false" />
                    <x-category title="Typography" :active="false" />
                    <x-category title="Art" :active="false" />
                    <x-category title="Tech" :active="false" />
                </div>
                <div class="relative w-full md:max-w-sm">
                    <div class="absolute left-3 top-1/2 -translate-y-1/2 text-black/50">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                        </svg>
                    </div>
                    <div>
                        <input type="text" name="search" value="" placeholder="Search posts"
                            class="w-full pl-10 border-3 font-mono border-black px-4 py-2 outline-none">
                    </div>
                </div>
            </div>
            {{-- category list end --}}


            {{-- post list --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                <x-card-post />
                <x-card-post />
                <x-card-post />
                <x-card-post />
                <x-card-post />
                <x-card-post />
                <x-card-post />
            </div>
            {{-- post list end --}}
        </div>
    </section>
</x-layout>
