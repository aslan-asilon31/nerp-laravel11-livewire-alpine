<?php

namespace App\Livewire\Pages\Warehouse;

use Livewire\Component;

class DashboardWarehouse extends Component
{
  public $activeModule;

  public function mount()
  {
    $this->activeModule = 'warehouse'; // Default module
  }

  public function navigateToWarehouse()
  {
    $this->activeModule = 'warehouse';
  }

  public function render()
  {

    return view('livewire.pages.warehouse.dashboard-warehouse')
      ->layout('components.layouts.app', [
        'sidebar' => view('livewire.pages.warehouse.components.sidebar-warehouse'),
      ]);
  }
}
