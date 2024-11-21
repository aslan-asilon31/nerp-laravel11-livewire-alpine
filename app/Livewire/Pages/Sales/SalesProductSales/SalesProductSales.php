<?php

namespace App\Livewire\Pages\Sales\SalesProductSales;

use Livewire\Component;

class SalesProductSales extends Component
{

  public $route = '';

  public function mount()
  {
    $this->route = request()->route()->getName(); // Set initial route on mount
  }

  public function render()
  {
    return view('livewire.pages.sales.sales-product-sales')
      ->layout('components.layouts.app', [
        'sidebar' => view('livewire.pages.sales.components.sidebar-sales'),
      ]);
  }
}
