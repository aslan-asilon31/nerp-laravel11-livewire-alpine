<?php

namespace App\Livewire\Pages\Welcome\Components;

use Livewire\Component;

class SidebarWelcome extends Component
{
  public $module;


  public function mount($module)
  {
    $this->module = $module;
  }

  public function render()
  {
    return view('livewire.pages.welcome.components.sidebar-welcome');
  }
}
