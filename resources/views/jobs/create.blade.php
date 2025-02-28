<x-layout>
    <form action="/jobs" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Enter Job Title"></br ></br >
    <textarea name="description" id="desc" placeholder="Enter Job description"></textarea></br ></br >
    <button>Submit</button>
</form>
</x-layout>