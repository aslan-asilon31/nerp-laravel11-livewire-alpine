<?php

namespace App\Livewire\Pages\Hr\Components;

use Livewire\Component;

class SidebarHr extends Component
{
  public $module;


  public function mount($module)
  {
    $this->module = $module;
  }

  public function render()
  {
    return view('livewire.pages.hr.components.sidebar-hr');
  }
}
