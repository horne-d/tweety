<div class="border border-blue-400 rounded-lg py-4 px-6 mb-6">
    <form method="POST" action="/tweets">
    @csrf
        <textarea name="body" class="w-full" placeholder="What's on your mind?"></textarea>
        <hr class="my-4">
        <footer class="flex justify-between">
            <img src="{{ auth()->user()->avatar }}" alt="avatar" class="rounded-full mr-2">
            <button type="submit" class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white">Post</button>
        </footer>
    </form>

    @error('body')
        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>