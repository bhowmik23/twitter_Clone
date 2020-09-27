@extends('layouts.app')

@section('content')
   <header class="mb-6 relative">
        <img class="mb-2" style="border-radius: 30px;" src="/images/default-profile-banner.jpg" alt="">
        <div class="flex justify-between items-center mb-4">
            <div>
                <h2 class="font-bold text-2xl mb-0">{{ $user->name}}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>
            <div>
                <a href="" class="rounded-full shadow py-2 px-2 text-black text-xs">Edit Profile</a>
                <a href="" class="bg-blue-500 rounded-full shadow py-2 px-2 text-white text-xs">Follow Me</a>
            </div>
        </div>
        <p class="text-sm">I am a Fullstack web developer with good
         knowledge of front-end and backend techniques in Laravel 
         Framework and also learn Django Framework. I love structure
          and order and I also stand for quality. I love spending
           time on fixing little details and optimizing web apps.
            Also I like working in a team, you'll learn faster and
             much more. As the saying goes: 'two heads are better
              than one</p>
        <img class="rounded-full mr-2 absolute"
            style=" width:150px; left: calc(50% - 75px); top: 55%"
            src="{{ $user->avatar}}" alt="">
           
   </header>
   @include('_timeline', [
       'tweets' => $user->tweets
   ])
@endsection