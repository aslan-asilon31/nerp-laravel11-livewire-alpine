<?php

namespace App\Livewire\Pages\Manufacture;

use Livewire\Component;

class DashboardManufacture extends Component
{
  public $activeModule;

  public function mount()
  {
    $this->activeModule = 'manufacture'; // Default module
  }

  public function navigateToManufacture()
  {
    $this->activeModule = 'whr';
  }

  public function render()
  {

    return view('livewire.pages.manufacture.dashboard-manufacture')
      ->layout('components.layouts.app', [
        'sidebar' => view('livewire.pages.manufacture.components.sidebar-manufacture'),
      ]);
  }
}
