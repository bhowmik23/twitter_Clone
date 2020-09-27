<div class="flex p-4 border-b border-b-gray-400">
    <div class="mr-2 flex-shrink-0">
        <img class="rounded-full mr-2" style="height:50px; width:50px:" src="{{ $tweet->user->avatar }}" alt="">
    </div>
    <div>
        <h5 class="font-bold mb-4">{{ $tweet->user->name }}</h5>
        <p class="text-sm">{{ $tweet->body }}</p>
    </div>
</div>