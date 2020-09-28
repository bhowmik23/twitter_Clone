<x-app>
    <header class="mb-6 relative">
        <div class="relative">
            <img class="mb-2 border rounded-full"
                src="/images/default-profile-banner.jpg"
                alt=""
            >

            <img src="{{ $user->avatar}}"
                class="rounded-full mr-2 absolute buttom-0 transform -translate-x-1/2"
                style="left: 50%;
                    top:80%;"
                width="150"
                alt=""
            >
        </div>

        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="font-bold text-2xl mb-0">{{ $user->name}}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>
            <div class="flex">
                @if(auth()->user()->is($user))
                    <a href="{{ $user->path('edit') }}" 
                        class="rounded-full shadow py-2 px-2 text-black text-xs mr-2"
                    >
                        Edit Profile
                    </a>
                @endif
                <x-follow-button :user='$user'></x-follow-button>
            </div>
        </div>
        <p class="text-sm">I am a Fullstack web developer with good
            knowledge of front-end and backend techniques in Laravel 
            Framework and also learn Django Framework. I love structure
            and order and I also stand for quality. I love spending
            time on fixing little details and optimizing web apps.
            Also I like working in a team, you'll learn faster and
            much more. As the saying goes: 'two heads are better
            than one
        </p>
           
    </header>
    @include('_timeline', [
        'tweets' => $user->tweets
    ])
</x-app>