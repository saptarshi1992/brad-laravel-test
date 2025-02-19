<x-layout>
    <h1>{{ $title }}</h1>
    @if (!empty($jobs))
        <ul>
            @foreach ($jobs as $job)
                <li>{{ $loop->index }} - {{ $job }}</li>
            @endforeach
        </ul>
    @else
        <h1>No Available Jobs</h1>
    @endif
</x-layout>
