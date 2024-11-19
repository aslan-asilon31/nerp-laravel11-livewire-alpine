<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Url;
use App\Models\User;
use Livewire\WithPagination;
use Illuminate\Http\JsonResponse;

class Employees extends Component
{
    use WithPagination;
    
    #[Url] 
    public $search = '';

    public $name, $email, $id;
    public $isModalOpen = false;


    protected $listeners = [
        'editEmployee' => 'edit',
        'deleteEmployee' => 'delete',
    ];


    // New API method
    public function getEmployeesApi(): JsonResponse
    {
        $employees = User::where('name', 'like', '%' . $this->search . '%')
            ->orWhere('email', 'like', '%' . $this->search . '%')
            ->latest()
            ->get();

        return response()->json($employees);
    }
    
    public function create()
    {
        $this->resetCreateForm();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isModalOpen = true;
    }

    public function closeModal()
    {
        $this->isModalOpen = false;
    }

    private function resetCreateForm(){
        $this->name = '';
        $this->email  = '';
    }
    
    public function save()
    {
        $this->validate([
            'name' => 'required',
            'email'  => 'required',
        ]);

        User::updateOrCreate(['id' => $this->id], [
            'updated_by'   => auth()->user()->id,
            'name'     => $this->name,
            'slug'      => str($this->name)->slug(),
            'email'      => $this->email,
        ]);

        session()->flash('message', $this->id ? 'Data updated successfully.' : 'Data added successfully.');

        $this->closeModal();

        $this->resetCreateForm();
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $this->id  = $id;
        $this->name    = $user->name;
        $this->email     = $user->email;
    
        $this->openModal();
    }
    
    public function delete($id)
    {
        User::find($id)->delete();
        session()->flash('message', 'Data deleted successfully.');
    }

    public function render()
    {

        $employees = User::where('name', 'like', '%' . $this->search . '%')
        ->orWhere('email', 'like', '%' . $this->search . '%')
        ->latest() 
        ->paginate(5);

        return view('livewire.employees', [
        'employees' => $employees,
        ]);


    }
    
    

}
