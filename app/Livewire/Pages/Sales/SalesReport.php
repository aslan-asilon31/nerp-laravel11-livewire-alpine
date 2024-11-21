<?php

namespace App\Livewire\Pages\Sales;

use Livewire\Component;

class SalesReport extends Component
{

  public function render()
  {
    return view('livewire.pages.sales.sales-report')
      ->layout('components.layouts.app', [
        'sidebar' => view('livewire.pages.sales.components.sidebar-sales'),
      ]);
  }
}
