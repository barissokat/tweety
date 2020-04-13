<x-app>
   <header class="mb-6 relative">
      <div class="relative">
         <img src="/images/default-profile-banner.jpg" alt="{{ $user->name }}" class="rounded-lg mb-2">

         <img src="{{ $user->avatar }}" alt="{{ $user->name }}"
            class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2" width="100px"
            style="left: 50%;">
      </div>

      <div class="flex justify-between items-center mt-6">
         <div style="max-width: 270px;">
            <h2 class="font-bold text-2xl mb-0"> {{ $user->name }} </h2>
            <p class="font-sm"> Joined {{ $user->created_at->diffForHumans() }} </p>
         </div>

         <div class="flex">
            @can('edit', $user)
            <a href="{{ route('profile.edit', $user) }}"
               class="rounded-full border border-gray-300 py-2 px-4 text-black text-sm mr-2  hover:border-gray-700">
               Edit Profile
            </a>
            @endcan

            <x-follow-button :user="$user"></x-follow-button>
         </div>
      </div>

      <p class="text-sm">
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore at quia dolor soluta tenetur sit quaerat
         earum
         animi distinctio ullam. Tempora ipsum neque dignissimos ipsa ducimus rem fugit excepturi reiciendis?
      </p>

   </header>

   @include('_timeline', [
   'tweets' => $tweets
   ])
</x-app>
