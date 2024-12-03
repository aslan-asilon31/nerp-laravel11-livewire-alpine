<div>
  <!-- Filepond stylesheet -->
  <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet" />
  <div class="w-full bg-white ">
    <div class="mb-4">
      <h1>Form {{ $title }}</h1>
    </div>

    <form wire:submit="store" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">

      <!-- Hidden input for the ID -->
      <input wire:model="bank.id" id="bank.id" type="hidden" value="{{ $id ? $id : null }}">

      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
          Name
        </label>

        <input
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
          wire:model="name" id="bank.name" type="text" placeholder="Name">


        <x-select label="Country" placeholder="Country" wire:model="form.country" :options="$banks" />

        @error('bank.name')
          <span class="error">{{ $message }}</span>
        @enderror
      </div>


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
