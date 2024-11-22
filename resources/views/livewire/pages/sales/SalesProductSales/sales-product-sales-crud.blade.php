<div>
  @section('title', 'Product Sales Crud')

  <div class="w-full max-w-xs">
    {{-- <form wire:submit.prevent="{{ $id ? 'update' : 'store' }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4"> --}}
    <form wire:submit="saved" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">

      <!-- Hidden input for the ID -->
      <input wire:model="ProductForm.id" id="ProductForm.id" type="hidden" value="{{ $id ? $id : null }}">

      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
          Name
        </label>
        <input
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
          wire:model="ProductForm.name" id="ProductForm.name" type="text" placeholder="Name">

        @error('ProductForm.name')
          <span class="error">{{ $message }}</span>
        @enderror
      </div>

      <!-- Submit button that changes based on the operation -->
      <button type="submit" class="mt-4 bg-blue-500 text-white py-2 px-4 rounded">
        @if ($id)
          Update
        @else
          Save
        @endif
      </button>
    </form>
  </div>
</div>
