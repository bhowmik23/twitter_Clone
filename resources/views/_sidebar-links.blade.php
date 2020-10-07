
<ul>
    <li class="font-bold text-lg mb-4 block"><a href="{{ route('home') }}">Home</a></li>
    <li class="font-bold text-lg mb-4 block"><a href="/explore">Explore</a></li>
    <li class="font-bold text-lg mb-4 block"><a href="{{ route('profile', auth()->user()) }}">Profile</a></li>
    <li class="font-bold text-lg mb-4 block">
    <form action="/logout" method="post">
        @csrf
        <button class="font-bold text-lg " type="submit">Log out</button>
    </form>
</ul>