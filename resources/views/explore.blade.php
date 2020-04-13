<x-app>
    <div>
        @forelse ($users as $user)
        <a href="{{ $user->path() }}" class="flex items-center mb-5">
            <img src="{{ $user->avatar }}" class="mr-4 rounded" alt="{{ $user->name }}" width="50">
            <div class="font-bold">
                <h4>{{ '@' . $user->username }}</h4>
            </div>
        </a>
        @empty
        <li>User not found!</li>
        @endforelse
        {{ $users->links() }}
    </div>
</x-app>
