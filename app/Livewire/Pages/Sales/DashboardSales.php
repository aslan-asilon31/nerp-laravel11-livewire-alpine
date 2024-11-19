<?php

namespace App\Livewire\Pages\Sales;

use Livewire\Component;

class DashboardSales extends Component
{

  public $activeModule;

  public function mount()
  {
    $this->activeModule = 'sales'; // Default module
  }

  public function navigateToSales()
  {
    $this->activeModule = 'sales';
  }

  public function render()
  {
    return view('livewire.pages.sales.dashboard-sales')
      ->layout('components.layouts.app', [
        'sidebar' => view('livewire.pages.sales.components.sidebar-sales'),
        'activeModule' => $this->activeModule, // Pass ke layout
      ]);
  }
}
