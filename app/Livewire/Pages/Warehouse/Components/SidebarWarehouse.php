<?php

namespace App\Livewire\Pages\Warehouse\Components;

use Livewire\Component;

class SidebarWarehouse extends Component
{
  public $module;


  public function mount($module)
  {
    $this->module = $module;
  }

  public function render()
  {
    return view('livewire.pages.warehouse.components.sidebar-warehouse');
  }
}
