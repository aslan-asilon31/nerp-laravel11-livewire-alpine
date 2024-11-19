<?php

namespace App\Livewire\Pages\Sales\Components;

use Livewire\Component;

class SidebarSales extends Component
{
  public $module;

  public function mount($module)
  {
    $this->module = $module;
  }

  public function render()
  {
    return view('livewire.pages.sales.components.sidebar-sales');
  }
}
