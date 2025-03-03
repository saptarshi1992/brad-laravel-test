<x-layout>
    <form action="/jobs" method="POST">
    @csrf
    <div class='my-5'>
        <input type="text" name="title" placeholder="Enter Job Title" value={{old('title')}}></br ></br >
        @error('title')
            <div class="text-red-500 mt-2 text-sm">Enter the Title Here</div>
        @enderror
    </div>
   
    <div class='mb-5'>
        <textarea name="description" id="desc" placeholder="Enter Job description" value = {{old('description')}}></textarea></br ></br >
        @error('description')
        <div class="text-red-500 mt-2 text-sm">Enter the Description Here</div>
        @enderror
    </div>
    
    <button>Submit</button>
</form>
</x-layout>