<?php

namespace App\Livewire\Pages\Sales;

use Livewire\Component;

class SalesBestSeller extends Component
{

  public $route = '';

  public function mount()
  {
    $this->route = request()->route()->getName();
  }

  public function render()
  {
    return view('livewire.pages.sales.sales-best-seller')
      ->layout('components.layouts.app', [
        'sidebar' => view('livewire.pages.sales.components.sidebar-sales'),
      ]);
  }
}
