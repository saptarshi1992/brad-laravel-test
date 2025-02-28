<x-layout>
    <h1><b>{{ $title }}</b></h1>
    @if (!empty($jobs))
        <ul>
            @foreach ($jobs as $job)
                <li><b>Title:</b><u><a href = "{{route('jobs.show',$job->id)}}">{{ $job->title }}</a></u>
                    <p><b>Description:</b>{{ $job->description }}</p></li>
            @endforeach
        </ul>
    @else
        <h1>No Available Jobs</h1>
    @endif
</x-layout>
