@props(['url' => '/', 'active' => false, 'icon' => null , 'mobile' => false])

@php
    $isActive = request()->is(trim($url, '/')) || (request()->path() === '/' && $url === '/');
@endphp
@if ($mobile)
<a href="{{ $url}}" class="block px-4 py-2 hover:bg-blue-700 {{ $isActive ? 'text-yellow-500 font-bold' : '' }}">
    @if($icon)
    <i class = "fa fa-{{$icon}} mr-1"></i>
    @endif
    {{$slot}}
</a>
    
@else

<a href="{{ $url }}" class="text-white hover:underline py-2 {{ $isActive ? 'text-yellow-500 font-bold' : '' }}">
    @if ($icon)
        <i class = "fa fa-{{$icon}} mr-1"></i>
    @endif
    {{ $slot }}
</a>
@endif
 