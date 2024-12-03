<?php

namespace App\Livewire\Pages\Master\Product;

use Livewire\Component;
use App\Models\Company;

class ProductIndex extends Component
{

  public $route = '';
  public string $title = 'Product';
  public string $url = '/product';

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
      ])->title($this->title);
  }
}
