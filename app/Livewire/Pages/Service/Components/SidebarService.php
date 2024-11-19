<?php

namespace App\Livewire\Pages\Service\Components;

use Livewire\Component;

class SidebarService extends Component
{
  public $module;


  public function mount($module)
  {
    $this->module = $module;
  }

  public function render()
  {
    return view('livewire.pages.service.components.sidebar-service');
  }
}
