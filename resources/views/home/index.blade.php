<x-layout>
    <main class="container mx-auto p-4 mt-4">
        <h2 class="text-center text-3xl mb-4 font-bold border border-gray-300 p-3">Welcome to Workopia</h1>
         <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
           @forelse($jobs as $job)
           <x-job-card :job="$job"></x-job-card>
           @empty
           <p>No jobs found</p>
           @endforelse
         </div>
         <a href="{{route('jobs.index')}}" class="block text-xl text-center">
            <i class="fa fa-arrow-alt-circle-right">Show All Jobs</i>
         </a>
       </main>
    <x-bottom-banner/>
</x-layout>