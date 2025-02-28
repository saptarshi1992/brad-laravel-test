<x-layout>
    <h1><b>{{ $title }}</b></h1>
    @if (!empty($jobs))
        <ul>
            @foreach ($jobs as $job)
                <li><a href = "{{route('jobs.show',$job->id)}}">{{ $job->title }}</a>
                    {{ $job->description }}</li>
            @endforeach
        </ul>
    @else
        <h1>No Available Jobs</h1>
    @endif
</x-layout>
