<form action="/profiles/{{ $user->name}}/follow" method="POST">
    @csrf
    <button type="submit"  
        class="bg-blue-500 rounded-full shadow py-2 px-2 text-white text-xs">
        {{ auth()->user()->following($user) ? 'Unffollow Me' : 'Follow Me' }}
    </button>
</form>