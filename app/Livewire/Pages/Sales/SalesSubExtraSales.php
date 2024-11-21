<?php

namespace App\Livewire\Pages\Sales;

use Livewire\Component;

class SalesSubExtraSales extends Component
{
  public function render()
  {
    return view('livewire.pages.sales.sales-sub-extra-sales')
      ->layout('components.layouts.app', [
        'sidebar' => view('livewire.pages.sales.components.sidebar-sales'),
      ]);
  }
}
