<div>
  @section('title', 'Product Sales')
  <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
    <h1>Product Sales</h1> <br>


    <form wire:submit.prevent="store">
      <input type="text" wire:model="name">
      <div>
        @error('name')
          <span class="error">{{ $message }}</span>
        @enderror
      </div>


      <button type="submit" class="mt-4 bg-blue-500 text-white py-2 px-4 rounded">
        Save
      </button>
    </form>

    <!-- Flash message -->
    @if (session()->has('message'))
      <div class="mt-4 p-2 bg-green-500 text-white rounded">
        {{ session('message') }}
      </div>
    @endif
  </div>
</div>
