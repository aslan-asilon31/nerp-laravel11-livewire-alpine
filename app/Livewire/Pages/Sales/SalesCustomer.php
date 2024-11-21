<?php

namespace App\Livewire\Pages\Sales;

use Livewire\Component;

class SalesCustomer extends Component
{
  public function render()
  {
    return view('livewire.pages.sales.sales-customer')
      ->layout('components.layouts.app', [
        'sidebar' => view('livewire.pages.sales.components.sidebar-sales'),
      ]);
  }
}
