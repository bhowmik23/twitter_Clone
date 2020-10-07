<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
    <form action="/tweets" method="post">
        @csrf
        <textarea name="body" id="" class="w-full" placeholder="What's up doc?" required></textarea>
        <hr class="my-4">
        <footer class="flex justify-between items-center">
            <img style="height:50px; width:50px:" src="{{ auth()->user()->avatar }}" alt="your avatar">
            <button type="submit" class="bg-blue-500 hover:bg-bule-700 rounded-full shadow px-10 text-sm px-2 text-white h-10">Publish</button>
        </footer>
    </form>

    @error('body')
        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>