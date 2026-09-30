@props(['title', 'active'])

<button
    class="px-4 py-2 border-3 border-black {{ $active ? 'bg-yellow-400 shadow-[4px_4px_0_0]' : 'bg-white' }} uppercase">
    <p class="font-bold text-sm">{{ $title }}</p>
</button>
