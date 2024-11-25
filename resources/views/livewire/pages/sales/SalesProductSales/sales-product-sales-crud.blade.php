<div>
  @section('title', 'Product Sales Crud')

  
  <!-- Filepond stylesheet -->
  <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet" />
  <div class="w-full ">
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

      <div class='mb-4'>
        <input type="file" 
        wire:model="ProductForm.filepond"
        id="ProductForm.filepond"
        class="filepond"
        name="filepond"
        multiple 
        data-allow-reorder="true"
        data-max-file-size="3MB"
        data-max-files="3"
        accept="image/png, image/jpeg, image/gif"/>
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


  <script src="https://unpkg.com/filepond/dist/filepond.js"></script>

    <!-- Load FilePond library -->
    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
    <!-- add in <head> -->
    <link href="https://unpkg.com/filepond/dist/filepond.min.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css" rel="stylesheet">


  <!-- add before </body> -->
  <script src="https://unpkg.com/filepond-plugin-file-encode/dist/filepond-plugin-file-encode.min.js"></script>

  <script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.min.js"></script>

  <script src="https://unpkg.com/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.min.js"></script>

  <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.js"></script>

  <script src="https://unpkg.com/filepond/dist/filepond.min.js"></script>

  <script>
      FilePond.registerPlugin(

      // encodes the file as base64 data
      FilePondPluginFileEncode,

      // validates the size of the file
      FilePondPluginFileValidateSize,

      // corrects mobile image orientation
      FilePondPluginImageExifOrientation,

      // previews dropped images
      FilePondPluginImagePreview
      ); 

      // Select the file input and use create() to turn it into a pond
      FilePond.create(
          document.querySelector("input[name='filepond']")
      );

      FilePond.parse(document.body);

      FilePond.create(
        document.querySelector('input'),
        {
          labelIdle: `Drag & Drop your picture or <span class="filepond--label-action">Browse</span>`,
          imagePreviewHeight: 170,
          imageCropAspectRatio: '1:1',
          imageResizeTargetWidth: 200,
          imageResizeTargetHeight: 200,
          stylePanelLayout: 'compact circle',
          styleLoadIndicatorPosition: 'center bottom',
          styleProgressIndicatorPosition: 'right bottom',
          styleButtonRemoveItemPosition: 'left bottom',
          styleButtonProcessItemPosition: 'right bottom',
        }
      );



      FilePond.registerPlugin(
      FilePondPluginFileValidateType,
      FilePondPluginImageExifOrientation,
      FilePondPluginImagePreview,
      FilePondPluginImageCrop,
      FilePondPluginImageResize,
      FilePondPluginImageTransform,
      FilePondPluginImageEdit
      );

      // Select the file input and use 
      // create() to turn it into a pond
      FilePond.create(
        document.querySelector('input'),
        {
          labelIdle: `Drag & Drop your picture or <span class="filepond--label-action">Browse</span>`,
          imagePreviewHeight: 170,
          imageCropAspectRatio: '1:1',
          imageResizeTargetWidth: 200,
          imageResizeTargetHeight: 200,
          stylePanelLayout: 'compact circle',
          styleLoadIndicatorPosition: 'center bottom',
          styleProgressIndicatorPosition: 'right bottom',
          styleButtonRemoveItemPosition: 'left bottom',
          styleButtonProcessItemPosition: 'right bottom',
        }
      );

  </script>

</div>
