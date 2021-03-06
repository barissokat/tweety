<ul>
    <li><a class="font-bold text-lg mb-4 block" href="{{ route('home') }}">Home</a></li>
    <li><a class="font-bold text-lg mb-4 block" href="/explore">Explore</a></li>
    @auth
    <li><a class="font-bold text-lg mb-4 block" href="{{ route('profile', auth()->user()) }}">Profile</a></li>
    <li>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="font-bold text-lg block" type="submit">Logout</button>
        </form>
    </li>
    @endauth
</ul>
