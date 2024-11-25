<?php

namespace App\Livewire\Pages\Manufacture\Components;

use Livewire\Component;

class SidebarManufacture extends Component
{
  public $module;


  public function mount($module)
  {
    $this->module = $module;
  }

  public function render()
  {
    return view('livewire.pages.manufacture.components.sidebar-manufacture');
  }
}
