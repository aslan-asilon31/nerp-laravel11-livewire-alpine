<?php

namespace App\Livewire\Pages\Sales\Product\Department;

use Livewire\Component;
use App\Models\Company;

class DepartmentIndex extends Component
{

  public $route = '';

  public function mount()
  {
    $this->route = request()->route()->getName(); // Set initial route on mount
  }


  public function render()
  {
    $companies = Company::all();
    return view('livewire.pages.sales.product.product.product-index', [
      'companies' => $companies,
    ])
      ->layout('components.layouts.app', [
        'sidebar' => view('livewire.pages.sales.components.sidebar-sales', [
          'companies' => $companies,
        ]),
      ]);
  }
}
