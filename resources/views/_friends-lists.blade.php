<div class="bg-gray-200 rounded-lg py-4 px-6">
    <h3 class="font-bold text=xl mb-4">Following</h3>
    <ul>
        @foreach (auth()->user()->follows as $user)
            <li class="mb-3">
                <div >
                <a href="{{route('profile', $user)}}" class="flex items-center text-sm">
                    <img class="rounded-full mr-2" style=" height: 40px; width: 40px;" src="{{ $user->avatar}}" alt="">
                    {{$user->name}} 
                </a>
                </div>
            </li>
        @endforeach
    </ul>
</div>