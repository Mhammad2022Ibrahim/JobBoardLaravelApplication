@props(['active' => false])

<a aria-current="{{ $active ? 'page' : 'false' }}"
    class=" {{ $active ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium text-white"
    {{ $attributes }}>
    {{ $slot }}
</a>






<!-- @props(['active' => false, 'type' => 'a'])

@if ($type === 'a'):
    <a aria-current="{{ $active ? 'page' : 'false' }}"
        class=" {{ $active ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium text-white"
        {{ $attributes }}>
        {{ $slot }}
    </a>

@else
    <button aria-current="{{ $active ? 'page' : 'false' }}"
        class=" {{ $active ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium text-white"
        {{ $attributes }}>
        {{ $slot }}
    </button>

@endif -->