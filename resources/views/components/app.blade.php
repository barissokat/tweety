<x-master>
    <section class="px-8">
        <main class="container mx-auto">
            <div class="md:flex md:justify-between">
                @auth
                <div class="md:w-32">
                    @include('_sidebar-links')
                </div>
                @endauth
                <div class="md:flex-1 md:mx-10" style="max-width: 700px">
                    {{ $slot }}
                </div>
                @auth
                <div class="md:w-1/6">
                    @include('_friends-list')
                </div>
                @endauth
            </div>
        </main>
    </section>
</x-master>
