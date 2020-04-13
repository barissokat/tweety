<x-master>
    <section class="px-8">
        <main class="container mx-auto">
            <div class="md:flex md:justify-between">
                <div class="md:w-32">
                    @auth
                    @include('_sidebar-links')
                    @endauth
                </div>
                <div class="md:flex-1 md:mx-10" style="max-width: 700px">
                    {{ $slot }}
                </div>
                <div class="md:w-1/6">
                    @auth
                    @include('_friends-list')
                    @endauth
                </div>
            </div>
        </main>
    </section>
</x-master>
