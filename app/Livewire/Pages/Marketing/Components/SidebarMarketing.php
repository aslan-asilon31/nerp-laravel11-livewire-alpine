<?php

namespace App\Livewire\Pages\Marketing\Components;

use Livewire\Component;

class SidebarMarketing extends Component
{
  public $module;


  public function mount($module)
  {
    $this->module = $module;
  }

  public function render()
  {
    return view('livewire.pages.marketing.components.sidebar-marketing');
  }
}
