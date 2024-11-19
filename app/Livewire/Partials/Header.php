<?php

namespace App\Livewire\Partials;

use Livewire\Component;

class Header extends Component
{
  public $activeModule = 'sales'; // Set the default active module, for example 'sales'

  public function mount()
  {
    $this->activeModule = request()->segment(1) ?? 'sales';
  }

  public function setActiveModule($module)
  {
    $this->activeModule = $module;
  }

  public function render()
  {
    return view('livewire.partials.header');
  }
}
