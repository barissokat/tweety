<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
   <form action="{{ route('tweets.store')}}" method="post">
      @csrf
      <textarea name="body" class="w-full" placeholder="What's up doc?" required autofocus></textarea>
      <hr class="my-4">
      <footer class="flex justify-between items-center">
         <img src="{{ auth()->user()->avatar }}" alt="@barkinsokat" class="rounded-full mr-2" width="50" height="50">
         <x-button text="Publish"></x-button>
      </footer>
   </form>

   @error('body')
   <p class="text-red-500 text-sm mt-2">
      {{ $message }}
   </p>
   @enderror
</div>
