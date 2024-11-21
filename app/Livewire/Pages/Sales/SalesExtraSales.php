<?php

namespace App\Livewire\Pages\Sales;

use Livewire\Component;

class SalesExtraSales extends Component
{
  public function render()
  {
    return view('livewire.pages.sales.sales-extra-sales')
      ->layout('components.layouts.app', [
        'sidebar' => view('livewire.pages.sales.components.sidebar-sales'),
      ]);
  }
}
