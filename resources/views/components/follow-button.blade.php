@auth
@unless (current_user()->is($user))
<form action="{{ route('profile.follow', $user) }}" method="post">
    @csrf
    <button type="submit" class="bg-blue-400 rounded-full shadow py-2 px-4 text-white text-sm">
        {{ current_user()->following($user) ? 'Unfollow Me' : 'Follow Me' }}
    </button>
</form>
@endunless
@endauth
