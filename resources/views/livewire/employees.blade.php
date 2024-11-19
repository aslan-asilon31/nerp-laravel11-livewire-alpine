<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            @if (session()->has('message'))
            <div class="py-3">
                <p class="text-sm">{{ session('message') }}</p>
            </div>
            @endif

            <button wire:click="create()" class="bg-indigo-500 text-white font-bold py-2 px-4 rounded my-3">Create Employee</button>
            @if($isModalOpen)
            <x-employee.form/>
            @endif

            <!-- Search Input -->
            <input type="text" wire:model.live="search" placeholder="search data ....">

            <table class="table-fixed w-full mt-5">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2 w-20">No.</th>
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">Email</th>
                        <th class="px-4 py-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 0; @endphp
                    @forelse ($employees as $employee)
                    <tr>
                        <td class="border px-4 py-2">{{ ++$no }}</td>
                        <td class="border px-4 py-2" wire:key="{{ $employee->id }}">{{ $employee->name }}</td>
                        <td class="border px-4 py-2" wire:key="{{ $employee->email }}">{{ $employee->email }}</td>
                        <td class="border px-4 py-2">
                            <button wire:click="edit({{ $employee->id }})" class="bg-indigo-600 text-white font-bold py-2 px-4 rounded">Edit</button>
                            <button class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" wire:click="delete({{ $employee->id }})">Delete</button>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4">
                            <p class="text-center">No Data</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>

            {{ $employees->links() }}

        </div>
    </div>
</div>
