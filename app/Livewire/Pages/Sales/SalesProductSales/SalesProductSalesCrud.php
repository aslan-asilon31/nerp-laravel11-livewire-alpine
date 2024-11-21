<?php

namespace App\Livewire\Pages\Sales\SalesProductSales;

use App\Models\Product;

use Livewire\Component;

class SalesProductSales extends Component
{

  public $route = '';


  // #[\Livewire\Attributes\Locked]
  public string $id = '';

  public function mount()
  {
    if ($this->id) {
      $this->edit();
    } else {
      $this->create();
    }
  }

  public function render()
  {
    return view('livewire.pages.sales.sales-product-sales')
      ->layout('components.layouts.app', [
        'sidebar' => view('livewire.pages.sales.components.sidebar-sales'),
      ]);
  }
}
