<?php

namespace App\Livewire\Components;

use Livewire\Component;
use App\Models\Company;

class MenuSidebar extends Component
{

  public $route = '';

  public function mount()
  {
    $this->route = request()->route()->getName();
    $this->companies = Company::all();
  }

  public function render()
  {
    return view('livewire.components.menu-sidebar', [
      'companies' => $this->companies // Mengirim data companies ke view
    ]);
  }
}
