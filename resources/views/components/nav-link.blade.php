@props(['active' => false])

<a {{ $attributes }}
    class="border-black px-5 py-2 transition-all duration-300 hover:bg-yellow-400 hover:text-black capitalize text-sm font-bold
        {{ $active ? 'text-black bg-yellow-400 shadow-[4px_4px_0_0]' : 'bg-white text-black/50' }}">
    {{ $slot }}
</a>
