<?php

namespace App\Livewire\Pages\Sales;

use Livewire\Component;

class DashboardSales extends Component
{

  public function mount() {}


  public function render()
  {
    return view('livewire.pages.sales.dashboard-sales')
      ->layout('components.layouts.app', [
        'sidebar' => view('livewire.pages.sales.components.sidebar-sales'),
      ]);
  }
}
