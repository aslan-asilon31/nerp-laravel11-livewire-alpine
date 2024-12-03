<?php

namespace App\Livewire\Pages\Master\Price;

use Livewire\Component;
use App\Models\Company;

class PriceIndex extends Component
{

  public $route = '';
  public string $title = 'Price';
  public string $url = '/price';

  public function mount()
  {
    $this->route = request()->route()->getName(); // Set initial route on mount
  }

  public function render()
  {
    $companies = Company::all();
    return view('livewire.pages.master.product.product-index', [
      'companies' => $companies,
    ])
      ->layout('components.layouts.app', [
        'sidebar' => view('livewire.pages.sales.components.sidebar-sales', [
          'companies' => $companies,
        ]),
      ]);
  }
}
